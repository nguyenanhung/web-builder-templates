<rss version="2.0">
    <channel rel="self">
        <title><![CDATA[<?php echo escapeHtml(trim($site_name)); ?> - RSS Feed]]></title>
        <link>
        <![CDATA[<?php echo $site_brand_url; ?>]]></link>
        <description><?php echo escapeHtml(trim($site_description)); ?></description>
        <ttl>60</ttl>
        <copyright><?php echo escapeHtml(trim($site_brand_name)); ?></copyright>
        <pubDate><?php echo date('D, d M Y H:i:s'); ?> +0700</pubDate>
        <generator><?php echo escapeHtml(trim($site_brand_name)); ?></generator>
        <docs><?php echo $site_brand_url; ?></docs>
        <image>
            <title><?php echo escapeHtml(trim($site_brand_name)); ?></title>
            <url><?php echo $site_brand_logo; ?></url>
            <link><?php echo $site_brand_url; ?></link>
            <width>450</width>
            <height>368</height>
        </image>
        <?php foreach ($list_content as $item) { ?>
            <item>
                <title><![CDATA[<?php echo trim($item->post_name); ?>]]></title>
                <link>
                <![CDATA[<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>
                ]]></link>
                <guid isPermaLink="false"><![CDATA[<?php echo $seo->encodeId($item->post_id); ?>]]></guid>
                <description>
                    <![CDATA[<a href="<?php echo $seo->urlPost($item->cat_slug, $item->post_slug, $item->post_id, $item->post_type); ?>">
                        <img src="<?php echo $seo->imageUrl($item->post_photo); ?>" />
                    </a>[<?php echo escapeHtml(trim($site_brand_name)); ?>]
                    - <?php echo escapeHtml(trim($item->post_summary)); ?>]]>
                </description>
                <pubDate><![CDATA[<?php echo date('D, d M Y H:i:s', strtotime($item->post_updated_at)); ?> +0700]]></pubDate>
            </item>
        <?php } ?>
    </channel>
</rss>