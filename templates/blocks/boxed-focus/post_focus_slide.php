<?php foreach ($list_item as $item) { ?>
    <li class="slide">
        <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
            <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 540, 260); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
        </a>
        <div class="slider_content_box">
            <ul class="post_details simple">
                <li class="category">
                    <a title="<?php echo escapeHtml($item->cat_name); ?>" href="<?php echo $seo->siteUrl($item->cat_slug); ?>"><?php echo $item->cat_name; ?></a>
                </li>
            </ul>
            <h2>
                <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>"><?php echo $item->post_name; ?></a>
            </h2>
        </div>
    </li>
<?php } ?>
