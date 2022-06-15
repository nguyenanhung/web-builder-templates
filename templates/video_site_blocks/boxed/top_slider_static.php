<?php if (isset($listSlide) && isset($seo)) : ?>
    <div class="video-block section-padding">
        <div class="row">
            <!-- section of boxes -->
            <div class="col-md-12">
                <div class="item">
                    <div class="bxslider">
                        <?php foreach ($listSlide as $item): ?>
                            <div><a href="<?= trim($item['url']); ?>" title="<?= trim($item['title']); ?>"><img alt="<?= $seo->strToEn($item['title']); ?>" src="<?= trim($item['image']); ?>" /></a></div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.bxslider').bxSlider({
                auto: true,
            });
        });
    </script>
<?php endif; ?>