<div class="row page_margin_top_section">
    <div class="column column_1_1">
        <h4 class="box_header"><?=$boxed_header['title'];?></h4>
        <div class="tabs no_scroll margin_top_10 clearfix">
            <ul class="tabs_navigation small clearfix">
                <?php foreach ($boxed_data as $item) { ?>
                    <li><a href="#<?=$item['id'];?>" title="<?=$item['title'];?>"><?=$item['name'];?></a></li>
                <?php } ?>
            </ul>
            <?php foreach ($boxed_data as $l_item) { ?>
                <div id="<?=$l_item['id'];?>">
                    <div class="horizontal_carousel_container page_margin_top">
                        <ul class="blog horizontal_carousel page_margin_top autoplay-0 scroll-1 visible-4 navigation-1 easing-easeInOutQuint duration-750">
                            <?php foreach ($l_item['list_item'] as $key => $item) { ?>
                            <li class="post">
                                <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                    <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 540, 260); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                                </a>
                                <h5>
                                    <span class="number"><?php echo $key + 1; ?>.</span>
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
                                </ul>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div><!-- Top Posts -->
