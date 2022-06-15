<div class="revolution-slider owl-carousel owl-loaded owl-drag">
    <div class="owl-stage-outer">
        <div class="owl-stage">
            <?php foreach ($list_item as $item) {
                $postPhotoData = json_decode((trim($item->post_photo_data)));
                if (isset($postPhotoData->banner_photo) && !empty($postPhotoData->banner_photo)) {
                    $bannerPhoto = $postPhotoData->banner_photo;
                } else {
                    $bannerPhoto = $item->post_photo;
                }
                $images_url = $seo->resizeImage($seo->imageUrl($bannerPhoto), 1250, 550);
                ?>
                <div class="owl-item slide">
                    <div class="item">
                        <article class="cate-news">
                            <div class="post-img">
                                <a href="<?php echo $seo->siteUrl($item->cat_slug); ?>">
                                    <img src="<?php echo $images_url; ?>" alt="<?php echo escapeHtml($item->post_slug); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                </a>
                            </div>
                            <div class="caption color post-info">
                                <h2 class="title-cate">
                                    <a href="<?php echo $seo->siteUrl($item->cat_slug); ?>" title="<?php echo escapeHtml($item->cat_name); ?>"><?php echo $item->cat_name; ?></a>
                                </h2>
                                <div class="title-post">
                                    <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                        <?php echo $item->post_name; ?>
                                    </a>
                                </div>
                                <div class="date-time"> <?php echo date('d/m/Y', strtotime($item->post_updated_at)); ?> </div>
                            </div>
                        </article>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>