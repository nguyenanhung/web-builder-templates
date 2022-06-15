<section class="blog-widget pictures">
    <div class="title-widget">
        <h3>Tin ảnh</h3>
    </div>
    <div class="slidebox-image owl-carousel owl-loaded owl-drag">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <?php foreach ($hot_item as $item) { ?>
                    <div class="owl-item">
                        <div class="item">
                            <article class="current" topic-id="<?=$seo->encodeId($item->post_id);?>">
                                <div class="post-img">
                                    <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                        <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 540, 260); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                                    </a>
                                </div>
                                <header class="entry-title">
                                    <h2 class="heading-title">
                                        <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>"><?php echo $item->post_name; ?></a>
                                    </h2>
                                </header>
                            </article>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <ul class="slidebox-image  imgae-list-blog">
        <?php foreach ($list_item as $item) { ?>
            <li>
                <article class="current" topic-id="<?=$seo->encodeId($item->post_id);?>">
                    <div class="post-img">
                        <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                            <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 460, 135); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
                        </a>
                    </div>
                    <header class="entry-title">
                        <h2 class="heading-title">
                            <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>"><?php echo $item->post_name; ?></a>
                        </h2>
                    </header>
                </article>
            </li>
        <?php } ?>
    </ul>
</section>