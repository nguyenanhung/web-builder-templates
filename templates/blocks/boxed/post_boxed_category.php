<section class="multi_home main-box">
    <div class="box blog tintuc">
        <div class="widget_header">
            <i class="<?= isset($content['boxed_header']['icon']) ? $content['boxed_header']['icon'] : 'fa fa-send'; ?>" aria-hidden="true"></i>
            <h2 class="title_header">
                <a href="<?= $content['boxed_header']['url']; ?>" title="<?= $content['boxed_header']['title']; ?>"><?= $content['boxed_header']['title']; ?></a>
            </h2>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="widget_space">
        <div class="row-inner">
            <div class="col-md-6 main-blog">
                <article>
                    <div class="post-img">
                        <a href="#"><img src="<?php echo $seo->assetsUrlThemes() ?>assets/images/vh/vltt.jpg"></a>
                    </div>
                    <div class="clearfix"></div>
                </article>
            </div>
            <div class="col-md-6 main-blog">
                <div class="wrapper-col fr_element fr_common">
                    <div class="post-info">
                        <header class="entry-title">
                            <h2 class="heading-title">
                                <a href="#">Lorem Ipsum has been the industry's standard dummy text</a>
                            </h2>
                            <div class="date-time">
                                <i class="fa fa-calendar"></i> 12/06/2018
                            </div>
                        </header>
                        <div class="entry-content description_box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                               industry's standard dummy text ever since the 1500s, </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php echo modules::run('site-blocks/site_boxed/post_boxed_slide_category', array(
        'boxed_data' => array(
            'size'          => 10,
            'page'          => 0,
            'category_slug' => 'Du-lich', // Đường dẫn category
            'recursive'     => TRUE, // Lấy cả tin trong danh mục con
            'is_hot'        => FALSE // chỉ lấy tin HOT = true
        )
    )); ?>
</section>
