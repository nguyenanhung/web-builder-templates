<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo $site_brand_url; ?></loc>
        <changefreq>always</changefreq>
        <priority>1.0</priority>
    </url>
    <?php foreach ($list_content as $item) { ?>
        <url>
            <loc><?php echo $seo->baseUrl($prefix . $item->slugs) . '.xml'; ?></loc>
            <changefreq><?php echo $changefreq; ?></changefreq>
            <priority><?php echo $priority; ?></priority>
        </url>
    <?php } ?>
</urlset>
