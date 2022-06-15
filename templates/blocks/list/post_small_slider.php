<div class="widget_space">
    <article>
        <div class="row-inner">
            <?php
            if (isset($hot_item)):
                foreach ($hot_item as $item): ?>
                    <div class="col-md-6 col-xs-6 main-blog">
                        <div class="post-img">
                            <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 540, 260); ?>' alt='<?php echo $item->post_slug; ?>'>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 main-blog">
                        <div class="wrapper-col fr_element fr_common">
                            <div class="post-info">
                                <header class="entry-title">
                                    <h2 class="heading-title">
                                        <a style="color: #ad1818;" href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                            <?php echo $item->post_name; ?>
                                        </a>
                                    </h2>
                                </header>
                                <div class="entry-content description_box" style="display: inline-block; width: 100%;">
                                    <p> <?php echo word_limiter(escapeHtml($item->post_summary), 50); ?></p>
                                </div>
                                <div class="link-info">
                                    <span><a href="<?php echo $seo->siteUrl($item->cat_slug) ?>"><h2 class="title-cat"><?php echo $item->cat_name; ?></h2></a></span>
                                    <span><div class="date-time"><i class="fa fa-calendar"></i><?php echo date('d/m/Y', strtotime($item->post_updated_at)); ?></div></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;
            endif; ?>
            <div class="clearfix"></div>
        </div>
    </article>
</div>
<div class="list-blogs-slider owl-carousel owl-loaded owl-drag">
    <div class="owl-stage-outer">
        <div class="owl-stage">
            <?php if (isset($list_item)): foreach ($list_item as $item): ?>
                <div class="owl-item">
                    <div class="item">
                        <article>
                            <div class="post-img">
                                <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                    <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 540, 260); ?>' alt='<?php echo $item->post_slug; ?>'>
                                </a>
                            </div>
                            <div class="post-info">
                                <header class="entry-title">
                                    <h2 class="heading-title">
                                        <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>"> <?php echo $item->post_name; ?>
                                        </a>
                                    </h2>
                                </header>
                            </div>
                        </article>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>
    </div>
</div>
<!--/ end .small_slider -->
<div id="small_slider" class="slider_posts_list_container small"></div>