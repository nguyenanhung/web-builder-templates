<?php if (isset($seo)) { ?>
    <div class="video-right-list ">
        <?php if (isset($list_item)) {
            foreach ($list_item as $item): ?>
                <div class="video-card video-card-list">
                    <div class="video-card-image">
                        <a href="<?= $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?= escapeHtml($item->post_name); ?>">
                            <img class="img-fluid" src="<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 270, 169); ?>" alt="<?= escapeHtml($item->post_slug); ?>">
                        </a>
                        <!--                <div class="time">3:50</div>-->
                    </div>
                    <div class="video-card-body">
                        <h3 class="video-title">
                            <a href="<?= $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?= escapeHtml($item->post_name); ?>"><?= trim($item->post_name); ?></a>
                        </h3>
                        <div class="video-page text-success">
                            <?= trim($item->cat_name); ?>
                            <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fa fa-check-circle text-success"></i></a>
                        </div>
                        <div class="video-view">
                            <?= isset($item->view_total) ? number_format($item->view_total) : random_string('numeric', 2); ?> views
                        </div>
                    </div>
                </div>
            <?php endforeach;
        } ?>
    </div>
<?php } ?>