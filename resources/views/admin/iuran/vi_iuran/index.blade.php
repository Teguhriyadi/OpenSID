@extends('admin.layouts.index')

@section('title')
<h1>
    Data Iuran
</h1>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ route('pengurus') }}"> Iuran </a>
</li>
<li class="active">Data Iuran</li>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <div class="btn-group btn-group-vertical">
                    <a href="<?= site_url('vi_iuran/form') ?>" class="btn btn-social btn-flat btn-success btn-sm">
                        <i class='fa fa-plus'></i> Tambah Iuran
                    </a>
                </div>
                <div class="btn-group btn-group-vertical">
                    <button type="button" class="btn btn-success btn-social btn-flat btn-sm" data-toggle="modal" data-target="#modal-default">
                        <i class="fa fa-download"></i> Import Excel
                    </button>
                </div>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="bg-gray disabled color-palette">
                            <tr>
                                <th>No.</th>
                                <th class="text-center">Aksi</th>
                                <th class="text-center">NIK</th>
                                <th>Nama</th>
                                <th class="text-center">Desa</th>
                                <th class="text-center">Tagihan</th>
                                <th class="text-center">Bulan</th>
                                <th class="text-center">Tahun</th>
                                <th class="text-center">Produk</th>
                                <th class="text-center">Tanggal Bayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $nomer = 1;
                            @endphp
                            @foreach ($query as $item)
                            <tr>
                                <td class="text-center"><?= $nomer++ ?>.</td>
                                <td class="text-center">
                                    <a href="<?= site_url('vi_iuran/edit/'.$item->id) ?>" class="btn btn-social btn-flat btn-warning btn-sm">
                                        <i class='fa fa-edit'></i> Edit
                                    </a>
                                    <a href="<?= site_url('vi_iuran/destroy/'.$item->id) ?>" class="btn btn-social btn-flat btn-danger btn-sm">
                                        <i class='fa fa-trash'></i> Hapus
                                    </a>
                                </td>
                                <td class="text-center"><?= $item->nik ?></td>
                                <td style="text-align: left"><?= $item->nama ?></td>
                                <td class="text-center"><?= $item->dusun ?></td>
                                <td class="text-center">Rp. <?= number_format($item->tagihan) ?></td>
                                <td class="text-center"><?= $item->p_bulan ?></td>
                                <td class="text-center"><?= $item->p_tahun ?></td>
                                <td class="text-center"><?= $item->namaproduk ?></td>
                                <td class="text-center"><?= $item->tgl_bayar ?></td>
                            </tr>   
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">
                    <i class="fa fa-download"></i> Upload Data Iuran
                </h4>
            </div>
            <form action="<?= site_url('vi_iuran/upload_excel') ?>" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="upload"> Upload Excel </label>
                        <input type="file" class="form-control" name="upload" id="upload">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger pull-left btn-social btn-flat btn-sm" data-dismiss="modal">
                        <i class="fa fa-times"></i> Batal
                    </button>
                    <button type="submit" class="btn btn-primary btn-social btn-flat btn-sm">
                        <i class="fa fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End -->

@endsection