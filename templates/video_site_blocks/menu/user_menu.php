<?php if (isset($seo)) { ?>
    <li class="nav-item channel-sidebar-list account-list">
        <h6>Người dùng</h6>
        <ul>
            <li class="nav-item">
                <a href="<?= $seo->siteUrl('users/sign-up'); ?>" class="nav-link">
                    <i class="fa fa-folder"></i><span class="sidenav-link-title">Gói cước</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= $seo->siteUrl('help/guide') ?>" class="nav-link">
                    <i class="fa fa-archive"></i><span class="sidenav-link-title">Giới thiệu</span>
                </a>
            </li>
        </ul>
    </li>
<?php } ?>