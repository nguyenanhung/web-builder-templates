<?php
$username = isset($userPhoneNumber) && !empty($userPhoneNumber) && strtoupper($userPhoneNumber) != 'GUEST' ? $userPhoneNumber : 'Khách';
if (isset($packageId) && !empty($packageId) != NULL) {
    $userPackageId = isset($listPackageId) && is_array($listPackageId) ? implode(', ', $listPackageId) : (isset($packageId) ? $packageId : NULL);
}
?>
<li class="nav-item dropdown no-arrow lovetv-right-navbar-user">
    <button href="#" class="right-action-link nav-link dropdown-toggle user-dropdown-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
        <i class="fa fa-user"></i>
        <?= $username; ?>
    </button>

    <div id="nav-user" class="dropdown-menu dropdown-menu-right">
        <?php if (isset($userPhoneNumber) && !empty($userPhoneNumber) && strtoupper($userPhoneNumber) != 'GUEST') { ?>
            <?php if (isset($userPackageId)): ?>
                <a class="dropdown-item" href=""><i class="fa fa-sign-out"></i>Sử dụng: <?= $userPackageId ?></a>
                <a class="dropdown-item" href="<?= isset($link_sign_up) ? trim($link_sign_up) : NULL; ?>"><i class="fa fa-list"></i>Các gói cước khác</a>
                <a class="dropdown-item" href="<?= isset($link_sign_out) ? trim($link_sign_out) : NULL; ?>"><i class="fa fa-sign-out"></i>Đăng
                                                                                                                                          xuất</a>
            <?php endif; ?>
        <?php } else { ?>
            <a class="dropdown-item" href="<?= isset($link_sign_in) ? trim($link_sign_in) : NULL; ?>"><i class="fa fa-sign-out"></i>Đăng nhập</a>
            <a class="dropdown-item" href="<?= isset($link_sign_up) ? trim($link_sign_up) : NULL; ?>"><i class="fa fa-list"></i>Đăng ký</a>
        <?php } ?>
    </div>
</li>