@extends('admin.layouts.index')

@section('title')
    Administrasi Umum
@endsection

@section('breadcrumb')
    <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Wilayah Administratif
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <li class="breadcrumb-item text-muted">
                            <a href="./index.html" class="text-muted text-hover-primary">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted text-hover-primary">
                                Info Desa
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Wilayah Administratif
                        </li>
                    </ul>
                </div>

                <div class="d-flex align-items-center gap-2 gap-lg-3">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="d-flex flex-column flex-lg-row gap-5 gap-xl-8">
        <div class="d-flex flex-column flex-lg-row-auto w-lg-250px w-xl-350px">
            <div class="card shadow-sm card-flush border-0" data-kt-sticky="true" data-kt-sticky-name="docs-sticky-summary"
                data-kt-sticky-left="auto" data-kt-sticky-width="{default:'auto','md': '350px'}" data-kt-sticky-top="100px"
                data-kt-sticky-animation="true" data-kt-sticky-zindex="95">
                <div class="card-body">
                    <div class="menu menu-rounded menu-column menu-active-bg menu-hover-bg menu-title-gray-700 fs-5 fw-semibold"
                        id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item">
                            <div class="menu-content pb-2">
                                <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Menu</span>
                            </div>
                        </div>
                        @include('admin/bumindes/penduduk/main/side')
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-lg-row-fluid gap-5 gap-xl-8">
            <div class="card shadow-sm card-flush border-0">
                <div class="card-header border-0 py-7">
                    <h2 class="card-title">
                        <div class="me-3 d-flex align-items-center justify-content-center justify-content-md-start">
                            <div class="dataTables_length">
                                <label>
                                    <select name="kt_ecommerce_products_table_length"
                                        class="form-select form-select-sm form-select-solid">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex align-items-center position-relative">
                            <i class="fa-duotone fa-search fs-3 position-absolute ms-4"></i>
                            <input type="text" class="form-control form-control-sm w-250px ps-12" placeholder="Cari...">
                        </div>
                    </h2>
                    <div class="card-toolbar align-self-center d-flex column-gap-2">
                        <a href="./jabatan_add.html" class="btn btn-icon btn-sm btn-primary align-self-center"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah">
                            <i class="fa-solid fa-plus fs-7"></i>
                        </a>
                        <a href="#" class="btn_del btn btn-icon btn-sm btn-danger align-self-center"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data Terpilih">
                            <i class="fa-solid fa-trash fs-7"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                            <thead>
                                <tr class="fw-bold text-muted bg-light text-uppercase align-middle">
                                    <th class="min-w-25px w-50px text-center">
                                        <div class="form-check form-check-sm form-check-custom">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </th>
                                    <th class="min-w-25px w-50px text-center">No</th>
                                    <th class="min-w-25px w-50px text-center">Aksi</th>
                                    <th class="min-w-125px">Jabatan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-sm form-check-custom">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center flex-shrink-0 gap-2">
                                            <div>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Aksi"
                                                    class="btn btn-sm btn-secondary btn-icon btn-flex btn-center menu-dropdown"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                                                    <i class="fa-solid fa-ellipsis fs-3"></i>
                                                </a>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-auto py-4 min-w-125px"
                                                    data-kt-menu="true" data-popper-placement="bottom-start">
                                                    <div class="menu-item px-3">
                                                        <a href="./jabatan_edit.html" class="menu-link px-3">
                                                            Ubah
                                                        </a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="btn_del menu-link px-3">
                                                            Hapus
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        Kepala Desa
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        <div class="form-check form-check-sm form-check-custom">
                                            <input class="form-check-input" type="checkbox" value="1">
                                        </div>
                                    </td>
                                    <td class="text-center">1</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center flex-shrink-0 gap-2">
                                            <div>
                                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Aksi"
                                                    class="btn btn-sm btn-secondary btn-icon btn-flex btn-center menu-dropdown"
                                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                                                    <i class="fa-solid fa-ellipsis fs-3"></i>
                                                </a>
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-auto py-4 min-w-125px"
                                                    data-kt-menu="true" data-popper-placement="bottom-start">
                                                    <div class="menu-item px-3">
                                                        <a href="./jabatan_edit.html" class="menu-link px-3">
                                                            Ubah
                                                        </a>
                                                    </div>
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="btn_del menu-link px-3">
                                                            Hapus
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        Kepala Desa
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
