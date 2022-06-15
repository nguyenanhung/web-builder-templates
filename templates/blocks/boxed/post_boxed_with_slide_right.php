
<section class="multi_home culture-news">
	<div class="box blog tintuc">
		<div class="widget_header">
			<i class="<?= isset($boxed_header['icon']) ? $boxed_header['icon'] : 'fa fa-university'; ?>" aria-hidden="true"></i>
			<h2 class="title_header">
				<a href="<?=$boxed_header['url'];?>" title="<?=$boxed_header['title'];?>"><?=$boxed_header['title'];?></a>
			</h2>
			<ul class="relative_link">
				<?php
	    		foreach ($boxed_data as $key => $item)
	    		{
	    			if (isset($item['title']))
	    			{
	    				if ($item['_blank'] === false)
	    				{
	    					echo '<li><a href="#' . strtolower($key) . '" title="' . $item['title'] . '">' . $item['name'] . '</a></li>';
	    				}
	    				else
	    				{
	    					echo '<li><a target="_blank" href="' . trim($item['url']) . '" title="' . $item['title'] . '">' . $item['name'] . '</a></li>';
	    				}
	    			}	
	    		}
	    		?>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="widget_space">
		<div class="row-inner">
			<div class="col-md-8 main-blog">
				
				<div class="blog-box">
					<?php foreach ($hot_item as $item) { ?>
					<article>
						<div class="post-img">
							<a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
								<img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 510, 510); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
							</a>
						</div>
						<div class="post-info">
							<header class="entry-title">
								<h2 class="heading-title">
									<a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
							<?php echo $item->post_name; ?>
								</h2>
							</header>
							<div class="entry-content description_box">
								<p title="<?php echo escapeHtml($item->post_summary); ?>">
									<?php echo word_limiter(escapeHtml($item->post_summary), 30); ?>
								</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</article>
				<?php } ?>
				</div>
				<ul class="list-blog black_link">
					<?php foreach ($list_item as $item) { ?>
					<li>
						<div class="date-time">


						</div>
						<h3 class="heading-title">
							<a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
                            <?php echo $item->post_name ?>
                        </a>
						</h3>
					</li>
					<?php } ?>
				</ul>

			</div>
			<div class="col-md-4 blog-sidebar">
				<div class="list_carousel_blog">
					<ul id="foo3" class="foo3">
						<?php foreach ($list_item as $item) { ?>
						<li>
							<article>
								<div class="post-img">
									<a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
										<img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 330, 242); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
									</a>
								</div>
								<div class="post-info">
									<header class="entry-title">
										<h2 class="heading-title">
											<a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
												<?php echo word_limiter($item->post_name, 10); ?>
											</a>
										</h2>
									</header>
								</div>
							</article>
						</li>
						<?php } ?>

					</ul>

				</div>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>