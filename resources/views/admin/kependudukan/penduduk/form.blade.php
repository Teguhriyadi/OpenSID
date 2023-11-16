@extends('admin.layouts.index')

@section('breadcrumb')
    <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Data Penduduk
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <li class="breadcrumb-item text-muted">
                            <a href="<?= site_url('vi_iuran_produk') ?>" class="text-muted text-hover-primary">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted text-hover-primary">
                                Data Penduduk
                            </a>
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
    @include('admin.layouts.components.notifikasi')

    <form action="<?= $form_action ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="tgl_peristiwa" value="<?= date('d-m-Y') ?>">
        <div class="row">
            <div class="col-md-3 mb-2">
                <div class="card shadow-sm border-0 card-flush">
                    <div class="card-header border-0 py-7">
                        <div class="card-title">
                            <h2>Foto Profil</h2>
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
                                    <input type="file" name="logo_desa" accept=".png, .jpg, .jpeg, .webp, .avif">
                                </label>
                                <span class="btn btn-icon btn-circle btn-active-color-danger w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                    data-bs-original-title="Batal">
                                    <i class="fa-duotone fa-xmark fs-7"></i> </span>
                            </div>
                            <div class="text-gray-600 fw-semibold fs-7">
                                Kosongkan jika logo desa tidak berubah
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container">
                            <label class="required form-label fs-5 fw-bold">
                                Dimensi Logo (persegi)
                            </label>
                            <div class="text-gray-600 fw-semibold fs-7">
                                Kosongkan jika ingin dimensi bawaan
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card shadow-sm card-flush border-0">
                    <div class="card-header border-0 py-7">
                        <div class="card-toolbar align-self-center d-flex column-gap-2">
                            <div>
                                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Kembali"
                                    class="btn btn-icon btn-sm btn-primary align-self-center menu-dropdown"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                                    <i class="fa-solid fa-sign-out fs-7"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Tanggal Lapor
                                </label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="date" class="form-control" name="tgl_lapor" id="tgl_lapor" value="<?= date('d-m-Y') ?>">
                                    </div>
                                </div>
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center position-relative mb-5">
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                            </div>
                            <div class="fw-semibold ms-5">
                                <span class="fs-5 fw-bold text-gray-900 text-hover-primary">
                                    Data Diri :
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="required form-label fs-5 fw-bold">
                                            NIK
                                        </label>
                                        <input type="text" class="form-control" name="nik" id="nik">
                                        <div class="text-gray-600 fw-semibold fs-7">
                                        </div>
                                        <div class="fv-plugins-message-container invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <label class="required form-label fs-5 fw-bold">
                                            Nama <small class="text-danger"> (Tanpa Gelar) </small>
                                        </label>
                                        <input type="text" class="form-control" name="nama" id="nama">
                                        <div class="text-gray-600 fw-semibold fs-7">
                                        </div>
                                        <div class="fv-plugins-message-container invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class=" form-label fs-5 fw-bold">
                                    Status Kepemilikan Identitas
                                </label>
                                <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
                                    style="width: 100%">
                                    <thead>
                                        <tr>
                                            <th>Wajib Identitas.</th>
                                            <th>Identitas Elektronik</th>
                                            <th>Status Rekam</th>
                                            <th>Tag ID Card</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>BELUM WAJIB</strong>
                                            </td>
                                            <td>
                                                <input type="text" size="10">
                                            </td>
                                            <td>
                                                <input type="text" size="10">
                                            </td>
                                            <td>
                                                <input type="text" size="10">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label class="form-label fs-5 fw-bold">
                                            Nomor KK Sebelumnya
                                        </label>
                                        <input type="text" class="form-control" placeholder="Nomor KK Sebelumnya">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Hubungan Dalam Keluarga
                                        </label>
                                        <select name="kk_level" class="form-control" id="kk_level">
                                            <option value="">- Pilih Hubungan -</option>
                                            <?php foreach ($hubungan as $data) : ?>
                                            <option value="<?= $data['id'] ?>">
                                                <?= strtoupper($data['nama']) ?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold"> Jenis Kelamin </label>
                                        <select name="sex" class="form-control" id="sex">
                                            <option value="">- Pilih Jenis Kelamin -</option>
                                            <option value="1">Laki - Laki</option>
                                            <option value="2">Perempuan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-7">
                                        <label class="form-label fs-5 fw-bold">
                                            Agama
                                        </label>
                                        <select name="agama_id" class="form-control" id="agama_id">
                                            <option value="">- Pilih Agama -</option>
                                            <?php foreach ($agama as $data) : ?>
                                            <option value="<?= $data['id'] ?>">
                                                <?= strtoupper($data['nama']) ?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Status Penduduk
                                        </label>
                                        <select name="status" class="form-control" id="status">
                                            <option value="">- Pilih Hubungan -</option>
                                            <?php foreach ($status_penduduk as $data) : ?>
                                            <option value="<?= $data['id'] ?>">
                                                <?= strtoupper($data['nama']) ?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center position-relative mb-5">
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                            </div>
                            <div class="fw-semibold ms-5">
                                <span class="fs-5 fw-bold text-gray-900 text-hover-primary">
                                    Data Kelahiran :
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Nomor Akta Kelahiran
                                        </label>
                                        <input type="text" class="form-control" placeholder="Nomor KK Sebelumnya">
                                    </div>
                                    <div class="col-md-7 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Tempat Lahir
                                        </label>
                                        <input type="text" class="form-control" name="tempatlahir" id="tempatlahir">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Tanggal Lahir
                                        </label>
                                        <input type="date" class="form-control" name="tanggallahir" id="tanggallahir">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Waktu Kelahiran
                                        </label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Tempat Dilahirkan
                                        </label>
                                        <select name="" class="form-control" id="">
                                            <?php foreach ($tempat_dilahirkan as $data) : ?>
                                            <option value="<?= $data['id'] ?>">
                                                <?= strtoupper($data['nama']) ?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Jenis Kelahiran
                                        </label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Anak Ke <small class="text-danger"> Isi dengan Angka</small>
                                        </label>
                                        <input type="date" class="form-control">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Penolong Kelahiran
                                        </label>
                                        <select name="" class="form-control" id="">
                                            <?php foreach ($penolong_kelahiran as $data) : ?>
                                            <option value="<?= $data['id'] ?>">
                                                <?= strtoupper($data['penolong_kelahiran']) ?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Berat Lahir <small>(Gram)</small>
                                        </label>
                                        <input type="text" class="form-control" placeholder="Berat Lahir">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Panjang Lahir <small class="text-danger"> (cm) </small>
                                        </label>
                                        <input type="text" class="form-control" placeholder="Panjang Lahir">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center position-relative mb-5">
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                            </div>
                            <div class="fw-semibold ms-5">
                                <span class="fs-5 fw-bold text-gray-900 text-hover-primary">
                                    PENDIDIKAN DAN PEKERJAAN :
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Pendidikan Dalam KK
                                        </label>
                                        <select name="pendidikan_kk_id" class="form-control" id="pendidikan_kk_id">
                                            <option value="">- Pilih -</option>
                                            <?php foreach ($pendidikan_kk as $data) : ?>
                                            <option value="<?= $data['id'] ?>">
                                                <?= strtoupper($data['nama']) ?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Pendidikan Sedang Ditempuh
                                        </label>
                                        <select name="" class="form-control" id="">
                                            <option value="">- Pilih -</option>
                                            <?php foreach ($pendidikan_sedang as $data) : ?>
                                            <option value="">
                                                <?= strtoupper($data['nama']) ?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Pekerjaan
                                        </label>
                                        <select name="pekerjaan_id" class="form-control" id="pekerjaan_id">
                                            <option value="">- Pilih -</option>
                                            <?php foreach ($pekerjaan as $data) : ?>
                                            <option value="<?= $data['id'] ?>">
                                                <?= strtoupper($data['nama']) ?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center position-relative mb-5">
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                            </div>
                            <div class="fw-semibold ms-5">
                                <span class="fs-5 fw-bold text-gray-900 text-hover-primary">
                                    DATA KEWARGANEGARAAN :
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Suku / Etnis
                                </label>
                                <select name="" class="form-control" id="">
                                    <option value="">- Pilih -</option>
                                    <?php foreach ($suku["penduduk"] as $ref_suku) : ?>
                                    <option value="">
                                        <?= $ref_suku['suku'] ?>
                                    </option>
                                    <?php endforeach ?>
                                </select>
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Status Warga Negara
                                        </label>
                                        <select name="warganegara_id" class="form-control" id="warganegara_id">
                                            <option value="">- Pilih -</option>
                                            <?php foreach ($warganegara as $data) : ?>
                                            <option value="<?= $data['id'] ?>">
                                                <?= strtoupper($data['nama']) ?>
                                            </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Nomor Paspor
                                        </label>
                                        <input type="text" class="form-control" placeholder="0000">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Tanggal Berakhir Passpor
                                        </label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center position-relative mb-5">
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                            </div>
                            <div class="fw-semibold ms-5">
                                <span class="fs-5 fw-bold text-gray-900 text-hover-primary">
                                    DATA ORANG TUA :
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            NIK Ayah
                                        </label>
                                        <input type="text" class="form-control" placeholder="NIK Ayah">
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Nama Ayah
                                        </label>
                                        <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" placeholder="Masukkan Nama Ayah">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            NIK Ibu
                                        </label>
                                        <input type="text" class="form-control" placeholder="NIK Ibu">
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Nama Ibu
                                        </label>
                                        <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" placeholder="Masukkan Nama Ibu">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center position-relative mb-5">
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                            </div>
                            <div class="fw-semibold ms-5">
                                <span class="fs-5 fw-bold text-gray-900 text-hover-primary">
                                    ALAMAT :
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Dusun
                                        </label>
                                        <select name="dusun" class="form-control" id="dusun">
                                            <option value="">- Pilih -</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            RW
                                        </label>
                                        <select name="rw" class="form-control" id="">
                                            <option value="">- Pilih -</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            RT
                                        </label>
                                        <select name="id_cluster" class="form-control" id="">
                                            <option value="">- Pilih -</option>
                                            <option value="0">-</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Alamat Sebelumnya
                                </label>
                                <input type="text" class="form-control" name="">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-3">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Alamat Sekarang
                                </label>
                                <input type="text" class="form-control" name="">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-3">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Nomor Telepon
                                        </label>
                                        <input type="text" class="form-control" placeholder="Nomor Telepon">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Email
                                        </label>
                                        <input type="email" class="form-control" placeholder="0000">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Telegram
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-3">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Cara Menghubungi
                                </label>
                                <select name="" class="form-control" id="">
                                    <option value="">- Pilih -</option>
                                    <?php foreach (['SMS', 'Email', 'Telegram'] as $value) : ?>

                                    <option value="">
                                        <?= $value ?>
                                    </option>
                                    <?php endforeach ?>
                                </select>
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center position-relative mb-5">
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                            </div>
                            <div class="fw-semibold ms-5">
                                <span class="fs-5 fw-bold text-gray-900 text-hover-primary">
                                    STATUS PERKAWINAN :
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-3">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Status Perkawinan
                                        </label>
                                        <select name="status_kawin" class="form-control" id="status_kawin">
                                            <option value="">- Pilih -</option>
                                            <?php foreach($kawin as $data) : ?>
                                                <option value="<?= $data['id'] ?>">
                                                    <?= strtoupper($data['nama']) ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            No. Buku Nikah Perkawinan
                                        </label>
                                        <input type="email" class="form-control" placeholder="0000">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Tanggal Perkawinan
                                        </label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-3">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Akta Perceraian
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                    <div class="col-md-7 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Tanggal Perceraian <small class="text-danger"> (Wajib diisi apabila status
                                                CERAI) </small>
                                        </label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center position-relative mb-5">
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                            </div>
                            <div class="fw-semibold ms-5">
                                <span class="fs-5 fw-bold text-gray-900 text-hover-primary">
                                    DATA KESEHATAN :
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-3">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Golongan Darah
                                        </label>
                                        <select name="golongan_darah_id" class="form-control" id="golongan_darah_id">
                                            <option value="">- Pilih -</option>
                                            <?php foreach($golongan_darah as $data) : ?>
                                                <option value="<?= $data['id'] ?>">
                                                    <?= strtoupper($data["nama"]) ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Cacat
                                        </label>
                                        <input type="email" class="form-control" placeholder="0000">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Sakit Menahun
                                        </label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-3">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Akseptor KB
                                        </label>
                                        <select name="" class="form-control" id=""></select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Asuransi Kesehatan
                                        </label>
                                        <input type="email" class="form-control" placeholder="0000">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            No. Asuransi
                                        </label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-3">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Nomor BPJS Ketenagakerjaan
                                        </label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center position-relative mb-5">
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                            </div>
                            <div class="fw-semibold ms-5">
                                <span class="fs-5 fw-bold text-gray-900 text-hover-primary">
                                    LAINNYA :
                                </span>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-3">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label fs-5 fw-bold">
                                            Dapat Membaca Huruf
                                        </label>
                                        <select name="" class="form-control" id=""></select>
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <label class="form-label fs-5 fw-bold"> Keterangan </label>
                                        <textarea name="" class="form-control" id="" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="reset" data-bs-toggle="tooltip" data-bs-placement="top" title="Batal" class="btn btn-icon btn-sm btn-danger align-self-center menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                            <i class="fa-solid fa-times fs-7"></i>
                        </button>
                        <button type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Kembali" class="btn btn-icon btn-sm btn-primary align-self-center menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                            <i class="fa-solid fa-save fs-7"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
