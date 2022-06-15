<?php if (isset($seo)) { ?>
    <div class="col-lg-12 col-md-12 widget-info">
        <div class="footer-logo mb-4"><img alt="<?= $seo->siteUrl(); ?>" src="<?= $seo->baseUrl('assets/logo.png'); ?>" class="img-fluid"></div>
        <h2>Công ty chủ quản: <?= isset($site_company) ? trim($site_company) : ''; ?></h2>
        <p class="mb-0 info-company text-dark"><i class="fa fa-map-marker"></i> Địa chỉ: <?= isset($contact_company_address) ? trim($contact_company_address) : ''; ?></p>
        <p class="mb-0 info-company"><a href="#" class="text-dark"><i class="fa fa-id-card-o"></i> Đăng ký kinh doanh: <?= isset($dang_ky_kinh_doanh) ? trim($dang_ky_kinh_doanh) : ''; ?></a></p>
        <p class="mb-0 info-company"><a href="#" class="text-dark"><i class="fa fa-phone"></i> SDT: <?= isset($company_phone_number) ? trim($company_phone_number) : ''; ?></a></p>
        <p class="mb-0 info-company"><a href="#" class="text-dark"><i class="fa fa-envelope"></i> Email: <?= isset($company_email) ? trim($company_email) : ''; ?></a></p>
        <p class="mb-0 info-company"><a href="#" class="text-dark"><i class="fa fa-user"></i> Chịu trách nhiệm nội
                                                                                              dung: <?= isset($chiu_trach_nhiem_noi_dung) ? trim($chiu_trach_nhiem_noi_dung) : ''; ?></a></p>
    </div>
<?php } ?>