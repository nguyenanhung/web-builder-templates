<footer id="footer">
	<div id="footer-widgets" class="container style-1">
		<div class="row">
            <?php echo modules::run('site-blocks/footer/thong_tin_toa_soan'); ?>
			<?php echo modules::run('site-blocks/footer/categories'); ?>
			<?php echo modules::run('site-blocks/footer/contact'); ?>
		</div>
	</div>
	<?php echo modules::run('site-block/footer/copyright_row') ?>
</footer>

