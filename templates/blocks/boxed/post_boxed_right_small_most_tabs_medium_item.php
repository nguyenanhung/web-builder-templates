
<div id="<?php echo trim($table_id); ?>">
    <ul class="blog small_margin clearfix">
        <?php foreach ($list_item as $item) { ?>
            <li class="post">
                <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                    <div class='box_images_right_hot'>
                        <img src="<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 540, 260); ?>" alt='<?php echo escapeHtml($item->post_slug); ?>'>
                    </div>
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
