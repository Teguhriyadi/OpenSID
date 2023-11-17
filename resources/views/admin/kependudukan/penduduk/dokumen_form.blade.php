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
    <div class="card shadow-sm card-flush border-0">
        <div class="card-header border-0 py-7">
            <div class="card-toolbar align-self-center d-flex column-gap-2">
                <div>
                    <a href="<?= site_url("penduduk/dokumen/{$penduduk['id']}") ?>" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Kembali"
                        class="btn btn-icon btn-sm btn-danger align-self-center menu-dropdown"
                        data-kt-menu-placement="bottom-start">
                        <i class="fa-solid fa-sign-out fs-7"></i>
                    </a>
                </div>
            </div>
        </div>
        <form action="<?= $form_action ?>" method="POST" enctype="multipart/form-data">
            <div class="card-body">
                <div class="form-group mb-3">
                    <label for="nama" class="form-label"> Nama Dokumen </label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Dokumen"
                        value="<?= $dokumen['nama'] ?>">
                    <input type="hidden" name="id_pend" value="<?= $penduduk['id'] ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="id_syarat" class="form-label"> Jenis Dokumen </label>
                    <select name="id_syarat" class="form-control" id="id_syarat">
                        <option value="">- Pilih -</option>
                        <?php foreach ($jenis_syarat_surat as $data) : ?>
                        <option value="<?= $data['ref_syarat_id'] ?>"
                            <?= selected($data['ref_syarat_id'], $dokumen['id_syarat']) ?>><?= $data['ref_syarat_nama'] ?>
                        </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group mb-3">
                    {{-- <input type="text" class="form-control" id="file_path" name="satuan"> --}}
                    <label for="satuan" class="form-label"> Pilih File :</label>
                    <input type="file" class="form-control" name="satuan" accept=".jpg,.jpeg,.png,.pdf" id="satuan">
                    {{-- <input type="hidden" name="old_file" value="<?= $dokumen['satuan'] ?>"> --}}
                </div>
                <small class="text-danger">
                    Kosongkan jika tidak ingin mengubah dokumen. Ukuran maksimal <strong><?= max_upload() ?> MB
                </small>
                <div class="form-group mt-2 mb-3">
                    <input type="checkbox" name="dok_warga" <?php jecho($dokumen['dok_warga'], 1, 'checked'); ?>>
                    <label> Boleh diubah oleh warga melalui Layanan Mandiri</label>
                </div>
                <?php if (!empty($kk)) : ?>
                <hr>
                <p>
                    <strong>
                        Centang jika dokumen yang diupload berlaku juga untuk anggota keluarga di bawah ini.
                    </strong>
                </p>
                <div class="table-responsive">
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" style="width: 100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIK</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kk as $item) : ?>
                            <?php if ($item['nik'] != $penduduk['nik']) : ?>
                            <tr>
                                <td><input type='checkbox' name='anggota_kk[]' value="<?= $item['id'] ?>"
                                        <?= $item['checked'] ?> /></td>
                                <td><?= $item['nik'] ?></td>
                                <td><?= $item['nama'] ?></td>
                            </tr>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php endif ?>
                <button type="reset" class="btn btn-danger btn-sm">
                    Batal
                </button>
                <button type="submit" class="btn btn-primary btn-sm">
                    Simpan
                </button>
            </div>
        </form>
    </div>
@endsection
