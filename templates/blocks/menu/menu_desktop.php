<style>
    .wsmenu-list ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    .wsmenu-list li > li a {
        float: right;
        background: #f0f0f0 !important;
        color: #d1000a;
        border-radius: 5px 5px 0 0;
        padding: 0;
        display: inline-block;
        font-size: 15px;
        position: relative;
        margin: 0 1px;
    }

    .wsmenu-list li a {
        display: inline-block;
        color: #d1000a;
        text-align: center;
        text-decoration: none;

    }

    .wsmenu-list ul.dropdown {
        display: none;
        position: absolute;
        background-color: #000000;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.3);
        padding: 5px 5px;
        z-index: 11;
    }

    .wsmenu-list li:hover ul.dropdown {
        display: block;
    }
</style>
<?php if (function_exists('base_url')) {
    $show_site_name   = isset($site_name) ? escapeHtml($site_name) : 'Trang chủ - ';
    $show_site_slogan = isset($site_slogan) ? escapeHtml($site_slogan) : '';
    $show_site_title  = trim($show_site_name . $show_site_slogan, ' - ');
    ?>
    <div class="wsmain">
        <nav class="wsmenu clearfix">
            <ul class="mobile-sub wsmenu-list">
                <li class="rightmenu">
                    <div class="search-forms">
                        <div class="input-group">
                            <button class="fa fa-search search-button input-group-addon" type="submit"></button>
                            <form class="navbar-form hidden-xs search-form" role="search" action="<?php echo base_url('search'); ?>">
                                <div class="search-info">
                                    <input type="text" class="form-control s" placeholder="Nhập nội dung tìm kiếm" name="q">
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
                <?php if (empty($this->uri->segment(1)) || $this->uri->segment(1) == '') {
                    echo '<li class="active menu-item"><a href="' . base_url() . '" title="' . escapeHtml($show_site_title) . '">Trang chủ</a></li>';
                } else {
                    echo '<li class="menu-item"><a href="' . base_url() . '" title="' . escapeHtml($show_site_title) . '">Trang chủ</a></li>';
                } ?>
                <?= isset($top_menu) ? $top_menu : ''; ?>
                <?= isset($page_menu) ? $page_menu : ''; ?>
            </ul>
        </nav>
    </div>
<?php } ?>
