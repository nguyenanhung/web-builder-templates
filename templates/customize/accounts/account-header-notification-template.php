<?php
if (isset($userPhoneNumber) && !empty($userPhoneNumber) && strtoupper($userPhoneNumber) != 'GUEST') { ?>
    <li>
        <?php if (isset($packageId) && !empty($packageId) != NULL) { ?>
            Xin chào thuê bao
            <strong><?= isset($vnHumanUserPhoneNumber) ? $vnHumanUserPhoneNumber : NULL; ?></strong>, quý khách đang sử dụng gói
            <strong><?php
                if (isset($listPackageId) && is_array($listPackageId)) {
                    $packageIdContent = implode(', ', $listPackageId);
                } else {
                    $packageIdContent = isset($packageId) ? $packageId : NULL;
                }
                if (!empty($packageIdContent) && is_string($packageIdContent)) {
                    echo $packageIdContent;
                }
                ?>
                - <a href="<?= isset($link_sign_up) ? trim($link_sign_up) : NULL; ?>">Các gói cước khác</a>
            </strong> dịch vụ <strong><?= isset($site_name) ? $site_name : NULL; ?></strong>
            <?php if (isset($userIsClassicLogin) && $userIsClassicLogin == TRUE) { ?>
                | <a href="<?= isset($link_sign_out) ? trim($link_sign_out) : NULL; ?>">Đăng xuất</a>
            <?php } ?>
        <?php } else { ?>
            Xin chào thuê bao
            <strong><?= isset($vnHumanUserPhoneNumber) ? $vnHumanUserPhoneNumber : NULL; ?></strong>, quý khách chưa đăng ký dịch vụ. Hãy chọn
            <a href="<?= isset($link_sign_up) ? trim($link_sign_up) : NULL; ?>">Đăng ký</a> gói cước.
        <?php } ?>
    </li>
<?php } else { ?>
    <li>
        <!--        Không nhận diện được thuê bao. Vui lòng truy cập bằng 3G hoặc-->
        <a href="<?= isset($link_sign_in) ? trim($link_sign_in) : NULL; ?>">Đăng nhập</a>
        / <a href="<?= isset($link_sign_up) ? trim($link_sign_up) : NULL; ?>">Đăng ký</a> để sử dụng dịch vụ.
    </li>
<?php } ?>