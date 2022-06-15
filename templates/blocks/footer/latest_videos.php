<div class="column column_1_3">
    <h4 class="box_header">
        <a href="<?= $boxed_header['url']; ?>" title="<?= $boxed_header['title']; ?>" rel="nofollow" target="_blank">
            <?= $boxed_header['name']; ?>
        </a>
    </h4>
    <div class="horizontal_carousel_container big page_margin_top">
        <ul class="blog horizontal_carousel visible-1 autoplay-0 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
            <?php foreach ($list_item as $item) { ?>
                <li class="post">
                    <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_title); ?>">
                        <span class="icon video"></span>
                        <img height="242px" src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 330, 242); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                    </a>
                    <h5>
                        <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_title); ?>">
                            <?php echo word_limiter($item->post_name, 10); ?>
                        </a>
                    </h5>
                    <ul class="post_details simple">
                        <li class="category">
                            <a href="<?php echo $seo->siteUrl($item->cat_slug); ?>" title="<?php echo escapeHtml(trim($item->cat_name)); ?>">
                                <?php echo $item->cat_name; ?>
                            </a>
                        </li>
                        <li class="date">
                            <?php echo date('H:i A d/m/Y', strtotime($item->post_updated_at)); ?>
                        </li>
                    </ul>
                </li>
            <?php } ?>
        </ul><!--/end .horizontal_carousel -->
    </div><!--/end .horizontal_carousel_container -->
</div><!--/end .Video mới nhất -->
