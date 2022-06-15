<div class="row page_margin_top">
    <div class="column column_1_1">
        <div class="horizontal_carousel_container small">
            <ul class="blog horizontal_carousel autoplay-1 scroll-1 visible-3 navigation-1 easing-easeInOutQuint duration-750">
                <?php foreach ($list_item as $item) { ?>
                    <li class="post">
                        <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                            <div class='box_images_top_slider'>
                                <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 540, 260); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                            </div>
                        </a>
                        <h5>
                            <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>"><?php echo word_limiter($item->post_name, 8); ?></a>
                        </h5>
                        <ul class="post_details simple">
                            <li class="category">
                                <a href="<?php echo $seo->siteUrl(trim($item->cat_slug)); ?>" title="<?php echo escapeHtml($item->cat_name); ?>">
                                    <?php echo $item->cat_name; ?>
                                </a>
                            </li>
                            <li class="date">
                                <?php echo date('H:i:s A d/m/Y', strtotime($item->post_updated_at)); ?>
                            </li>
                        </ul><!--/ end .post_details simple -->
                    </li><!--/ end .post -->
                <?php } ?>
            </ul><!--/ .End blog horizontal_carousel -->
        </div><!--/ .End horizontal_carousel_container small -->
    </div><!--/ .End column column_1_1 -->
</div><!--/ .End row page_margin_top -->
