@extends('admin.layouts.index')

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
    <form action="<?= $form_action ?>" method="POST" class="d-flex flex-column flex-lg-row gap-5 gap-xl-8">
        <input type="hidden" name="id_pend" value="<?= $individu['id']?>">
        <div class="d-flex flex-column flex-lg-row-auto w-lg-250px w-xl-350px">
            <div class="card shadow-sm card-flush border-0">
                <div class="card-header border-0 py-7">
                    <div class="card-title">
                        <h2>Foto</h2>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="fv-row w-100 fv-plugins-icon-container mb-5 text-center">
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
                    <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                        <label class="required form-label fs-5 fw-bold">
                            Lebar
                        </label>
                        <input type="text" name="lebar" class="form-control mb-2" placeholder="Lebar" value="">
                        <div class="text-gray-600 fw-semibold fs-7">
                            Satuan ukuran (px)
                        </div>
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                    <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                        <label class="required form-label fs-5 fw-bold">
                            Tinggi
                        </label>
                        <input type="text" name="tinggi" class="form-control mb-2" placeholder="Tinggi" value="">
                        <div class="text-gray-600 fw-semibold fs-7">
                            Satuan ukuran (px)
                        </div>
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-lg-row-fluid gap-5 gap-xl-8">
            <div class="flex-lg-row-fluid">
                <ul id="tab_data_staf"
                    class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                    <li class="nav-item">
                        <a href="#" data-value="null" class="nav-link text-active-primary pb-4 active">
                            Tidak Terdata
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-value="db" class="nav-link text-active-primary pb-4">
                            Dari Database Penduduk
                        </a>
                    </li>
                </ul>
                <div class="card shadow-sm card-flush border-0">
                    <div class="card-body">
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5 d-none">
                            <label class="required form-label fs-5 fw-bold">
                                NIK/Nama Penduduk
                            </label>
                            <select class="form-select mb-2" name="pamong_nama" data-control="select2"
                                data-placeholder="Pilih NIK/Nama penduduk">
                                <option></option>
                                <option value="1">NIK:81273816238132 - Ahlul - Mangsit
                                </option>
                            </select>
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Nama Pegawai
                            </label>
                            <input type="text" name="pamong_nama" class="form-control mb-2" placeholder="Nama pegawai"
                                value="">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <label class="required form-label fs-5 fw-bold">
                            Gelar
                        </label>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <input type="text" name="gelar_depan" class="form-control mb-2"
                                    placeholder="Gelar depan" value="">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <input type="text" name="gelar_belakang" class="form-control mb-2"
                                    placeholder="Gelar belakang" value="">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Nomor Induk Kependudukan
                            </label>
                            <input type="text" name="nik" class="form-control mb-2"
                                placeholder="Nomor Induk Kependudukan" value="">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                NIP
                            </label>
                            <input type="text" name="nip" class="form-control mb-2" placeholder="NIP"
                                value="">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Tag ID Card
                            </label>
                            <input type="text" name="tag_id_card" class="form-control mb-2" placeholder="Tag ID Card"
                                value="">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Tempat Lahir
                            </label>
                            <input type="text" name="tempat_lahir" class="form-control mb-2"
                                placeholder="Tempat lahir" value="">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Tanggal Lahir
                            </label>
                            <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control mb-2"
                                placeholder="Tanggal lahir" value="">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Jenis Kelamin
                            </label>
                            <select class="form-select mb-2" name="jenkel" data-control="select2"
                                data-placeholder="Pilih jenis kelamin">
                                <option></option>
                                <option value="l">Laki-Laki</option>
                                <option value="p">Perempuan</option>
                            </select>
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Pendidikan
                            </label>
                            <select class="form-select mb-2" name="pendidikan" data-control="select2"
                                data-placeholder="Pilih pendidikan">
                                <option></option>
                                <option value="1">Tidak/Belum sekolah</option>
                                <option value="2">SD</option>
                                <option value="3">SMP</option>
                                <option value="4">SMA</option>
                                <option value="5">SMK</option>
                                <option value="6">D1</option>
                                <option value="7">D3</option>
                                <option value="8">D4</option>
                                <option value="9">S1</option>
                                <option value="10">S2</option>
                                <option value="11">S3</option>
                            </select>
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Agama
                            </label>
                            <select class="form-select mb-2" name="jenkel" data-control="select2"
                                data-placeholder="Pilih agama">
                                <option></option>
                                <option value="1">Islam</option>
                                <option value="2">Kristen</option>
                                <option value="3">Hindu</option>
                                <option value="4">Buddha</option>
                                <option value="5">Konghucu</option>
                            </select>
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Pangkat/Golongan
                            </label>
                            <input type="text" name="pangkat" class="form-control mb-2"
                                placeholder="Pangkat/Golongan" value="">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Nomor Keputusan Pengangkatan
                            </label>
                            <input type="text" name="no_pengangkatan" class="form-control mb-2"
                                placeholder="Nomor keputusan pengangkatan" value="">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Tanggal Keputusan Pengangkatan
                            </label>
                            <input type="text" name="tanggal_pengangkatan" id="tanggal_pengangkatan"
                                class="form-control mb-2" placeholder="Tanggal keputusan pengangkatan" value="">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Nomor Keputusan Pemberhentian
                            </label>
                            <input type="text" name="no_pemberhentian" class="form-control mb-2"
                                placeholder="Nomor keputusan pemberhentian" value="">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Tanggal Keputusan Pemberhentian
                            </label>
                            <input type="text" name="tanggal_pemberhentian" id="tanggal_pemberhentian"
                                class="form-control mb-2" placeholder="Tanggal keputusan pemberhentian" value="">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Masa Jabatan
                            </label>
                            <input type="text" name="masa_jabatan" class="form-control mb-2"
                                placeholder="Masa jabatan" value="">
                            <div class="text-gray-600 fw-semibold fs-7">
                                Contoh: 6 Tahun periode pertama (2015s/d2021)
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Jabatan
                            </label>
                            <select class="form-select mb-2 select2" name="jabatan_id">
                                <option></option>
                                <?php foreach ($jabatan as $key => $value) : ?>
                                    <option value="1">
                                        <?= $value ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Atasan
                            </label>
                            <select class="form-select mb-2" name="atasan" data-control="select2"
                                data-placeholder="Pilih atasan">
                                <option></option>
                                <option value="1">Kasi Pelayanan</option>
                                <option value="2">Kadus Padang Indah</option>
                                <option value="3">Ahmad Habib (Kasi Kesejahteraan)</option>
                            </select>
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Bagan Tingkat
                            </label>
                            <input type="text" name="bagan_tingkat" class="form-control mb-2"
                                placeholder="Bagan tingkat" value="">
                            <div class="text-gray-600 fw-semibold fs-7">
                                Angka menunjukan tingkat di bagan organisasi. Contoh: 2
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Bagan Offset
                            </label>
                            <input type="text" name="bagian_offset" class="form-control mb-2"
                                placeholder="Bagan offset" value="">
                            <div class="text-gray-600 fw-semibold fs-7">
                                Angka menunjukan presentase geser (-n) atau (+n). Contoh:
                                75%
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Bagan Layout
                            </label>
                            <select class="form-select mb-2" name="bagan_layout" data-control="select2"
                                data-placeholder="Pilih bagan layout">
                                <option></option>
                                <option value="1" selected>Tidak ada layout</option>
                                <option value="2">Hanging</option>
                            </select>
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Bagan Warna
                            </label>
                            <input type="color" name="bagian_warna" class="form-control form-control-color w-100 mb-2"
                                placeholder="Bagan warna" value="">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Status Pegawai Desa
                            </label>
                            <select class="form-select mb-2" name="status_pegawai_desa" data-control="select2"
                                data-placeholder="Pilih status pegawai desa">
                                <option></option>
                                <option value="1">Aktif</option>
                                <option value="2">Tidak Aktif</option>
                            </select>
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

                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section("javascript")

<script>
    $(document).ready(function () {
        $("#tanggal_lahir").flatpickr({
            defaultDate: 'today',
            maxDate: 'today'
        });
        $('#tab_data_staf a.nav-link').click(function (e) {
            e.preventDefault();
            $('#tab_data_staf a.nav-link').removeClass('active');
            $(this).addClass('active')
            if ($(this).data('value') === 'db') {
                $('[name=nik_db]').parent().removeClass('d-none')
            } else {
                $('[name=nik_db]').parent().addClass('d-none')
            }
        });
    });
</script>

@endsection