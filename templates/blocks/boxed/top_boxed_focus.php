<div class="row">
    <div class="column column_1_1">
        <div class="blog_grid">
            <div class="grid_view">
                <div class="row">
                    <?php echo modules::run('site-blocks/boxed_focus/post_medium', 2, 0); ?>
                </div>
                <div class="row">
                    <?php echo modules::run('site-blocks/boxed_focus/post_medium', 1, 3); ?>
                    <?php echo modules::run('site-blocks/boxed_focus/post_small', 2, 4); ?>
                </div>
            </div>
            <div class="slider_view">
                <ul class="small_slider id-small_slider">
                    <?php echo modules::run('site-blocks/boxed_focus/post_slide', 5, 0); ?>
                </ul>
                <div id="small_slider" class='slider_posts_list_container small'></div>
            </div>
        </div>
    </div>
</div>
