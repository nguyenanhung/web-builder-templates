<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: 713uk13m
 * Date: 5/6/18
 * Time: 06:22
 */
?>
<h4 class="box_header_content <?=$boxed_header['color'];?>">
    <a class="color_font_white" href="<?=$boxed_header['url'];?>" title="<?=$boxed_header['title'];?>"><?=$boxed_header['name'];?></a>
</h4>
<div class="list-blog-slider owl-carousel owl-loaded owl-drag">
    <div class="owl-stage-outer">
        <div  class="owl-stage">
            <?php foreach ($list_item as $item) { ?>
                <div class="owl-item">
                    <div class="item">
                        <article>
                            <div class="post-img">
                                <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                                    <img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 540, 260); ?>' alt='<?php echo $item->post_slug; ?>'>
                                </a>
                            </div>
                            <div class="post-info">
                                <header class="entry-title">
                                    <h2 class="heading-title">
                                        <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo word_limiter(escapeHtml($item->post_summary), 30); ?>"><?php echo word_limiter(escapeHtml($item->post_summary), 30); ?></a>
                                    </h2>
                                    
                                </header>
                            </div>
                        </article>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
</div>
<style>
    .box_header_content {
        padding: 12px 15px 8px;
    }

</style>
<style>
    article header.entry-title {
        display: inline-block;
    }
    article .entry-title h2.heading-title {
        font-size: 24px;
        font-weight: 600;
        text-transform: uppercase;
        line-height: 30px;
        margin-bottom: 20px;
    }
    .page_margin_top {
      margin-top: 30px;
    }
    .red {
      background: #ED1C24;
    }

    .box_header_content {
      padding: 10px 15px 8px;
      text-transform: uppercase;
      font-weight: bold;
    }
    h4 {
      font-size: 18px;
      line-height: 140%;
    }
    .box_header_content a:hover{
      color: #fff;
    }
    .color_font_white {
        color: #fff;
    }
    .list-blog-slider{
      padding-bottom: 30px;
    }
    .post-info .content-summary{
      margin-top: 20px;
      font-weight: 700;
    }
</style>