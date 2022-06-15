<?php
if (isset($seo) && (isset($category_menu_data) && is_array($category_menu_data))) {
    foreach ($category_menu_data as $item):
        if (isset($item['sub_menu']) && is_array($item['sub_menu']) && !empty($item['sub_menu'])) { ?>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link" data-sidenav-dropdown-toggle>
                    <?php
                    if (isset($item['icon_image']) && $item['icon_image'] !== NULL) { ?>
                        <img src="<?= $seo->assetsUrlThemes('VideoTV'); ?>images/default/<?= $item['icon_image']; ?>" alt="<?= escapeHtml($item['name']) ?>" />
                    <?php } else {
                        if (isset($item['icon']) && $item['icon'] !== NULL) { ?>
                            <i class="<?= $item['icon']; ?>"></i>
                        <?php } else {
                            echo NULL;
                        }
                    }
                    ?>
                    <span class="sidenav-link-title name-item"><?= trim($item['name']); ?></span>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
                <ul role="menu" class="sidenav-dropdown" data-sidenav-dropdown>
                    <?php foreach ($item['sub_menu'] as $subMenuItem): ?>
                        <li class="nav-item">
                            <a href="<?= $seo->siteUrl($subMenuItem['slug']); ?>" class="nav-link" title="<?= escapeHtml($subMenuItem['title']); ?>"><?= trim($subMenuItem['name']); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php } else { ?>
            <li class="nav-item">
                <a href="<?= $seo->siteUrl($item['slug']); ?>" class="nav-link">
                    <?php
                    if (isset($item['icon_image']) && $item['icon_image'] !== NULL) { ?>
                        <img src="<?= $seo->assetsUrlThemes('VideoTV'); ?>images/default/<?= $item['icon_image']; ?>" alt="<?= escapeHtml($item['name']) ?>" />
                    <?php } else {
                        if (isset($item['icon']) && $item['icon'] !== NULL) { ?>
                            <i class="<?= $item['icon']; ?>"></i>
                        <?php } else {
                            echo NULL;
                        }
                    }
                    ?>
                    <span class="sidenav-link-title"><?= trim($item['name']); ?></span>
                </a>
            </li>
        <?php }
    endforeach;
}
?>