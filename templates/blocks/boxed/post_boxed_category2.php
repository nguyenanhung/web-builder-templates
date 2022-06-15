<section class="multi_home main-box">
    <div class="box blog">
        <div class="widget_header">
            <i class="<?= isset($content['boxed_header']['icon']) ? $content['boxed_header']['icon'] : 'fa fa-globe'; ?>" aria-hidden="true"></i>
            <h2 class="title_header">
                <a href="<?= $content['boxed_header']['url']; ?>"><?= $content['boxed_header']['title']; ?></a>
            </h2>
            <ul class="relative_link tabs_chua_ngay">
<!--                --><?php
//                //                    var_dump($content['boxed_data']);
//                for ($i = 0; $i < count($content['boxed_data']); $i++) {
//                    if ($i == 0) { ?>
<!--                        <li class="--><?php //echo $content['boxed_data'][$i]['slug'] ?><!--" id="active">-->
<!--                            <a href="javascript:void(0)" title="Miền bắc">Miền bắc</a>-->
<!--                        </li>-->
<!--                    --><?php
//                    } else {
//                        ?>
<!--                        <li class="mientrung">-->
<!--                            <a href="javascript:void(0)" title="Miền trung">Miền Trung</a>-->
<!--                        </li>-->
<!--                    --><?php
//                    }
//                }
//
//                ?>
                <?php
                $i=0;
                foreach ($content['boxed_data'] as $key => $item)
                {
                    if ($item['_blank'] === false)
                    {
                        if ($i==0){
                            echo '<li class="' . $item['slug'] . '" id="active" ><a href="#' . strtolower($key) . '" title="' . $item['title'] . '">' . $item['name'] . '</a></li>';
                        }
                        else{
                            echo '<li class="' . $item['slug'] . '" ><a href="#' . strtolower($key) . '" title="' . $item['title'] . '">' . $item['name'] . '</a></li>';
                        }

                    }
                    else
                    {
                        if ($i==0){
                            echo '<li class="' . $item['slug'] . '" id="active" ><a href="#' . strtolower($key) . '" title="' . $item['title'] . '">' . $item['name'] . '</a></li>';
                        }
                        else{
                            echo '<li  ><a href="#' . strtolower($key) . '" title="' . $item['title'] . '">' . $item['name'] . '</a></li>';
                        }
                    }
                    $i++;
                }
                ?>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <?php
    foreach ($content['boxed_data'] as $key => $item)
    {?>
        <div class="widget_space">
            <div class="row-inner">

                <div class="tab_chua">
                    <div id="<?php echo $item['slug']?>" class="chuaviet">
                        <?php
                        if ($item['_blank'] === false)
                        {
                            echo modules::run('site-blocks/site_boxed/post_boxed_sub_category', $siteDB->getCategoryValue($item['slug'], 'slugs', 'id'), 4, strtolower($key), $item['recursive']);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    <?php }
    ?>
<!--    <div class="widget_space">-->
<!--        <div class="row-inner">-->
<!---->
<!--            <div class="tab_chua">-->
<!--                <div id="tu-van" class="chuaviet">-->
<!--                    <div class="col-md-7 main-blog">-->
<!--                        <article>-->
<!--                            <div class="post-img">-->
<!--                                <a href="#">-->
<!--                                    <img src="assets/images/vh/lh3.jpg">-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <div class="post-info">-->
<!--                                <header class="entry-title">-->
<!--                                    <h2 class="heading-title">-->
<!--                                        <a href="#">Lorem Ipsum has been the industry's standard dummy text</a>-->
<!--                                    </h2>-->
<!--                                    <div class="date-time">-->
<!--                                        <i class="fa fa-calendar"></i> 12/06/2018-->
<!--                                    </div>-->
<!--                                </header>-->
<!--                                <div class="entry-content description_box">-->
<!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga impedit voluptates-->
<!--                                        dolor dolorum molestiae, voluptas suscipit cumque. Voluptas architecto, quidem,-->
<!--                                        harum quis ea eos aperiam veniam, at saepe eius iste.</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </article>-->
<!--                    </div>-->
<!--                    <div class="col-md-5 blog-sidebar">-->
<!--                        <div class="list_blog_widget ">-->
<!--                            <ul class="post_list_widget">-->
<!--                                <li>-->
<!--                                    <a href="#" class="blog-image">-->
<!--                                        <img src="assets/images/phapluat.jpg">-->
<!--                                    </a>-->
<!--                                    <div class="widget-post-content">-->
<!--                                        <h3 class="post-title">-->
<!--                                            <a href="#">It has roots in a piece of classical Latin</a>-->
<!--                                        </h3>-->
<!--                                        <div class="date-time">-->
<!--                                            <i class="fa fa-calendar"></i> 12/06/2018-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#" class="blog-image">-->
<!--                                        <img src="assets/images/festival1.jpg">-->
<!--                                    </a>-->
<!--                                    <div class="widget-post-content">-->
<!--                                        <h3 class="post-title">-->
<!--                                            <a href="#">It has roots in a piece of classical Latin literature from 45-->
<!--                                                BC</a>-->
<!--                                        </h3>-->
<!--                                        <div class="date-time">-->
<!--                                            <i class="fa fa-calendar"></i> 12/06/2018-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#" class="blog-image">-->
<!--                                        <img src="assets/images/slide3.jpg">-->
<!--                                    </a>-->
<!--                                    <div class="widget-post-content">-->
<!--                                        <h3 class="post-title">-->
<!--                                            <a href="#">There are many variations of passages</a>-->
<!--                                        </h3>-->
<!--                                        <div class="date-time">-->
<!--                                            <i class="fa fa-calendar"></i> 12/06/2018-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#" class="blog-image">-->
<!--                                        <img src="assets/images/festival3.jpg">-->
<!--                                    </a>-->
<!--                                    <div class="widget-post-content">-->
<!--                                        <h3 class="post-title">-->
<!--                                            <a href="#">There are many variations of passages of Lorem Ipsum-->
<!--                                                available</a>-->
<!--                                        </h3>-->
<!--                                        <div class="date-time">-->
<!--                                            <i class="fa fa-calendar"></i> 12/07/2018-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <a href="#" class="blog-image">-->
<!--                                        <img src="assets/images/phapluat.jpg">-->
<!--                                    </a>-->
<!--                                    <div class="widget-post-content">-->
<!--                                        <h3 class="post-title">-->
<!--                                            <a href="#">It has roots in a piece of classical Latin literature from 45-->
<!--                                                BC</a>-->
<!--                                        </h3>-->
<!--                                        <div class="date-time">-->
<!--                                            <i class="fa fa-calendar"></i> 23/06/2018-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <div class="clearfix"></div>
</section>