<div class="tab-pane fade in active register_vina" id="tab1danger">
    <div class="row">
        <?php if (($telcoWebSignUp['Vinaphone'] !== NULL) && (count($telcoWebSignUp['Vinaphone']['list_service']) > 0)): ?>
            <?php foreach ($telcoWebSignUp['Vinaphone']['list_service'] as $key_service => $service): ?>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i
                            ><span><h2><?= $service['name']; ?></h2>
                    </span>
                        </div><!--/ End .panel-heading -->
                        <div class="panel-body">
                            <div style="text-align: center;">
                                <ul class="list-link-register">
                                    <?php foreach ($service['list_package'] as $key_package => $package):
                                        $checkPackageGroup = $base->checkRegisterRoles($key_package, 'Vinaphone');
                                        $checkPackageUnsub = $base->checkRegisterRoles($key_package, 'Vinaphone', TRUE);
                                        ?>
                                        <?php if ($checkPackageGroup != TRUE) { ?>
                                        <li>
                                            <a href="<?php echo $websiteData['site_url'] . trim($telcoWebSignUp['Vinaphone']['link_sign_up'] . strtoupper($key_package)); ?>" class="btn btn-success" title="Đăng ký <?= $package['name']; ?> dịch vụ <?= $service['name']; ?>"><?= $package['name']; ?></a>
                                        </li>
                                    <?php } else {
                                        if ($checkPackageUnsub == TRUE) { ?>
                                            <li>
                                                <a href="<?php echo $websiteData['site_url'] . trim($telcoWebSignUp['Vinaphone']['link_un_register'] . strtoupper($key_package)); ?>" class="btn btn-success" title="Hủy dịch vụ <?= $package['name']; ?> dịch vụ <?= $service['name']; ?>">
                                                    Hủy dịch vụ
                                                </a>
                                            </li>
                                        <?php } else {
                                            echo NULL;
                                        } ?>
                                    <?php } ?>
                                    <?php endforeach; ?>
                                </ul><!--/ End .list-link-register -->
                            </div>
                            <p class="description-panel"><?= $service['description']; ?></p><!--/ End .description-panel -->
                            <ol>
                                <?php foreach ($service['list_package'] as $key_package => $package): ?>
                                    <li><?= isset($package['name']) ? $package['name'] : NULL; ?>: đăng ký gói cước soạn
                                        <strong><?= isset($package['mo']) ? $package['mo'] : NULL; ?></strong> gửi
                                        <strong><?= isset($package['short_code']) ? $package['short_code'] : (isset($telcoWebSignUp['Vinaphone']['shortcode']) ? $telcoWebSignUp['Vinaphone']['shortcode'] : NULL); ?></strong>,
                                                                                                 hủy gói cước soạn
                                        <strong><?= isset($package['mo_unsub']) ? $package['mo_unsub'] : NULL; ?></strong> gửi
                                        <strong><?= isset($package['short_code']) ? $package['short_code'] : (isset($telcoWebSignUp['Vinaphone']['shortcode']) ? $telcoWebSignUp['Vinaphone']['shortcode'] : NULL); ?></strong>.
                                                                                                 Giá cước:<strong><?php echo number_format($package['price']); ?>
                                            vnđ</strong>/<?= isset($package['time']) ? $package['time'] : NULL; ?></li>
                                <?php endforeach; ?>
                            </ol>
                        </div><!--/ End .panel-body -->
                    </div><!--/ End .panel panel-default -->
                </div><!--/ End .col-sm-6 col-md-6 col-lg-6 -->
            <?php
            endforeach;
        endif; ?>
    </div><!--/ End .row -->
</div><!--/ End .tab-pane fade in active register_vina -->