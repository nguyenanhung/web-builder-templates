<?php if (function_exists('base_url')) {
    $show_site_name   = isset($site_name) ? escapeHtml($site_name) : 'Home - ';
    $show_site_slogan = isset($site_slogan) ? escapeHtml($site_slogan) : '';
    $show_site_title  = trim($show_site_name . $show_site_slogan, ' - ');
    ?>
    <div class="mobile_menu_container">
        <a href="#" class="mobile-menu-switch">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </a><!--/end .mobile-menu-switch -->
        <div class="mobile-menu-divider"></div><!--/end .mobile-menu-divider -->
        <nav>
            <ul class="mobile-menu">
                <?php if (empty($this->uri->segment(1)) || $this->uri->segment(1) == '') {
                    echo '<li class="menu selected"><a href="' . base_url() . '" title="' . escapeHtml($show_site_title) . '">Home</a></li>';
                } else {
                    echo '<li class="menu"><a href="' . base_url() . '" title="' . escapeHtml($show_site_title) . '">Home</a></li>';
                } ?>
                <?= isset($top_menu) ? $top_menu : ''; ?>
                <?= isset($page_menu) ? $page_menu : ''; ?>
            </ul><!--/mobile-menu -->
        </nav>
    </div><!--/end .mobile_menu_container -->
<?php } ?>