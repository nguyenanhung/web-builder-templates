<section class="multi_home food-culture">
    <div class="box blog tintuc">
        <div class="widget_header">
            <h2 class="title_header">
                <a href="<?= $content['boxed_header']['url']; ?>"><?= $content['boxed_header']['title']; ?></a>
            </h2>
            <ul class="relative_link">
                <?php
                if (isset($content['boxed_data'])) {
                    foreach ($content['boxed_data'] as $key => $item) {
                        if (isset($item['title'])) {
                            if ($item['_blank'] === FALSE) {
                                echo '<li><a href="#' . strtolower($key) . '" title="' . $item['title'] . '">' . $item['name'] . '</a></li>';
                            } else {
                                echo '<li><a target="_blank" href="' . trim($item['url']) . '" title="' . $item['title'] . '">' . $item['name'] . '</a></li>';
                            }
                        }
                    }
                }
                ?>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="widget_space">
        <?php
        if ($item['_blank'] === TRUE) {
            foreach ($list_item as $item): ?>
                <article>
                    <div class="post-img">
                        <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                            <img src="<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 787, 524); ?>" alt='<?php echo escapeHtml($item->post_slug); ?>'>
                        </a>
                    </div>
                    <div class="post-info">
                        <header class="entry-title">
                            <h2 class="heading-title">
                                <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>"><?php echo escapeHtml($item->post_name); ?></a>
                            </h2>
                        </header>
                    </div>
                </article>
            <?php endforeach;
        }
        ?>
    </div>
</section>