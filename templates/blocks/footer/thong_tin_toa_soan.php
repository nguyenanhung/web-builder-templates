<div class="col-lg-4 col-md-4 col-xs-12 logo-footer">
    <div class="widget widget_links">
        <h2 class="widget-title" style="text-transform: uppercase"><span>Về chúng tôi</span></h2>
        <div class="widget about-info">
            <p><?= isset($site_name) ? escapeHtml($site_name) : NULL; ?> - <?= isset($site_slogan) ? escapeHtml($site_slogan) : NULL; ?></p>
            <?php
            if (isset($license_data) && is_object($license_data) && !empty($license_data)) {
                echo "<p>Giấy phép số: " . escapeHtml($license_data->ma_so) . "</p>";
                echo "<p>Cấp ngày: " . escapeHtml($license_data->cap_ngay) . "</p>";
            }
            ?>
            <?php
            if (isset($dang_ky_kinh_doanh) && !empty($dang_ky_kinh_doanh)) {
                echo "<p>ÐKKD số: " . escapeHtml($dang_ky_kinh_doanh) . "</p>";
            }
            ?>
            <?php
            if (isset($chiu_trach_nhiem_noi_dung) && !empty($chiu_trach_nhiem_noi_dung)) {
                echo "<p>Chịu trách nhiệm nội dung: " . escapeHtml($chiu_trach_nhiem_noi_dung) . "</p>";
            }
            ?>
        </div>
    </div>
</div>