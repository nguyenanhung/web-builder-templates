<section class="multi_home blog-news">
    <div class="box blog tintuc">
        <div class="widget_header">
            <i class="<?= $content['boxed_header']['icon']; ?>" aria-hidden="true"></i>
            <h2 class="title_header">
                <a href="<?= $content['boxed_header']['url']; ?>" title="<?= $content['boxed_header']['title']; ?>"><span class="text-span"><?= $content['boxed_header']['title']; ?></span></a>
            </h2>
            <?php if (isset($content['boxed_data'])) { ?>
                <ul class="relative_link">
                    <?php
                    foreach ($content['boxed_data'] as $key => $item) {
                        if (isset($item['title'])) {
                            if ($item['_blank'] === FALSE) {
                                echo '<li><a data-toggle="tab" href="#' . strtolower($key) . '" title="' . $item['title'] . '">' . $item['name'] . '</a></li>';
                            } else {
                                echo '<li><a target="_blank" href="' . trim($item['url']) . '" title="' . $item['title'] . '">' . $item['name'] . '</a></li>';
                            }
                        }
                    }
                    ?>
                </ul>
            <?php } ?>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="widget_space">
        <div class="row-inner">
            <div class="col-md-6 col-sm-6 col-xs-6 main-blog">
                <?php foreach ($hot_item as $item) { ?>
                    <article>
                        <div class="post-img">
                            <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 345, 200); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                            </a>
                        </div>
                        <div class="post-info">
                            <header class="entry-title">
                                <h2 class="heading-title">
                                    <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                        <?php echo $item->post_name; ?>
                                    </a>
                                </h2>
                            </header>
                            <div class="entry-content description_box">
                                <p title="<?php echo escapeHtml($item->post_summary); ?>">
                                    <?php echo word_limiter(escapeHtml($item->post_summary), 50); ?>
                                </p>
                            </div>
                            <div class="link-info">
                                <span><h2 class="title-cat"><a href="<?php echo $seo->siteUrl($item->cat_slug) ?>"><?php echo $item->cat_name ?></a></h2></span>
                                <span><div class="date-time"><i class="fa fa-calendar"></i> <?php echo date('d/m/Y', strtotime($item->post_updated_at)); ?> </div></span>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                <?php } ?>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 blog-sidebar">
                <div class="list_blog_widget ">
                    <ul class="post_list_widget">
                        <?php foreach ($list_item as $item) { ?>
                            <li>
                                <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>" class="blog-image">
                                    <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 120, 90); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                                </a>
                                <div class="widget-post-content">
                                    <h3 class="post-title">
                                        <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                            <?php echo $item->post_name; ?>
                                        </a>
                                    </h3>
                                    <div class="link-info">
                                        <span><h2 class="title-cat"><a href="<?php echo $seo->siteUrl($item->cat_slug) ?>"><?php echo $item->cat_name ?></a></h2></span>
                                        <span><div class="date-time"> <?php echo date('d/m/Y', strtotime($item->post_updated_at)); ?> </div></span>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php if (isset($content['boxed_data'])) { ?>
        <div class="panel-body">
            <div class="tab-content">
                <?php foreach ($content['boxed_data'] as $key => $item) {
                    if ($item['_blank'] == FALSE) {
                        echo modules::run('site-blocks/site_boxed/post_boxed_sub_category', $siteDB->getCategoryValue($item['slug'], 'slugs', 'id'), 4, strtolower($key), $item['recursive'], FALSE);
                    }
                } ?>
            </div>
        </div>
    <?php } ?>
</section>
