<?php if (isset($seo)) { ?>
    <div id="player-wrapper" class="tvshow-notsub">
        <div class="data-player">
            <div class="btn-notsub">
                <p>Vui lòng đăng nhập để xem nội dung</p>
                <a href="<?= $seo->siteUrl('users/sign-up'); ?>" class="btn btn-trial btn-dky">Đăng ký trải nghiệm miễn phí</a>
                <a href="<?= $seo->siteUrl('users/login'); ?>" class="btn btn-login">Đăng nhập</a>
            </div>
        </div>
    </div>
<?php } ?>