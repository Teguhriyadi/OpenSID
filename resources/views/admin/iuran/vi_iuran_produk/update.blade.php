@extends('admin.layouts.index')

@section('title')
<h1>
    Tambah Iuran Produk
</h1>
@endsection

@section('breadcrumb')
    <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Edit Iuran Produk
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
                            <a href="<?= site_url('vi_iuran_produk') ?>" class="text-muted text-hover-primary">
                                Iuran Produk
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted active">
                            Edit Iuran Produk
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
            <a href="<?= site_url('vi_iuran_produk') ?>" class="btn_add btn btn-icon btn-sm btn-primary align-self-center"
                data-title="Kembali" data-modal-target="#vi_iuran_produk" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Kembali">
                <i class="fa-solid fa-sign-out-alt fs-7"></i>
            </a>
        </div>
    </div>

    <form action="<?= site_url('vi_iuran_produk/update/'.$query->id) ?>" method="POST" id="form-tambah">
        <div class="card-body pt-0">
            <div class="form-group mb-3">
                <label for="nama_produk"> Nama Produk </label>
                <input type="text" class="form-control input-sm" name="nama_produk" id="nama_produk" placeholder="Masukkan Nama Produk" value="<?= $query->nama_produk ?>">
            </div>
        </div>
        <div class="card-footer">
            <button type="reset" class="btn btn-danger btn-sm">
                <i class='fa fa-times'></i> Batal
            </button>
            <button type="submit" class="btn btn-success btn-sm">
                <i class='fa fa-save'></i> Simpan
            </button>
        </div>
    </form>
</div>

@endsection