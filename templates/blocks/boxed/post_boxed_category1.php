<section class="multi_home main-box">
    <div class="box blog tintuc">
        <div class="widget_header">
            <i class="<?= isset($content['boxed_header']['icon']) ? $content['boxed_header']['icon'] : 'fa fa-globe'; ?>" aria-hidden="true"></i>
            <h2 class="title_header">
                <a href="<?=$content['boxed_header']['url'];?>" title="<?=$content['boxed_header']['title'];?>"><?=$content['boxed_header']['title'];?></a>
            </h2>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php
//    var_dump($content); die;
    foreach ($content['boxed_data'] as $key => $item)
    {
        if ($item['_blank'] === false)
        {
            echo modules::run('site-blocks/site_boxed/post_boxed_sub_category1', $siteDB->getCategoryValue($item['slug'], 'slugs', 'id'), 4, strtolower($key), $item['recursive']);
        }
    }
    ?>
</section>
<?php echo modules::run('site-blocks/site_list/post_small_list', array('boxed_header' => $boxed_header, 'list_item' => $list_item, 'pagination' => $pagination)); ?>
