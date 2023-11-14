<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Sipantas - Login
    </title>
    <meta charset="utf-8" />
    <meta name="description" content="Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quo, earum?" />
    <meta name="keywords" content="admin panel, admin, lorem" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="/" />
    <link rel="shortcut icon" href="<?= base_url() ?>themes/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

    @include('autentikasi/layouts/css/css')

    <style>
        :root {
            --primary-c: #2f3977;
            --primary-active-c: #262e65;
            --primary-rgb-c: 80, 97, 205;
            --primary-text-emphasis-c: #202a52;
            --primary-bg-subtle-c: #dce1f5;
            --primary-border-subtle-c: #b9c2eb;
        }
    </style>
</head>

<body id="kt_body" class="app-blank">
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-475px p-10">
                        <form class="form w-100" action="#">
                            <div class="text-start mb-11">
                                <a href="./login.html">
                                    <img alt="Logo" src="<?= base_url() ?>themes/media/logos/logo.png"
                                        class="h-60px ms-n11 mb-7" />
                                </a>
                                <h1 class="text-gray-900 fw-bolder mb-3 fs-2x">Masuk</h1>
                                <div class="text-gray-500 fw-semibold fs-6">
                                    Anda dapat menggunakan login sosial untuk pengalaman yang lebih lancar
                                </div>
                            </div>

                            <div class="row g-3 mb-9">
                                <div class="col-md-6">
                                    <a href="#"
                                        class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo"
                                            src="https://digidesa.alphatechin.id/assets/media/svg/brand-logos/google-icon.svg"
                                            class="h-15px me-3" />
                                        Login dengan Google
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="#"
                                        class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo"
                                            src="https://digidesa.alphatechin.id/assets/media/svg/brand-logos/apple-black.svg"
                                            class="h-15px me-3" />
                                        Login dengan Apple
                                    </a>
                                </div>
                            </div>

                            <div class="separator separator-content my-7">
                                <span class="w-200px text-gray-500 fw-semibold fs-7">Atau dengan Email</span>
                            </div>

                            <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                                <label class="form-label fs-5 fw-bold">
                                    Email
                                </label>
                                <input type="text" name="email" class="form-control mb-2"
                                    placeholder="contoh@gmail.com">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container mb-5" data-kt-password-meter="true">
                                <label class="form-label fs-5 fw-bold">
                                    Password
                                </label>
                                <div class="position-relative">
                                    <input type="password" name="password" class="form-control mb-2 pe-14"
                                        placeholder="********">
                                    <span
                                        class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility">
                                        <i class="fa-duotone fa-eye-slash fs-4"></i>
                                        <i class="fa-duotone fa-eye d-none fs-4"></i>
                                    </span>
                                </div>
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>

                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-5">
                                <a href="forgot.html">
                                    Lupa Password?
                                </a>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-sm btn-primary w-100" data-kt-indicator="off">
                                    <span class="indicator-label">
                                        Masuk
                                    </span>
                                    <span class="indicator-progress">
                                        Proses...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="w-lg-500px d-flex flex-stack px-10 mx-auto">
                    <div class="d-flex fw-semibold text-primary fs-base gap-5 w-100 justify-content-center">
                        <a href="#" target="_blank">Ketentuan</a>
                        <a href="#" target="_blank">Rencana</a>
                        <a href="#" target="_blank">Hubungi Kami</a>
                    </div>
                </div>
            </div>

            <div
                class="bg-auth d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2 ">
                <div class="d-flex flex-column flex-center justify-content-end py-7 py-lg-15 px-5 px-md-15 w-100">
                    <div class="d-none d-lg-block text-white fs-base text-center">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('autentikasi/layouts/javascript/javascript')

</body>

</html>
