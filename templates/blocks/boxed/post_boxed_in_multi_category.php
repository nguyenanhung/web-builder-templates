<section class="multi_home main-box  main-cate">
    <div class="box blog tintuc">
        <div class="widget_header">
            <i class="fa fa-globe" aria-hidden="true"></i>
            <h2 class="title_header">
                <a href="<?php echo $seo->siteUrl($cat_info->slugs) ?>" title="<?php echo $cat_info->name ?>"><?php echo $cat_info->name ?></a>
            </h2>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="widget_space">
        <?php foreach ($hot_item as $item) { ?>
            <article>
                <div class="row-inner">
                    <div class="col-md-6 main-blog">
                        <div class="post-img">
                            <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 330, 242); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-6 main-blog">
                        <div class="post-info">
                            <header class="entry-title">
                                <h2 class="heading-title">
                                    <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                        <?php echo $item->post_name; ?>
                                    </a>
                                </h2>
                                <div class="link-info">
                                    <span><h2 class="title-cat"><a href="<?php echo $seo->siteUrl($item->cat_slug) ?>"><?php echo $item->cat_name ?></a></h2></span>
                                    <span><div class="date-time"><i class="fa fa-calendar"></i> <?php echo date('d/m/Y', strtotime($item->post_updated_at)); ?> </div></span>
                                </div>
                            </header>
                            <div class="entry-content description_box">
                                <p title="<?php echo escapeHtml($item->post_summary); ?>">
                                    <?php echo word_limiter(escapeHtml($item->post_summary), 50); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </article>
        <?php } ?>
    </div>
</section>
<section class="multi-item-box">
    <?php foreach ($list_item as $item) { ?>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">
                    <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4">
                        <div class="post-img">
                            <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 330, 242); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-7 col-sm-8 col-md-8 col-lg-8 content">
                        <header class="entry-title">
                            <h2 class="heading-title">
                                <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                    <?php echo $item->post_name; ?>
                                </a>
                            </h2>
                            <div class="link-info">
                                <span><h2 class="title-cat"><a href="<?php echo $seo->siteUrl($item->cat_slug) ?>"><?php echo $item->cat_name ?></a></h2></span>
                                <span><div class="date-time"><i class="fa fa-calendar"></i> <?php echo date('d/m/Y', strtotime($item->post_updated_at)); ?> </div></span>
                            </div>
                        </header>
                        <div class="entry-content description_box">
                            <p title="<?php echo escapeHtml($item->post_summary); ?>">
                                <?php echo word_limiter(escapeHtml($item->post_summary), 50); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    <?php } ?>
</section>
<style>
    .multi-item-box .row:last-child hr {
        display: none;
    }
</style>