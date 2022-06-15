<section class="multi_cate multi-item-box">
    <div class="box blog tintuc">
        <div class="widget_header">
            <h2 class="title_header">
                Mới nhất
            </h2>

        </div>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row-inner">
                <ul class="list-blog-video">
                    <?php foreach ($list_item as $item) : ?>
                        <li class="col-md-6 col-xs-6">
                            <article>
                                <div class="post-img box-video">
                                    <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                        <img src="<?php echo $seo->resizeImage($seo->imageUrl($item->post_photo), 330, 242); ?>" alt="">

                                    </a>
                                </div>
                                <div class="post-info">
                                    <header class="entry-title">
                                        <h2 class="heading-title">
                                            <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>"><?php echo escapeHtml($item->post_name); ?></a>
                                        </h2>
                                    </header>
                                    <div class="entry-content description_box">
                                        <p><?php echo word_limiter(escapeHtml($item->post_summary), 30); ?></p>
                                    </div>
                                    <div class="link-info">
                                        <span><h2 class="title-cat"><a href="<?php echo $seo->siteUrl($item->cat_slug); ?>"><?php echo $item->cat_name; ?></a></h2></span>
                                        <span><div class="date-time"><i class="fa fa-calendar"></i> <?php echo date(' d/m/Y', strtotime($item->post_updated_at)); ?> </div></span>

                                    </div>
                                    <a class="read_more" href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="Read more"><span class="arrow"><i class="fa fa-play" aria-hidden="true"></i></span><span class="content-mes">XEM VIDEO</span></a>
                                </div>
                            </article>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
</section>

<ul class="pagination clearfix"><?php echo trim($seo->viewPagination($pagination)); ?></ul>

<style>
    ul.list-blog-video {
        padding-left: 0;
    }

    /* --- pagination --- */
    .pagination li a:hover,
    .pagination li.selected a {
        color: #FFF;
        background-color: #ad1818;
    }

    .pagination {
        float: right;
        padding-bottom: 45px;
    }

    .pagination li.left a {
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAA6CAYAAABMOlKBAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo5MjM1RjI1QjU1RURFMzExOTAyNEJGRTQ4RTkwNDMzOCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo4MUYyQTBBQ0YxNTExMUUzOTM5MThGQzhEQTFCMThFMiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo4MUM2Mzk4NkYxNTExMUUzOTM5MThGQzhEQTFCMThFMiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpGRkNDNTE3MTRGRjFFMzExOEZBRkQ3QjFCNDdFRDFBMCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5MjM1RjI1QjU1RURFMzExOTAyNEJGRTQ4RTkwNDMzOCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PjLRt3AAAACCSURBVHja7NfRCoAgDIVhF772rnzwdRcRBHVmK+LfpQifig6PRUSrrqW9UKCgoN9H+53J7n4c2trZGMMqdrrvn1ZxvDKooilQQdOggtrJAh4/3jSsXqQUnHkyMtxzvUW7TMYfCRQUFBQUFPRHAWrW55sARYAiQBGgaPigoKDXaxVgAD60G3dpg1J5AAAAAElFTkSuQmCC");
    }

    .pagination li.right a {
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAA6CAYAAABMOlKBAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2RpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo5MjM1RjI1QjU1RURFMzExOTAyNEJGRTQ4RTkwNDMzOCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo4MUYyQTBCMEYxNTExMUUzOTM5MThGQzhEQTFCMThFMiIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo4MUYyQTBBRkYxNTExMUUzOTM5MThGQzhEQTFCMThFMiIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpGRkNDNTE3MTRGRjFFMzExOEZBRkQ3QjFCNDdFRDFBMCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDo5MjM1RjI1QjU1RURFMzExOTAyNEJGRTQ4RTkwNDMzOCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PqsHfYQAAACASURBVHja7NfLDoAgDERRMP52V/3wuq0LE+kIGnO7hXDCIw3TI6Ktrq29UKCgoN9H95HJZpbbV89j7j5tpxmKlccrw9U7lWDlIZVhBb18VLPQMlhFJbCCyuBwc1Cg0yL8kUBBQUFBQUF/FKCe+pgRoAhQBCgCFA0fFBT0fh0CDABe1Bt3ctDz0gAAAABJRU5ErkJggg==");
    }

    .main-blog h2.heading-title a {
        color: black;
    }

    ul.post_list_widget {
        padding: 0;
        height: 100%;
    }

    .link-info h2.title-cat a {
        color: #ad1818;
    }

    .link-info span {
        display: inline-block;
        float: left;
    }

    .link-info h2.title-cat {
        margin: 0;
        font-size: 14px;
        font-weight: 600;
    }
</style>