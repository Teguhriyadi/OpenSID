@extends('admin.layouts.index')

@section('breadcrumb')
    <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Lembaga Desa
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <li class="breadcrumb-item text-muted">
                            <a href="<?= site_url('hom_sid') ?>" class="text-muted text-hover-primary">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Lembaga Desa
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
                <a href="<?= site_url('lembaga/form') ?>" class="btn btn-icon btn-sm btn-primary align-self-center"
                    data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah">
                    <i class="fa-solid fa-plus fs-7"></i>
                </a>
                <a href="#" class="btn_del btn btn-icon btn-sm btn-danger align-self-center" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Hapus Data Terpilih">
                    <i class="fa-solid fa-trash fs-7"></i>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-primary align-self-center" data-modal-target="#mdl_cetak"
                    data-title="Cetak Data" data-bs-toggle="tooltip" data-bs-placement="top" title="Cetak">
                    <i class="fa-solid fa-print fs-7"></i>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-primary align-self-center" data-modal-target="#mdl_unduh"
                    data-title="Unduh Data" data-bs-toggle="tooltip" data-bs-placement="top" title="Unduh">
                    <i class="fa-solid fa-download fs-7"></i>
                </a>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="row mb-5 mb-xl-8">
                <div class="col-12">
                    <div class="row fs-5 fw-bold bg-hover-light-primary py-1 mx-0 rounded-2 cursor-default">
                        <label class="col-4">Provinsi</label>
                        <div class="col-8">
                            <span class="me-2">:</span>
                            <span class="text-gray-700 fw-semibold">
                                Jawa Timur
                            </span>
                        </div>
                    </div>
                    <div class="row mt-3 fs-5 fw-bold bg-hover-light-primary py-1 mx-0 rounded-2 cursor-default">
                        <label class="col-4">Kabupaten</label>
                        <div class="col-8">
                            <span class="me-2">:</span>
                            <span class="text-gray-700 fw-semibold">
                                Sidoarjo
                            </span>
                        </div>
                    </div>
                    <div class="row mt-3 fs-5 fw-bold bg-hover-light-primary py-1 mx-0 rounded-2 cursor-default">
                        <label class="col-4">Kecamatan</label>
                        <div class="col-8">
                            <span class="me-2">:</span>
                            <span class="text-gray-700 fw-semibold">
                                Sidoarjo
                            </span>
                        </div>
                    </div>
                    <div class="row mt-3 fs-5 fw-bold bg-hover-light-primary py-1 mx-0 rounded-2 cursor-default">
                        <label class="col-4">Desa</label>
                        <div class="col-8">
                            <span class="me-2">:</span>
                            <span class="text-gray-700 fw-semibold">
                                Sekardangan
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted bg-light text-uppercase align-middle">
                            <th class="min-w-25px text-center">
                                <div class="form-check form-check-sm form-check-custom">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </th>
                            <th class="min-w-25px text-center">No</th>
                            <th class="min-w-25px text-center">Aksi</th>
                            <th class="min-w-125px">Foto</th>
                            <th class="min-w-150px text-end">No Anggota</th>
                            <th class="min-w-150px">NIK</th>
                            <th class="min-w-150px">Nama</th>
                            <th class="min-w-150px">Tempat,<br> Tanggal Lahir</th>
                            <th class="min-w-150px text-end">Umur (Tahun)</th>
                            <th class="min-w-150px">Jenis Kelamin</th>
                            <th class="min-w-150px">Alamat</th>
                            <th class="min-w-150px">Jabatan</th>
                            <th class="min-w-150px">Nomor SK Jabatan</th>
                            <th class="min-w-150px">Nomor SK Pengangkatan</th>
                            <th class="min-w-150px">Tanggal SK Pengangkatan</th>
                            <th class="min-w-150px">Nomor SK Pemberhentian</th>
                            <th class="min-w-150px">Tanggal SK Pemberhentian</th>
                            <th class="min-w-150px">Masa Jabatan (Usia/Periode)</th>
                            <th class="min-w-150px">Keterangan</th>
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
                                                <a href="./rincian_lembaga_edit.html" class="menu-link px-3">
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
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-50px me-3">
                                        <img src="./assets/media/svg/avatars/blank.svg" class="img-fluid" alt="">
                                    </div>
                                </div>
                            </td>
                            <td class="text-end">31231</td>
                            <td>5201142005716996</td>
                            <td>AHLUL</td>
                            <td>
                                MANGSIT,<br>20 MEI 1970
                            </td>
                            <td class="text-end">53</td>
                            <td>LAKI-LAKI</td>
                            <td>Dusun MANGSIT RW - RT 004</td>
                            <td>KETUA</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>Ketua Lembaga</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row justify-content-center mt-7">
                <div class="dataTables_paginate paging_simple_numbers">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled">
                            <a href="#" tabindex="0" class="page-link">
                                <i class="previous"></i>
                            </a>
                        </li>
                        <li class="paginate_button page-item active">
                            <a href="#" tabindex="0" class="page-link">1</a>
                        </li>
                        <li class="paginate_button page-item ">
                            <a href="#" tabindex="0" class="page-link">2</a>
                        </li>
                        <li class="paginate_button page-item next">
                            <a href="#" tabindex="0" class="page-link">
                                <i class="next"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
