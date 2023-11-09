@include('admin.layouts.components.asset_datatables')

@extends('admin.layouts.index')

@section('title')
<h1>
    Tambah Iuran Produk
</h1>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="<?= site_url('vi_iuran_produk') ?>"> Data Iuran Produk</a>
</li>
<li class="active">
    Tambah Iuran Produk
</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box box-info">
            <div class="box-header with-border">
                <div class="btn-group btn-group-vertical">
                    <a href="<?= site_url('vi_iuran_produk') ?>" class="btn btn-social btn-flat btn-danger btn-sm">
                        <i class='fa fa-sign-out'></i> Kembali Ke Halaman Sebelumnya
                    </a>
                </div>
                <form action="<?= site_url('vi_iuran_produk/insert') ?>" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="desaid"> Desa </label>
                            <select name="desaid" class="form-control select2 input-sm" id="desaid">
                                <option value="">- Pilih -</option>
                                @foreach ($desa as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->dusun }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_produk"> Nama Produk </label>
                            <input type="text" class="form-control input-sm" name="nama_produk" id="nama_produk" placeholder="Masukkan Nama Produk">
                        </div>
                        <div class="form-group">
                            <label for="adm_produk"> Adm Produk </label>
                            <input type="number" class="form-control input-sm" name="adm_produk" id="adm_produk" placeholder="Masukkan Adm Produk">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm">
                            <i class='fa fa-times'></i> Batal
                        </button>
                        <button type="submit" class="btn btn-social btn-flat btn-success btn-sm">
                            <i class='fa fa-save'></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
