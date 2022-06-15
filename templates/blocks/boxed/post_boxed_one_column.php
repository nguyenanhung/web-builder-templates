<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 5/6/18
 * Time: 07:52
 */
?>
<div class="column column_1_2">
    <h4 class="box_header_content <?=$boxed_header['color'];?>">
        <a class="color_font_white" href="<?=$boxed_header['url'];?>" title="<?=$boxed_header['title'];?>" target="_blank"><?=$boxed_header['name'];?></a>
    </h4>
    <ul class="blog">
        <?php foreach ($hot_item as $item) {  ?>
            <li class="post">
                <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                    <div class='box_images_medium_200'>
                        <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 540, 260); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                    </div>
                </a>
                <h2>
                    <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                        <?php echo $item->post_name; ?>
                    </a>
                </h2>
                <ul class="post_details">
                    <li class="category">
                        <a href="<?php echo $seo->siteUrl($item->cat_slug); ?>" title="<?php echo escapeHtml($item->cat_name); ?>">
                            <?php echo $item->cat_name; ?>
                        </a>
                    </li>
                    <li class="date">
                        <?php echo date('H:i A d/m/Y', strtotime($item->post_updated_at)); ?>
                    </li>
                </ul>
                <p title="<?php echo escapeHtml($item->post_summary); ?>">
                    <?php echo word_limiter(escapeHtml($item->post_summary), 30); ?>
                </p>
            </li>
        <?php } ?>
    </ul>
    <ul class="blog small clearfix">
        <?php foreach ($list_item as $item) {  ?>
            <li class="post">
                <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                    <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 100, 100); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                </a>
                <div class="post_content">
                    <h5>
                        <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                            <?php echo $item->post_name; ?>
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
