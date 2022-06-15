<section class="multi_home post-type video">
    <div class="box blog tintuc">
        <div class="widget_header">
            <i class="<?= isset($boxed_header['icon']) ? $boxed_header['icon'] : 'fa fa-video-camera'; ?>" aria-hidden="true"></i>
            <h2 class="title_header">
                <a href="<?= isset($boxed_header['url']) ? $boxed_header['url'] : $seo->siteUrl('video'); ?>" title="Video"><span class="text-span"><?php echo $boxed_header['title']; ?></span></a>
            </h2>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row" style="padding-top: 15px;">
        <div class="col-md-7 col-xs-7 main-blog">
            <div class="blog-box">
                <?php foreach ($hot_item as $item) { ?>
                    <article>
                        <div class="post-img box-video">
                            <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 400, 200); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                            </a>
                            <div class="lgVid">
                                <span><a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>"><i class="fa fa-play" aria-hidden="true"></i></a></span>
                            </div>
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
                                <span><h2 class="title-cat"><a href="<?php echo $seo->siteUrl($item->cat_slug); ?>"><?php echo $item->cat_name; ?></a></h2></span>
                                <span><div class="date-time"><i class="fa fa-calendar"></i> <?php echo date('d/m/Y', strtotime($item->post_updated_at)); ?> </div></span>
                            </div>
                        </div>
                    </article>
                <?php } ?>
            </div>
        </div>
        <div class="col-md-5 col-xs-5 blog-sidebar">
            <div class="list_blog_widget ">
                <ul class="video_list_widget">
                    <?php foreach ($list_item as $item) { ?>
                        <li>
                            <div class="post-img box-video">
                                <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                    <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 120, 90); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                                </a>
                                <div class="lgVid">
									<span><a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>"><i class="fa fa-play" aria-hidden="true"></i></a>
									</span>
                                </div>
                            </div>
                            <div class="widget-post-content">
                                <h3 class="post-title">
                                    <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>"><?php echo $item->post_name; ?>
                                    </a>
                                </h3>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>