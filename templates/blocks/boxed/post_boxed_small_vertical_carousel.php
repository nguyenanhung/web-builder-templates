<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 5/7/18
 * Time: 10:02
 */
?>
<h4 class="box_header_right page_margin_top_section">
    <a class="color_font_white" href="<?=$boxed_header['url'];?>" title="<?=$boxed_header['title'];?>">
        <?=$boxed_header['name'];?>
    </a>
</h4>
<div class="vertical_carousel_container clearfix">
    <ul class="blog small vertical_carousel autoplay-1 scroll-1 navigation-1 easing-easeInOutQuint duration-750">
        <?php foreach ($list_item as $item) { ?>
            <li class="post">
                <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                    <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 100, 100); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                </a>
                <div class="post_content">
                    <h5>
                        <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                            <?php echo word_limiter($item->post_name, 10); ?>
                        </a>
                    </h5>
                    <ul class="post_details simple">
                        <li class="category">
                            <a href="<?php echo $seo->siteUrl($item->cat_slug); ?>" title="<?php echo escapeHtml($item->cat_name); ?>">
                                <?php echo $item->cat_name; ?>
                            </a>
                        </li>
                        <li class="date">
                            <?php echo date('H:i A d/m/Y', strtotime($item->post_updated_at)); ?>
                        </li>
                    </ul>
                </div>
            </li>
        <?php } ?>
    </ul>
</div>
