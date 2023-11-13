<div class="app-sidebar-navs flex-column-fluid py-6" id="kt_app_sidebar_navs">
    <div id="kt_app_sidebar_navs_wrappers" class="app-sidebar-wrapper hover-scroll-y my-2" data-kt-scroll="true"
        data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_header"
        data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">
        <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
            class="app-sidebar-menu-primary menu menu-column menu-rounded menu-sub-indention menu-state-bullet-primary">

            <?php foreach ($modul as $mod) : ?>
                <?php if (count($mod["submodul"]) == 0) : ?>
                <div class="menu-item mb-2">
                    <a href="<?= route($mod["url"]) ?>" class="menu-link <?= jecho($modul_ini, $mod["slug"], "active") ?>">
                        <span class="menu-icon">
                            <i class="fa-duotone <?= $mod["ikon"] ?> fs-2"></i>
                        </span>
                        <span class="menu-title"><?= $mod["modul"] ?></span>
                    </a>
                </div>
                <?php else : ?>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion <?= jecho($modul_ini, $mod["slug"], "here show") ?>">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="fa-duotone <?= $mod["ikon"] ?> fs-2"></i>
                        </span>
                        <span class="menu-title">
                            <?= $mod["modul"] ?>
                        </span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <?php foreach ($mod["submodul"] as $submod) : ?>
                        <div class="menu-item">
                            <a class="menu-link <?= jecho($sub_modul_ini, $submod['slug'], 'active') ?>" href="<?= route($submod["url"]) ?>">
                                <span class="menu-bullet">
                                    <?php if ($submod["ikon"] != null) : ?>
                                        <i class="fa-duotone <?= $submod["ikon"] ?>"></i>
                                    <?php else : ?>
                                        <span class="bullet bullet-dot"></span>
                                    <?php endif ?>
                                </span>
                                <span class="menu-title">
                                    <?= $submod["modul"] ?>
                                </span>
                            </a>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</div>
