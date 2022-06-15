<!-- notification login -->
<div class="notification-block">
    <div class="notice-wrapper">
        <p class="notice-login">Bạn chưa đăng ký gói dịch vụ của <?= isset($site_name) ? $site_name : NULL; ?>.</p>
        <p class="link-login">Hãy
            <span><a href="<?= isset($config_sign_in_link) ? $config_sign_in_link : NULL; ?>" title="đăng nhập">đăng nhập</a> </span>
            <span> hoặc </span>
            <span><a href="<?= isset($config_sign_up_link) ? $config_sign_up_link : NULL; ?>" title="đăng ký">đăng ký</a> để có thể xem toàn bộ nội dung bài viết nhé !</span>
        </p>
    </div>
</div>
<!-- end notification login -->
<style>
    /*style for notification login*/
    .notification-block {
        -moz-box-shadow: 1px 2px 4px rgba(0, 0, 0, 0.5);
        -webkit-box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
        box-shadow: 1px 2px 4px rgba(0, 0, 0, .5);
        padding: 10px;
        background: #FAFAFA;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .notice-wrapper {
        border: 2px solid #E8DFDF;
        padding: 12px;
        text-align: center;
    }

    .notification-block p.notice-login {
        font-size: 17px;
        color: red;
        font-weight: bold;
        margin: 0;
        margin-bottom: 10px;
    }

    .link-login span a {
        color: #3FAF47;
        text-decoration: none;
    }

    .notification-block p {
        margin-bottom: 0;
        line-height: 22px;
        margin-top: 5px;
    }

    .link-login span a:hover {
        color: #AD1818;
    }
</style>