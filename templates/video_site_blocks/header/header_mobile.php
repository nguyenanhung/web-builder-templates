<?php if (isset($seo)) { ?>
    <div class="header-mobile">
        <ul class="list-items-menu-mobile">
            <li><a title="Trang chủ" href="<?= $seo->siteUrl(); ?>" class="active"><i class="fa fa-home"></i></a></li>
            <li><a title="Video" href="<?= $seo->siteUrl('videos') ?>"><i class="fa fa-video-camera"></i></a></li>
            <li><a title="Gói cước" href="<?= $seo->siteUrl('users/sign-up') ?>"><i class="fa fa-user-circle-o"></i></a></li>
        </ul>
    </div>
<?php } ?>