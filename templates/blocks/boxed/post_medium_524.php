
<div class="slider-food">
    <?php foreach ($list_item as $item) { ?>
        <article class="cate-food">
            <div class="post-img">               
                <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                    <img src="<?php echo $seo->imageUrl(jsonItem($item->post_photo_data, '524x')); ?>" alt="<?php echo escapeHtml($item->post_slug); ?>">
                </a>
            </div>
            <div class="caption color post-info">
                <h2 class="title-cate">
                    <a href="<?php echo $seo->siteUrl($item->cat_slug); ?>" title="<?php echo escapeHtml($item->cat_name); ?>"><?php echo $item->cat_name; ?></a>
                </h2>
                <div class="title-post">
                    <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>" class="link-detail"><?php echo $item->post_name; ?></a>
                </div>
            </div>
        </article>
    <?php } ?>
</div>