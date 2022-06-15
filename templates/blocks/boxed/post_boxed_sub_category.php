<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 5/6/18
 * Time: 04:21
 */
?>
<!-- Table Sub Category -->
<div id="<?php echo $table_id; ?>">
    <div class="row">
        <ul class="blog column column_1_2">
            <?php foreach ($hot_item as $item) { ?>
                <li class="post">
                    <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                        <div class='box_images_medium'>
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
                        <div class="link-info">
                            <span><h2 class="title-cat"><a href="<?php echo $seo->siteUrl($item->cat_slug) ?>"><?php echo $item->cat_name ?></a></h2></span>
                            <span><div class="date-time"><i class="fa fa-calendar"></i> <?php echo date('d/m/Y', strtotime($item->post_updated_at)); ?> </div></span>
                        </div>
                    </ul>
                    <p title="<?php echo escapeHtml($item->post_summary); ?>">
                        <?php echo word_limiter(escapeHtml($item->post_summary), 30); ?>
                    </p>
                </li>
            <?php } ?>
        </ul>
        <div class="column column_1_2">
            <ul class="blog small clearfix">
                <?php foreach ($list_item as $item) { ?>
                    <li class="post">
                        <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                            <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 100, 100); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                        </a>
                        <div class="post_content">
                            <h5><a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>"><?php echo $item->post_name; ?></a></h5>
                            <ul class="post_details simple">
                                <li class="category"><a href="<?php echo $seo->siteUrl($item->cat_slug); ?>" title="<?php echo escapeHtml($item->cat_name); ?>"><?php echo $item->cat_name; ?></a></li>
                                <li class="date"><?php echo date('d/m/Y', strtotime($item->post_updated_at)); ?></li>
                            </ul>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
