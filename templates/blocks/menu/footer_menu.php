<?php if (isset($seo)) { ?>
    <div class="row page_margin_top_section">
        <div class="column column_3_4">
            <ul class="footer_menu">
                <?php if (isset($list_item)) {
                    foreach ($list_item as $item) { ?>
                        <li><h4><a href="<?php echo $seo->siteUrl($item->slugs); ?>" title="<?php echo escapeHtml($item->name); ?>"><?php echo trim($item->name); ?></a></h4></li>
                    <?php }
                } ?>
                <li><h4><a href="<?php echo $seo->siteUrl('videos'); ?>" title="Xem video hay">Video</a></h4></li>
            </ul><!--/ end .footer_menu -->
        </div><!--/ end .column_3_4 -->
        <div class="column column_1_4">
            <a class="scroll_top" href="#top" title="Lên đầu trang">Đầu trang</a>
        </div><!--/ end .column_1_4 -->
    </div><!--/ end footer menu -->
<?php } ?>