<?php if (isset($seo)) { ?>
    <div id="player-wrapper" class="tvshow-notsub">
        <div class="data-player">
            <div class="btn-notsub">
                <p>Gói cước bạn đang sử dụng không được phép xem nội dung này!</p>
                <a href="<?= $seo->siteUrl('users/sign-up'); ?>" class="btn btn-trial btn-dky">Vui lòng nâng cấp lên gói cước cao hơn để sử dụng tính năng</a>
            </div>
        </div>
    </div>
<?php } ?>