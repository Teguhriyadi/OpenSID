<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        {{ $setting->admin_title . ' ' . ucwords($setting->sebutan_desa . ' ' . ($desa['nama_desa'] ?? '')) . get_dynamic_title_page_from_path() }}
    </title>
    <meta charset="utf-8" />
    <meta name="description" content="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, earum?" />
    <meta name="keywords" content="admin panel, admin, lorem" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="/" />
    <link rel="shortcut icon" href="<?= base_url() ?>themes/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    @include("admin.layouts.partials.css.style_css")

    @yield("css")
    
</head>

<body id="kt_app_body" data-kt-app-page-loading="on"
     data-kt-app-page-loading="on" data-kt-app-header-fixed="true"
     data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-fixed="true"
     data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
     data-kt-app-sidebar-push-footer="true" class="app-default">

    <div class="page-loader flex-column">
        <img alt="Logo" class="h-100px" src="<?= base_url() ?>themes/media/logos/logo-single-dark.png">
        <div class="d-flex align-items-center mt-n5">
            <span class="spinner-border text-primary" role="status"></span>
            <span class="text-muted fs-6 fw-semibold ms-5">Memuat...</span>
        </div>
    </div>

    <div class="d-flex flex-column" id="kt_app_root">
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            @include("admin.layouts.partials.header.header")
            <!--end::Header-->

            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                    <!-- logo -->
                    @include("admin.layouts.partials.sidebar.sidebar-header")
                    <!-- menu -->
                    @include("admin.layouts.partials.sidebar.sidebar")
                </div>
                <!--end::Sidebar-->

                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content-->
                    <div class="d-flex flex-column flex-column-fluid">
                        
                        {{-- @include("admin.layouts.breadcrumb") --}}
                        @yield("breadcrumb")

                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <div id="kt_app_content_container" class="app-container container-fluid">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                    <!--end::Content-->

                    <!--begin::Footer-->
                    <div id="kt_app_footer" class="app-footer">
                        <div
                            class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2023&copy;</span>
                                <a href="#" target="_blank" class="text-gray-800 text-hover-primary">PT
                                    Alphatech</a>
                            </div>
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item">
                                    <a href="#" target="_blank" class="menu-link px-2">License</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" target="_blank" class="menu-link px-2">More Theme</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" target="_blank" class="menu-link px-2">Documentation</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#" target="_blank" class="menu-link px-2">Support</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
        </div>
    </div>

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="fa-light fa-arrow-up text-white"></i>
    </div>
    <!--end::Scrolltop-->

    <script type="text/javascript">
        var SITE_URL = "{{ site_url() }}";
    </script>
    @if (config_item('csrf_protection'))
        <!-- CSRF Token -->
        <script type="text/javascript">
            var csrfParam = "{{ $token }}";
            var getCsrfToken = () => document.cookie.match(new RegExp(csrfParam + '=(\\w+)'))[1];
        </script>
        <script src="{{ asset('js/anti-csrf.js') }}"></script>
    @endif
    
    @include("admin.layouts.partials.javascript.style_javascript")

    @yield("javascript")
    
</body>

</html>
