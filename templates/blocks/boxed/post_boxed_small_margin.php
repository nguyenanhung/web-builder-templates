
<h4 class="box_header_right">
    <a class="color_font_white" href="<?=$boxed_header['url'];?>" title="<?=$boxed_header['title'];?>"><?=$boxed_header['name'];?></a>
</h4>
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
