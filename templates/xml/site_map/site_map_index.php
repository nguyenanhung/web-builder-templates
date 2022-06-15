<?php if (isset($seo) && isset($site_lastmod)) { ?>
    <sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <?php if (isset($sitemap_index)) {
            foreach ($sitemap_index as $index) { ?>
                <sitemap>
                    <loc><?php echo $seo->baseUrl($index['loc']); ?>.xml</loc>
                    <lastmod><?php echo $index['lastmod']; ?></lastmod>
                </sitemap>
            <?php }
        } ?>
        <?php if (isset($list_category)) {
            foreach ($list_category as $category) { ?>
                <sitemap>
                    <loc><?php echo $seo->baseUrl('sitemap/category/' . $category->slugs); ?>.xml</loc>
                    <lastmod><?php echo $site_lastmod; ?></lastmod>
                </sitemap>
            <?php }
        } ?>
        <?php if (isset($list_topic)) {
            foreach ($list_topic as $topic) { ?>
                <sitemap>
                    <loc><?php echo $seo->baseUrl('sitemap/topic/' . $topic->slugs); ?>.xml</loc>
                    <lastmod><?php echo $site_lastmod; ?></lastmod>
                </sitemap>
            <?php }
        } ?>
    </sitemapindex>
<?php } ?>