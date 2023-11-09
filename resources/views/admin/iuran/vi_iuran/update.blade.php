@include('admin.layouts.components.asset_datatables')

@extends('admin.layouts.index')

@section('title')
<h1>
    Edit Data Iuran
</h1>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="<?= site_url('vi_iuran') ?>"> Data Iuran </a>
</li>
<li class="active">
    Edit Data Iuran
</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box box-info">
            <div class="box-header with-border">
                <div class="btn-group btn-group-vertical">
                    <a href="<?= site_url('vi_iuran') ?>" class="btn btn-social btn-flat btn-danger btn-sm">
                        <i class='fa fa-sign-out'></i> Kembali Ke Halaman Sebelumnya
                    </a>
                </div>
                <form action="<?= site_url('vi_iuran/update/'.$query->id) ?>" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="tanggal"> Tanggal </label>
                            <input type="datetime-local" class="form-control" name="tanggal" id="tanggal" value="<?= $query->tanggal ?>">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="agenid"> Agen </label>
                                    <select name="agenid" class="form-control" id="agenid">
                                        <option value="">- Pilih -</option>
                                        <option value="1" selected>Mohammad Ilham Teguhriyadi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nik"> NIK </label>
                                    <select name="nik" class="form-control" id="nik">
                                        <option value="">- Pilih -</option>
                                        <option value="1" selected>239029302293023</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="dusun"> Dusun </label>
                                    <select name="dusun" class="form-control" id="dusun">
                                        <option value="">- Pilih -</option>
                                        <option value="1" selected>Sliyeg</option>
                                        <option value="2">Bandung</option>
                                        <option value="3">Jakarta</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="rw"> RW </label>
                                    <select name="rw" class="form-control" id="rw">
                                        <option value="">- Pilih -</option>
                                        <option value="1">001</option>
                                        <option value="2" selected>002</option>
                                        <option value="3">003</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="rt"> RT </label>
                                    <select name="rt" class="form-control" id="rt">
                                        <option value="">- Pilih -</option>
                                        <option value="1">001</option>
                                        <option value="2">002</option>
                                        <option value="3" selected>003</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="p_bulan"> Periode Bulan </label>
                                    <select name="p_bulan" class="form-control" id="p_bulan">
                                        <option value="">- Pilih -</option>
                                        <option value="1">Januari</option>
                                        <option value="2" selected>Februari</option>
                                        <option value="3">Maret</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="p_tahun"> Periode Tahun </label>
                                    <select name="p_tahun" class="form-control" id="p_tahun">
                                        <option value="">- Pilih -</option>
                                        <option value="2023" selected>2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="produk"> Produk </label>
                            <input type="text" class="form-control" name="produk" id="produk" placeholder="Masukkan Produk" value="<?= $query->produk ?>">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status"> Status </label>
                                    <select name="status" class="form-control" id="status">
                                        <option value="1" selected>Aktif</option>
                                        <option value="0">Tidak Aktif</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tagihan"> Tagihan </label>
                                    <input type="number" class="form-control" name="tagihan" id="tagihan" placeholder="0" value="<?= $query->tagihan ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="execs"> Execs </label>
                                    <input type="text" class="form-control" name="execs" id="execs" placeholder="Masukkan Execs" value="<?= $query->execs ?>">
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
