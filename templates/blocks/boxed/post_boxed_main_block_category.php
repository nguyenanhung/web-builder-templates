<section class="multi_home blog-news <?php echo $class; ?>">
    <div class="box blog tintuc">
        <div class="widget_header">
            <i class="<?= $content['boxed_header']['icon']; ?>" aria-hidden="true"></i>
            <h2 class="title_header">
                <a href="<?= $content['boxed_header']['url']; ?>"><?= $content['boxed_header']['title']; ?></a>
            </h2>
            <div class="">
                <ul class="relative_link nav-tabs-home">
                    <?php
                    if (isset($content['boxed_data'])) {
                        foreach ($content['boxed_data'] as $key => $item) {
                            if (isset($item['title'])) {
                                if ($item['_blank'] === FALSE) {
                                    echo '<li rel="' . strtolower($key) . '"><a href="#' . strtolower($key) . '" title="' . $item['title'] . '">' . $item['name'] . '</a></li>';
                                } else {
                                    echo '<li rel="' . strtolower($key) . '"><a target="_blank" href="' . trim($item['url']) . '" title="' . $item['title'] . '">' . $item['name'] . '</a></li>';
                                }
                            }
                        }
                    }
                    ?>
                </ul>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
    <?php //echo modules::run('site-blocks/site_boxed/post_boxed_sub_category', $siteDB->getCategoryValue($item['slug'], 'slugs', 'id'), 4, strtolower($key), $item['recursive'], false, $content['boxed_header']['template_sub']); ?>
    <div class="widget_space">
        <div class="row-inner">
            <?php foreach ($list_item as $item) { ?>
                <div class="col-md-6 col-sm-6 col-xs-6 main-blog">
                    <article>
                        <div class="post-img">
                            <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 330, 242); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
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
                        </div>
                        <div class="clearfix"></div>
                    </article>

                </div>
            <?php } ?>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="tab-content">
        <?php
        if (isset($content['boxed_data'])) {
            foreach ($content['boxed_data'] as $key => $item) {
                if ($item['_blank'] == FALSE) {
                    echo modules::run('site-blocks/site_boxed/post_boxed_sub_category', $siteDB->getCategoryValue($item['slug'], 'slugs', 'id'), 4, strtolower($key), $item['recursive'], FALSE, $content['boxed_header']['template_sub']);
                }
            }
        }
        ?>
    </div>
</section>
<style>
    .nav-tabs-home li.active a {
        color: #ad1818;
    }
</style>