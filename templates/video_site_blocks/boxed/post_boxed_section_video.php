<?php if (isset($seo)) { ?>
    <div class="video-block section-padding">
        <div class="row">
            <!-- header -->
            <div class="col-md-12">
                <div class="main-title ">
                    <h4 class="heading-title">
                        <i class="<?= isset($boxed_header) && isset($boxed_header['icon']) ? $boxed_header['icon'] : NULL; ?>"></i>
                        <a href="<?= isset($boxed_header) && isset($boxed_header['url']) ? $boxed_header['url'] : NULL; ?>" title="<?= isset($boxed_header) && isset($boxed_header['title']) ? $boxed_header['title'] : NULL; ?>"><?= isset($boxed_header) && isset($boxed_header['title']) ? $boxed_header['title'] : NULL; ?></a>
                    </h4>
                    <div class="filter-area">
                        <a href="<?= isset($boxed_header) && isset($boxed_header['url']) ? $boxed_header['url'] : NULL; ?>" title="<?= isset($boxed_header) && isset($boxed_header['title']) ? $boxed_header['title'] : NULL; ?>" class="view-all">
                            Xem thêm
                        </a>
                    </div>
                </div>
            </div>
            <!-- List items -->
            <div class="section-list-video">
                <?php if (isset($list_item)) {
                    foreach ($list_item as $item): ?>
                        <!-- item -->
                        <div class="item-video mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a href="<?= $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?= escapeHtml($item->post_name); ?>">
                                        <img class="img-fluid" src="<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 270, 169); ?>" alt='<?= escapeHtml($item->post_slug); ?>'>
                                        <?php if (isset($item->is_free) && ($item->is_free == 1)): ?>
                                            <div class="content-free">Free</div>
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="video-card-body">
                                    <h3 class="video-title">
                                        <a href="<?= $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?= escapeHtml($item->post_name); ?>"><?= trim($item->post_name); ?></a>
                                    </h3>
                                    <div class="video-page text-success">
                                        <?= trim($item->cat_name); ?>
                                        <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fa fa-check text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        <span class="count-view"><?= isset($item->view_total) ? number_format($item->view_total) : random_string('numeric', 2); ?> views</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;
                } ?>
            </div>
        </div>
    </div>
<?php } ?>