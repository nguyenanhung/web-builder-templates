<?php if (isset($seo)) { ?>
    <div class="top-category section-padding mb-4">
        <div class="row">
            <div class="col-md-12">
                <!-- heading title -->
                <div class="main-title ">
                    <h4 class="heading-title"><?= isset($heading_title) ? trim($heading_title) : ''; ?></h4>
                </div>
            </div>
            <!-- slider channels -->
            <div class="col-md-12">
                <div class="owl-carousel owl-carousel-category">
                    <?php if (isset($getChannel)) :
                        foreach ($getChannel as $item):
                            if (!isset($item['photo']) || empty($item['photo'])) {
                                $photoUser = $seo->assetsUrl('images/system/no_avatar.jpg');
                            } else {
                                $photoUser = $seo->resizeImage($seo->imageUrl($item['photo']), 70, 70);
                            }
                            $channelLink = $seo->urlChannels($seo->encodeId($item['id']));
                            ?>
                            <div class="item">
                                <div class="category-item">
                                    <div class="category-image">
                                        <a href="<?= $channelLink; ?>">
                                            <img class="img-fluid" src="<?= $photoUser ?>" alt="<?= trim($item['username']); ?>">
                                        </a>
                                    </div>
                                    <div class="category-content">
                                        <h6 class="heading_category"><a href="<?= $channelLink; ?>"><?= trim($item['fullname']); ?></a></h6>
                                        <p><?= $item['viewTotal']; ?> views</p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>