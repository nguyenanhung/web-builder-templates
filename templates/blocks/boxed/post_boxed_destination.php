<div class="row heading-row">
    <div class="col-xs-12">
        <div class="wrapper-col">
            <div class="widget_header">
                <i class="<?= $boxed_header['icon']; ?>" aria-hidden="true"></i>
                <h2 class="title_header">
                    <a href="<?= $boxed_header['url']; ?>" title="<?= $boxed_header['title']; ?>"><span class="text-span"><?= $boxed_header['name']; ?></span></a>
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="row destination">
    <?php foreach ($list_item as $item) { ?>
        <div class="col-md-4 col-sm-4 col-xs-12 ">
            <div class="wrapper-col">
                <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                    <img src="<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 360, 260); ?>" alt='<?php echo escapeHtml($item->post_slug); ?>'>
                    <span class="destinationName"><?php echo $item->post_name; ?></span>
                </a>
            </div>
        </div>
    <?php } ?>
</div>