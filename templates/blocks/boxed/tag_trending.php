
<h4 class="box_header page_margin_top">
    <a class="color_font_red" href="<?=$boxed_header['url'];?>" title="<?=$boxed_header['title'];?>">
        <?=$boxed_header['name'];?>
    </a>
</h4>
<ul class="taxonomies clearfix page_margin_top">
    <?php foreach ($list_item as $item) { ?>
    <li><a href="<?php echo $seo->siteUrl(trim($router_module).$item->slugs); ?>" title="<?php echo escapeHtml($item->title); ?>"><?php echo $item->name; ?></a></li>
    <?php } ?>
</ul>
