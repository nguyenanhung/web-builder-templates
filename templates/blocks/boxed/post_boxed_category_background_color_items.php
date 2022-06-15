<?php foreach ($list_item as $item) { ?>
	<article>

		<div class="post-img">
			<a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>">
				<img src='<?= $seo->resizeImage($seo->imageUrl($item->post_photo), 787, 524); ?>' alt='<?php echo escapeHtml($item->post_slug); ?>'>
			</a>
		</div>
		<div class="post-info">
			<header class="entry-title">
				<h2 class="heading-title">
					<a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>" title="<?php echo escapeHtml($item->post_name); ?>"><?php echo $item->post_name; ?></a>
				</h2>
			</header>
		</div>
	</article>
<?php } ?>
