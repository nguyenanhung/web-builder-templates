
<section class="blog-widget">
    <div class="title-widget">
        <h3>
            <a class="color_font_white" title="<?=$boxed_header['title'];?>">
                <?=$boxed_header['name'];?>
            </a>
        </h3>
    </div>
    <div class="list_blog_widget ">
        <ul class="post_list_widget">

            <?php foreach ($list_item as $item) { ?>
                <li>
                    <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>" class="blog-image">
                        <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 100, 100); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                    </a>
                    <div class="widget-post-content">
                        <h3 class="post-title">
                            <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                <?php echo $item->post_name; ?>
                            </a>
                        </h3>
                        <div class="link-info">
                            <span><h2 class="title-cat"><a href="<?php echo $seo->siteUrl($item->cat_slug); ?>"><?php echo $item->cat_name; ?></a></h2></span>
                            <span><div class="date-time"><?php echo date('d/m/Y', strtotime($item->post_updated_at));?> </div></span>
                        </div>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </div>
</section>
