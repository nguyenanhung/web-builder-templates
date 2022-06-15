
<h4 class="box_header_content red">
    <a class="color_font_white" href="<?php echo $seo->siteUrl(config_item('module_latest_news')); ?>" title="Tin mới nhất">Tin mới nhất</a>
</h4>
<div class="row">
    <ul class="blog column column_1_2">
        <?php echo modules::run('site-blocks/boxed_latest/post', 2, 0); ?>
    </ul>
    <ul class="blog column column_1_2">
        <?php echo modules::run('site-blocks/boxed_latest/post', 2, 2); ?>
    </ul>
</div>

