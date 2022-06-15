
<div class="widget_space">
	<div class="row-inner">
		<div class="col-md-6 main-blog">
			<?php foreach ($hot_item as $item) { ?>
				<article>
					<div class="post-img">
						<a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
							<img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 540, 260); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
						</a>
					</div>
					<div class="post-info">
						<header class="entry-title">
							<h2 class="heading-title">
								<a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
									<?php echo $item->post_name; ?>
								</a>
							</h2>
						</header>
						<div class="entry-content description_box">
							<p title="<?php echo escapeHtml($item->post_summary); ?>">
								<?php echo word_limiter(escapeHtml($item->post_summary), 50); ?>
							</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</article>
			<?php } ?>
		</div>
		<div class="col-md-6 blog-sidebar">
			<div class="wrapper-col fr_element fr_common">

				<ul class="list-blog black_link">
					<?php foreach ($list_item as $item) { ?>
						<li>
							<h3 class="heading-title">
								<a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
									<?php echo $item->post_name; ?>
								</a> 
							</h3>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>
</div>