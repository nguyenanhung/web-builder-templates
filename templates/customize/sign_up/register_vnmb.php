<div class="tab-pane fade register_vnmb" id="tab3danger">
    <div class="row">
        <?php if (($telcoWebSignUp['Vietnamobile'] !== NULL) && (count($telcoWebSignUp['Vietnamobile']['list_service']) > 0)): ?>
            <?php foreach ($telcoWebSignUp['Vietnamobile']['list_service'] as $key_service => $service): ?>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i><span>
                        <h2><?= $service['name']; ?></h2>
                    </span>
                        </div><!--/ End .panel-heading -->
                        <div class="panel-body">
                            <div style="text-align: center;">
                                <ul class="list-link-register">
                                    <?php foreach ($service['list_package'] as $key_package => $package): ?>
                                        <li>
                                            <a href="<?php echo $websiteData['site_url'] . trim($telcoWebSignUp['Vietnamobile']['link_sign_up'] . strtoupper($key_package)); ?>" class="btn btn-success" title="Đăng ký <?= $package['name']; ?> dịch vụ <?= $service['name']; ?>"><?= $package['name']; ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul><!--/ End .list-link-register -->
                            </div>
                            <p class="description-panel"><?= $service['description']; ?></p><!--/ End .description-panel -->
                            <ol>
                                <?php foreach ($service['list_package'] as $key_package => $package): ?>
                                    <li><?= $package['name']; ?>: soạn <strong><?= $package['mo']; ?></strong> gửi
                                        <strong><?= isset($package['short_code']) ? $package['short_code'] : (isset($telcoWebSignUp['Vietnamobile']['shortcode']) ? $telcoWebSignUp['Vietnamobile']['shortcode'] : NULL); ?></strong>.
                                                                Giá cước:
                                        <strong><?php echo number_format($package['price']); ?>
                                            vnđ</strong>/<?= $package['time']; ?></li>
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
