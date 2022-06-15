<div class="col-lg-4 col-md-4 col-xs-6">
    <div class="widget widget_information">
        <h2 class="widget-title"><span>Liên hệ</span></h2>
        <ul>
            <li class="address clearfix">
                <span class="hl">Địa chỉ:</span>
                <span class="text"><?php echo escapeHtml($contact_company_address_1); ?> - <?php echo escapeHtml($contact_company_address_2); ?></span>
            </li>
            <li class="phone clearfix">
                <span class="hl">Điện thoại:</span>
                <span class="text"><a href="tel:<?php echo escapeHtml($contact_profile->phone); ?>" style="color: #0AA540"><?php echo escapeHtml($contact_profile->phone); ?></a></span>
            </li>
            <li class="email clearfix">
                <span class="hl">E-mail:</span>
                <span class="text"><?php echo mailto(escapeHtml($contact_profile->email), escapeHtml($contact_profile->email)); ?></span>
            </li>
        </ul>
    </div>
</div>
<style>
	li.email.clearfix a {
    color: white;
}
</style>