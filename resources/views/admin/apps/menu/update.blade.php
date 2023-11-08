@include('admin.layouts.components.asset_datatables')

@extends('admin.layouts.index')

@section('title')
<h1>
    Daftar Apps Menu
</h1>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ route('pengurus') }}"> Pengurus</a>
</li>
<li class="active">
    Daftar Menu Apps
</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box box-info">
            <div class="box-header with-border">
                <div class="btn-group btn-group-vertical">
                    <a href="<?= site_url('apps') ?>" class="btn btn-social btn-flat btn-danger btn-sm">
                        <i class='fa fa-sign-out'></i> Kembali Ke Halaman Sebelumnya
                    </a>
                </div>
                <form action="<?= site_url('apps/update/'. $query->id) ?>" method="POST">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="agenid"> Agen </label>
                                    <select name="agenid" class="form-control" id="agenid">
                                        <option value="">- Pilih -</option>
                                        <option value="1" selected>Mohammad Ilham Teguhriyadi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="produk"> Produk </label>
                                    <select name="produk" class="form-control" id="produk">
                                        <option value="">- Pilih -</option>
                                        <option value="1" selected>Mohammad Ilham Teguhriyadi</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nama"> Nama </label>
                                    <input type="text" class="form-control" name="nama" id="nama"
                                    placeholder="Masukkan Nama" value="<?= $query->nama ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="links"> Links </label>
                                    <input type="text" class="form-control" name="links" id="links"
                                    placeholder="Masukkan Links" value="<?= $query->links ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="keterangan"> Keterangan </label>
                            <textarea name="keterangan" class="form-control" id="keterangan" rows="5" placeholder="Masukkan Keterangan"><?= $query->keterangan ?></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="icons"> Icons </label>
                                    <input type="text" class="form-control" name="icons" id="icons"
                                    placeholder="Masukkan Icons" value="<?= $query->icons ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="icon"> Icon </label>
                                    <input type="text" class="form-control" name="icon" id="icon"
                                    placeholder="Masukkan Links" value="<?= $query->icon ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="status"> Status </label>
                                    <input type="text" class="form-control" name="status" id="status"
                                    placeholder="Masukkan Status" value="<?= $query->status ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="group"> Group </label>
                                    <input type="text" class="form-control" name="group" id="group" value="<?= $query->group ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="submenu"> Submenu </label>
                                    <input type="text" class="form-control" name="submenu" id="submenu" value="<?= $query->submenu ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="posisi"> Posisi </label>
                                    <input type="text" class="form-control" name="posisi" id="posisi" value="<?= $query->posisi ?>">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="urut"> Urut </label>
                                    <input type="text" class="form-control" name="urut" placeholder="0" value="<?= $query->urut ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kategori"> Kategori </label>
                                    <select name="kategori" class="form-control" id="kategori">
                                        <option value="">- Pilih -</option>
                                        <option value="1" selected>Minuman</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="page"> Page </label>
                                    <select name="page" class="form-control" id="page">
                                        <option value="">- Pilih -</option>
                                        <option value="1">Halaman Dashboard 1</option>
                                    </select>
                                </div>
                            </div>
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
