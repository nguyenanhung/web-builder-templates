<?php if (isset($seo) && isset($content)) {
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
    <OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/">
        <OutputEncoding><?php echo jsonItem($content, 'OutputEncoding'); ?></OutputEncoding>
        <InputEncoding><?php echo jsonItem($content, 'InputEncoding'); ?></InputEncoding>
        <AdultContent><?php echo jsonItem($content, 'AdultContent'); ?></AdultContent>
        <Language><?php echo jsonItem($content, 'Language'); ?></Language>
        <Language>*</Language>
        <ShortName><?php echo jsonItem($content, 'ShortName'); ?></ShortName>
        <LongName><?php echo jsonItem($content, 'LongName'); ?></LongName>
        <Description><?php echo jsonItem($content, 'Description'); ?></Description>
        <Tags><?php echo jsonItem($content, 'Tags'); ?></Tags>
        <Url type="application/rss+xml" template="http://www.google.com/search?q=site:<?php echo jsonItem($content, 'Domain'); ?>{searchTerms}" />
        <Url type="text/html" method="get" template="<?php echo $seo->siteUrl(); ?>search?q={searchTerms}" />
        <Image height="32" width="32" type="image/png"><?php echo $seo->faviconUrl('favicon-32x32.png'); ?></Image>
        <Query role="example" searchTerms="<?php echo jsonItem($content, 'Query'); ?>" />
        <Developer><?php echo jsonItem($content, 'Developer'); ?></Developer>
        <Attribution><?php echo jsonItem($content, 'Attribution'); ?></Attribution>
        <SyndicationRight><?php echo jsonItem($content, 'SyndicationRight'); ?></SyndicationRight>
        <Contact><?php echo jsonItem($content, 'Contact'); ?></Contact>
    </OpenSearchDescription>
<?php } ?>