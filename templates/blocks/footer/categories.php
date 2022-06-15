<div class="col-lg-4 col-md-6">
	<div class="widget widget_links">
		<h2 class="widget-title"><span>DANH MỤC</span></h2>
		<ul class="wprt-links clearfix col2">
			<?php foreach($list_menu as $menu) {?>
			<li>
				<a href="<?php echo $seo->siteUrl($menu->slugs); ?>" title="<?php echo escapeHtml($menu->name); ?>">
					<?php echo $menu->name; ?>
				</a>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>