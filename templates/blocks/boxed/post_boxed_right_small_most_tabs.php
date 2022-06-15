
<div class="tabs no_scroll <?php if ($margin_top_section == 'yes') { echo "page_margin_top_section"; } ?> clearfix">
	<ul class="tabs_navigation clearfix">
		<?php foreach ($tabs_content as $item) { ?>
			<li><a href="#<?=trim($item['table_id']);?>" title="<?=trim($item['title']);?>"><?=trim($item['name']);?></a><span></span></li>
		<?php } ?>
	</ul>
	<?php foreach ($tabs_content as $item) {
		echo modules::run('site-blocks/site_boxed/post_boxed_right_small_most_tabs_item', $item['table_id'], $item['table_data']);
	} ?>
</div>

