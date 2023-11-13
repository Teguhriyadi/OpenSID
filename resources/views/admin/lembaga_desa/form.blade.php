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
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="<?= site_url('lembaga') ?>" class="text-muted text-hover-primary">
                                Lembaga Desa
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
    <form action="" class="d-flex flex-column flex-lg-row gap-5 gap-xl-8">
        <div class="d-flex flex-column flex-lg-row-auto w-lg-250px w-xl-350px gap-5 gap-xl-8">
            <div class="card shadow-sm border-0 card-flush">
                <div class="card-header border-0 py-7">
                    <div class="card-title">
                        <h2>Foto</h2>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="fv-row w-100 fv-plugins-icon-container text-center">
                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                            data-kt-image-input="true">
                            <div class="image-input-wrapper w-150px h-150px">
                            </div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                data-bs-original-title="Pilih file">
                                <i class="fa-duotone fa-pen-swirl fs-7"></i>
                                <input type="file" name="foto" accept=".png, .jpg, .jpeg, .webp, .avif">
                                <input type="hidden" name="foto_remove">
                            </label>
                            <span class="btn btn-icon btn-circle btn-active-color-danger w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-original-title="Batal">
                                <i class="fa-duotone fa-xmark fs-7"></i> </span>
                        </div>
                        <div class="text-gray-600 fw-semibold fs-7">
                            Kosongkan jika foto tidak berubah
                        </div>
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-lg-row-fluid">
            <div class="card shadow-sm card-flush border-0">
                <div class="card-body">
                    <form action="" class="form">
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Nama Anggota
                                </label>
                                <select class="form-select mb-2" name="nama_anggota" data-control="select2"
                                    data-placeholder="Pilih nama anggota">
                                    <option></option>
                                    <option value="1">NIK : 0110623202500001 - LAHIR RT--,
                                        RW-003, DUSUN SARIONO</option>
                                    <option value="2">NIK : 1505050000000001 - TES AJA RT--,
                                        RW-003, DUSUN LOCO</option>
                                </select>
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Nomor Anggota
                                </label>
                                <input type="text" name="nomor_anggota" class="form-control mb-2"
                                    placeholder="Nomor anggota">
                                <div class="text-gray-600 fw-semibold fs-7">
                                    Pastikan nomor anggota belum pernah dipakai.
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Jabatan
                                </label>
                                <select class="form-select mb-2" name="jabatan" data-control="select2"
                                    data-placeholder="Pilih jabatan">
                                    <option></option>
                                    <option value="1">Ketua</option>
                                    <option value="2">Wakil Ketua</option>
                                </select>
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Nomor SK Jabatan
                                </label>
                                <input type="text" name="no_sk_jabatan" class="form-control mb-2"
                                    placeholder="Nomor SK jabatan">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Nomor SK Pengangkatan
                                </label>
                                <input type="text" name="no_sk_pengangkatan" class="form-control mb-2"
                                    placeholder="Nomor SK pengangkatan">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Tanggal SK Pengangkatan
                                </label>
                                <input type="text" name="tanggal_sk_pengangkatan" id="tanggal_sk_pengangkatan"
                                    class="form-control mb-2" placeholder="Tanggal SK pengangkatan">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Nomor SK Pemberhentian
                                </label>
                                <input type="text" name="no_sk_pemberhentian" class="form-control mb-2"
                                    placeholder="Nomor SK pemberhentian">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Tanggal SK Pemberhentian
                                </label>
                                <input type="text" name="tanggal_sk_pemberhentian" id="tanggal_sk_pemberhentian"
                                    class="form-control mb-2" placeholder="Tanggal SK pemberhentian">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Masa Jabatan (Usia/Periode)
                            </label>
                            <input type="text" name="masa_jabatan" class="form-control mb-2"
                                placeholder="Masa jabatan (Usia/Periode)">
                            <div class="text-gray-600 fw-semibold fs-7">
                                Contoh: 6 Tahun periode pertama (2015 s/d 2021)
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Keterangan
                            </label>
                            <textarea class="form-control mb-2" name="keterangan" placeholder="Keterangan" id="keterangan" rows="3"></textarea>
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-sm btn-primary" data-kt-indicator="off">
                                <span class="indicator-label">
                                    Simpan
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
        </div>
    </form>
@endsection
