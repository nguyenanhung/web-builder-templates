<div class="latest_news_scrolling_list_container">
    <ul>
        <li class="category">Nổi bật</li>
        <li class="left"><a href="#"></a></li>
        <li class="right"><a href="#"></a></li>
        <li class="posts">
            <ul class="latest_news_scrolling_list">
                <?php foreach ($breaking_news as $item) { ?>
                    <li>
                        <a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id); ?>" title="<?php echo escapeHtml($item->post_title); ?>"><?php echo $item->post_name; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </li>
        <li class="date">
            <?php foreach ($breaking_news as $item_time) { ?>
                <abbr title="<?php echo date('c', strtotime($item_time->post_updated_at)); ?>" class="timeago<?php if (date('c') == date('c', strtotime($item_time->post_updated_at))) echo ' current'; ?>"><?php echo date('c', strtotime($item_time->post_updated_at)); ?></abbr>
            <?php } ?>
        </li>
    </ul>
</div><!--/ end .latest_news_scrolling_list_container -->
