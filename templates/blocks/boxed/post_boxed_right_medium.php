
<section class="blog-widget hot-news section-home">
	<div class="title-widget">
		<h3>
			<a class="color_font_white" title="<?=$boxed_header['title'];?>"><?=$boxed_header['name'];?></a>
		</h3>
	</div>
	<div class="list_blog_widget ">
		<ul class="post_list_widget">
			<?php foreach ($list_item as $item) { ?>
			<li>
				<a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
					<div class='box_images_right_hot'>
                    	<img src="<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 540, 260); ?>" alt='<?php echo escapeHtml($item->post_slug); ?>'>
                	</div>
				</a>
				<div class="widget-post-content">
					<h3 class="post-title">
						<a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                        <?php echo $item->post_name; ?>
                    </a>
					</h3>
					<div class="date-time">
						<i class="fa fa-calendar"></i> <?php echo date('H:i A d/m/Y', strtotime($item->post_updated_at)); ?>  
					</div>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>
</section>