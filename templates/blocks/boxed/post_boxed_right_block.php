
<section class="multi_home question_answer">
	<div class="box blog tintuc">
		<div class="widget_header">
			<i class="<?=$boxed_header['icon'] ?>" aria-hidden="true"></i>
			<h2 class="title_header">
				<a href="<?=$boxed_header['url'];?>" title="<?=$boxed_header['title'];?>"><?=$boxed_header['title'];?></a>
			</h2>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="widget_space">
		<div class=" main-blog blog-box">
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
								<?php echo word_limiter(escapeHtml($item->post_summary), 30); ?>
							</p>
						</div>
					</div>
				</article>
			<?php } ?>
		</div>
		<div class="list_blog_widget ">
			<ul class="post_list_widget">
			<?php foreach ($list_item as $item) { ?>
			
				<li>
					<a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>" class="blog-image">
						<img src="<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 540, 260); ?>" alt='<?php echo escapeHtml($item->post_slug); ?>'>
					</a>
					<div class="widget-post-content">
						<h3 class="post-title">
							<a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
								<?php echo $item->post_name; ?>

							</a>
						</h3>
                        <div class="link-info">
                            <span><h2 class="title-cat"><a href="<?php echo $seo->siteUrl($item->cat_slug); ?>"><?php echo $item->cat_name; ?></a></h2></span>
                            <span><div class="date-time"><?php echo date('d/m/Y', strtotime($item->post_updated_at));?> </div></span>
                        </div>
					</div>
				</li>
			<?php } ?>
		</ul>
		</div>

		
	</div>
</section>