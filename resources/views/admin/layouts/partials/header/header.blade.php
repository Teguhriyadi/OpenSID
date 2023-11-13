<div id="kt_app_header" class="app-header">
    <div class="app-container container-fluid d-flex align-items-stretch flex-stack" id="kt_app_header_container">
        <!--begin::Sidebar toggle-->
        <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px me-2" id="kt_app_sidebar_mobile_toggle">
                <i class="fa-duotone fa-bars fs-2"></i>
            </div>
            <a href="./index.html">
                <img alt="Logo" src="<?= base_url() ?>themes/media/logos/logo-single-light.png" class="h-50px" />
            </a>
        </div>
        <!--end::Sidebar toggle-->

        <!--begin::Navbar-->
        <div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">
            <div class="app-navbar-item d-flex align-items-stretch flex-lg-grow-1">
                <div class="header-search d-flex align-items-center w-lg-350px">
                    <form class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                        <i
                            class="fa-duotone fa-magnifying-glass search-icon fs-3 position-absolute top-50 translate-middle-y ms-5"></i>
                        <input type="text" class="search-input form-control form-control rounded-1 ps-13"
                            name="q" value="" placeholder="Search..." />
                    </form>
                </div>
            </div>

            <!-- Translation -->
            <div class="app-navbar-item ms-1 ms-md-3">
                <div class="btn btn-icon btn-custom btn-color-gray-500 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <i class="fa-duotone fa-language fs-1"></i>
                </div>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                    data-kt-menu="true" data-kt-element="theme-mode-menu" data-popper-placement="bottom-end">
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5 active">
                            <span class="symbol symbol-20px me-4">
                                <img class="rounded-1" src="<?= base_url() ?>themes/media/flags/united-states.svg"
                                    alt="" />
                            </span>
                            English
                        </a>
                    </div>
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link d-flex px-5">
                            <span class="symbol symbol-20px me-4">
                                <img class="rounded-1" src="<?= base_url() ?>themes/media/flags/indonesia.svg"
                                    alt="" />
                            </span>Indonesian</a>
                    </div>
                </div>
            </div>

            <!-- Shortcuts -->
            <div class="app-navbar-item ms-1 ms-md-3">
                <div class="btn btn-icon btn-custom btn-color-gray-500 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px"
                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <i class="fa-duotone fa-grid-2-plus fs-1"></i>
                </div>
                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px" data-kt-menu="true">
                    <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10"
                        style="
                                background-image: url('<?= base_url() ?>themes/media/misc/menu-header-bg.jpg');
                            ">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <h3 class="text-white fw-semibold m-0">
                                Shortcuts
                            </h3>
                            <div class="card-toolbar">
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-icon-white btn-active-light-primary"
                                    title="Add shortcuts">
                                    <i class="fa-duotone fa-grid-2-plus fs-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="mh-450px scroll-y hide-scroll">
                        <div class="row g-0">
                            <div class="col-6">
                                <a href="#"
                                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                    <i class="fa-duotone fa-calendar-days fs-3x text-primary mb-2"></i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Calendar</span>
                                    <span class="fs-7 text-gray-400">Appointments</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#"
                                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                    <i class="fa-duotone fa-file-invoice fs-3x text-primary mb-2"></i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Invoice App</span>
                                    <span class="fs-7 text-gray-400">Manage Accounts</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#"
                                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                    <i class="fa-duotone fa-users fs-3x text-primary mb-2"></i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">User App</span>
                                    <span class="fs-7 text-gray-400">Manage Users</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#"
                                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                    <i class="fa-duotone fa-shield-check fs-3x text-primary mb-2"></i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Role
                                        Management</span>
                                    <span class="fs-7 text-gray-400">Permission</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#"
                                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                    <i class="fa-duotone fa-dashboard fs-3x text-primary mb-2"></i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Dashboard</span>
                                    <span class="fs-7 text-gray-400">User Profile</span>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#"
                                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                    <i class="fa-duotone fa-gear fs-3x text-primary mb-2"></i>
                                    <span class="fs-5 fw-semibold text-gray-800 mb-0">Setting</span>
                                    <span class="fs-7 text-gray-400">Account Settings</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Notifications-->
            <div class="app-navbar-item ms-1 ms-md-3">
                <div class="btn btn-icon btn-custom btn-color-gray-500 btn-active-light btn-active-color-primary w-35px h-35px w-md-40px h-md-40px position-relative"
                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <i class="fa-duotone fa-bell fs-1"></i>
                    <span
                        class="position-absolute top-0 start-100 translate-middle badge badge-circle badge-danger w-15px h-15px ms-n4 mt-3">5</span>
                </div>
                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px" data-kt-menu="true">
                    <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10"
                        style="
                                background-image: url('<?= base_url() ?>themes/media/misc/menu-header-bg.jpg');
                            ">
                        <div class="d-flex justify-content-start align-items-center w-100">
                            <h3 class="text-white fw-semibold m-0">
                                Notifications
                            </h3>
                            <div class="card-toolbar"></div>
                        </div>
                    </div>
                    <div class="scroll-y mh-325px my-5 px-8">
                        <div class="d-flex flex-stack py-4">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-35px me-4">
                                    <img class="img-fluid" src="<?= base_url() ?>themes/media/avatars/300-11.jpg"
                                        alt="user" />
                                </div>
                                <div class="mb-0 me-2">
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Jhon
                                        Doe</a>
                                    <div class="text-gray-400 fs-7 clamp clamp-1">
                                        Lorem ipsum dolor sit
                                        amet consectetur
                                        adipisicing elit.
                                        Mollitia quidem eligendi
                                        tempora reiciendis odio
                                        ipsum deleniti
                                        exercitationem
                                        obcaecati, molestiae
                                        iusto, rerum dolorem
                                        laudantium! Voluptates
                                        perspiciatis placeat
                                        vitae quae accusantium.
                                        Consequatur!
                                    </div>
                                </div>
                            </div>
                            <span class="badge badge-light fs-8 position-relative">
                                <span class="position-absolute badge badge-circle badge-primary w-10px h-10px"
                                    style="right: 0; top: -5px"></span>
                                1 hr ago
                            </span>
                        </div>
                        <div class="d-flex flex-stack py-4">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-35px me-4">
                                    <img class="img-fluid" src="<?= base_url() ?>themes/media/avatars/300-11.jpg"
                                        alt="user" />
                                </div>
                                <div class="mb-0 me-2">
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Jhon
                                        Doe</a>
                                    <div class="text-gray-400 fs-7 clamp clamp-1">
                                        Lorem ipsum dolor sit
                                        amet consectetur
                                        adipisicing elit.
                                        Mollitia quidem eligendi
                                        tempora reiciendis odio
                                        ipsum deleniti
                                        exercitationem
                                        obcaecati, molestiae
                                        iusto, rerum dolorem
                                        laudantium! Voluptates
                                        perspiciatis placeat
                                        vitae quae accusantium.
                                        Consequatur!
                                    </div>
                                </div>
                            </div>
                            <span class="badge badge-light fs-8 position-relative">
                                <span class="position-absolute badge badge-circle badge-primary w-10px h-10px"
                                    style="right: 0; top: -5px"></span>
                                1 hr ago
                            </span>
                        </div>
                        <div class="d-flex flex-stack py-4">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-35px me-4">
                                    <img class="img-fluid" src="<?= base_url() ?>themes/media/avatars/300-11.jpg"
                                        alt="user" />
                                </div>
                                <div class="mb-0 me-2">
                                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Jhon
                                        Doe</a>
                                    <div class="text-gray-400 fs-7 clamp clamp-1">
                                        Lorem ipsum dolor sit
                                        amet consectetur
                                        adipisicing elit.
                                        Mollitia quidem eligendi
                                        tempora reiciendis odio
                                        ipsum deleniti
                                        exercitationem
                                        obcaecati, molestiae
                                        iusto, rerum dolorem
                                        laudantium! Voluptates
                                        perspiciatis placeat
                                        vitae quae accusantium.
                                        Consequatur!
                                    </div>
                                </div>
                            </div>
                            <span class="badge badge-light fs-8 position-relative">
                                <span class="position-absolute badge badge-circle badge-primary w-10px h-10px"
                                    style="right: 0; top: -5px"></span>
                                1 hr ago
                            </span>
                        </div>
                    </div>
                    <div class="py-3 text-center border-top">
                        <a href="#" class="btn btn-color-gray-600 btn-active-color-primary">View All
                            <i class="fa-duotone fa-arrow-right fs-5"></i></a>
                    </div>
                </div>
            </div>

            <!-- User -->
            <div class="app-navbar-item ms-1 ms-md-5" id="kt_header_user_menu_toggle">
                <div class="cursor-pointer symbol symbol-circle symbol-35px symbol-md-45px"
                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <img src="<?= base_url() ?>themes/media/avatars/300-2.jpg" alt="user" />
                </div>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                    data-kt-menu="true">
                    <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                            <div class="symbol symbol-50px me-5">
                                <img alt="Logo" src="<?= base_url() ?>themes/media/avatars/300-2.jpg" />
                            </div>
                            <div class="d-flex flex-column">
                                <div class="fw-bold d-flex align-items-center fs-5">
                                    Max Smith
                                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Online</span>
                                </div>
                                <span class="fw-semibold text-muted text-hover-primary fs-7">admin</span>
                            </div>
                        </div>
                    </div>
                    <div class="separator my-2"></div>
                    <!-- my profile -->
                    <div class="menu-item px-5">
                        <a href="#" class="menu-link px-5">
                            <span class="menu-icon">
                                <i class="fa-duotone fa-user fs-4"></i>
                            </span>
                            <span class="menu-title">
                                My Profile
                            </span>
                        </a>
                    </div>
                    <!-- settings -->
                    <div class="menu-item px-5">
                        <a href="#" class="menu-link px-5">
                            <span class="menu-icon">
                                <i class="fa-duotone fa-gear fs-4"></i>
                            </span>
                            <span class="menu-title">
                                Settings
                            </span>
                        </a>
                    </div>
                    <!-- billing -->
                    <div class="menu-item px-5">
                        <a href="#" class="menu-link px-5">
                            <span class="menu-icon">
                                <i class="fa-duotone fa-credit-card shadow-sm border-0 fs-4"></i>
                            </span>
                            <span class="menu-title">
                                Billing
                            </span>
                            <span class="menu-badge">
                                <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                            </span>
                        </a>
                    </div>

                    <div class="separator my-2"></div>

                    <!-- faq -->
                    <div class="menu-item px-5">
                        <a href="#" class="menu-link px-5">
                            <span class="menu-icon">
                                <i class="fa-duotone fa-question-circle fs-4"></i>
                            </span>
                            <span class="menu-title">
                                FAQ
                            </span>
                        </a>
                    </div>
                    <!-- price -->
                    <div class="menu-item px-5">
                        <a href="#" class="menu-link px-5">
                            <span class="menu-icon">
                                <i class="fa-duotone fa-dollar fs-4"></i>
                            </span>
                            <span class="menu-title">
                                Pricing
                            </span>
                        </a>
                    </div>
                    <!-- sign out -->
                    <div class="menu-item px-5">
                        <a href="<?= base_url('siteman/logout') ?>" class="menu-link px-5">
                            <span class="menu-icon">
                                <i class="fa-duotone fa-sign-out fs-4"></i>
                            </span>
                            <span class="menu-title">
                                Sign Out
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-navbar-separator separator d-none d-lg-flex"></div>
    </div>
</div>
