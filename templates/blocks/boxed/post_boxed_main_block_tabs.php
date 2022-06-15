<section class="multi_home culture-news">
    <div class="box blog tintuc">
        <div class="widget_header">
            <i class="<?= $content['boxed_header']['icon']; ?>" aria-hidden="true"></i>

            <h2 class="title_header">
                <a href="<?= $content['boxed_header']['url']; ?>" title="<?= $content['boxed_header']['title']; ?>"><span class="text-span"><?= $content['boxed_header']['title']; ?></span></a>
            </h2>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="widget_space panel with-nav-tabs panel-danger">
        <div class="panel-heading">
            <ul class="nav nav-tabs">
                <?php
                if (isset($content['boxed_data'])) {
                    foreach ($content['boxed_data'] as $key => $item) {
                        if (isset($item['title'])) {
                            if ($item['_blank'] === FALSE) {
                                echo '<li><a data-toggle="tab" href="#' . strtolower($key) . '" title="' . $item['title'] . '">' . $item['name'] . '</a></li>';
                            } else {
                                echo '<li><a data-toggle="tab" target="_blank" href="' . trim($item['url']) . '" title="' . $item['title'] . '">' . $item['name'] . '</a></li>';
                            }
                        }
                    }
                }
                ?>
            </ul>
        </div>
        <div class="panel-body">
            <div class="tab-content">
                <?php
                if (isset($content['boxed_data'])) {
                    foreach ($content['boxed_data'] as $key => $item) {
                        if ($item['_blank'] == FALSE) {
                            echo modules::run('site-blocks/site_boxed/post_boxed_main_block_tabs_items', $siteDB->getCategoryValue($item['slug'], 'slugs', 'id'), 4, strtolower($key), $item['recursive'], FALSE);
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
