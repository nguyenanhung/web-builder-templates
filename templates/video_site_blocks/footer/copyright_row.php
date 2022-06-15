<?php if (isset($seo)) { ?>
    <div class="col-xs-12 col-sm-12 col-md-12 bottom-widget">
        <p class="copy-right"> &copy; <?php if (date('Y') == 2018) {
                echo '2018';
            } else {
                echo '2018 - ' . date('Y');
            } ?> by
            <span><strong><a rel="nofollow" href="http://thudomultimedia.vn" title="ThuDoMultimedia" target="_blank" style="text-transform: uppercase"><?= isset($company_name) ? escapeHtml($company_name) : 'T H U D O M U L T I M E D I A'; ?></a></strong></span>
        </p>
    </div>
<?php } ?>