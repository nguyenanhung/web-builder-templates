
<?php foreach ($hot_item as $item) { ?>
	<article role="tabpanel" class="tab-pane fade" id="<?php echo $table_id; ?>">
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
                <div class="link-info">
                    <span><h2 class="title-cat"><a href="<?php echo $seo->siteUrl($item->cat_slug) ?>"><?php echo $item->cat_name ?></a></h2></span>
                    <span><div class="date-time"><i class="fa fa-calendar"></i> <?php echo date('d/m/Y', strtotime($item->post_updated_at)); ?> </div></span>
                </div>
			</header>
			<div class="entry-content description_box">
				<p title="<?php echo escapeHtml($item->post_summary); ?>">
					<?php echo word_limiter(escapeHtml($item->post_summary), 60); ?>
				</p>
			</div>
		</div>
	</article>
<?php } ?>
