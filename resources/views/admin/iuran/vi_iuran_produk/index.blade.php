@extends('admin.layouts.index')

@section('title')
<h1>
    Data Iuran Produk
</h1>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="{{ route('pengurus') }}"> Iuran Produk </a>
</li>
<li class="active">Data Iuran</li>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <div class="btn-group btn-group-vertical">
                    <a href="<?= site_url('vi_iuran_produk/form') ?>" class="btn btn-social btn-flat btn-success btn-sm">
                        <i class='fa fa-plus'></i> Tambah Menu
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="bg-gray disabled color-palette">
                            <tr>
                                <th>No.</th>
                                <th class="text-center">Aksi</th>
                                <th style="text-align: left">Desa</th>
                                <th>Nama Produk</th>
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
                                    <a href="<?= site_url('vi_iuran_produk/edit/'.$item->id) ?>" class="btn btn-social btn-flat btn-warning btn-sm">
                                        <i class='fa fa-edit'></i> Edit
                                    </a>
                                    <a href="<?= site_url('vi_iuran_produk/destroy/'.$item->id) ?>" class="btn btn-social btn-flat btn-danger btn-sm">
                                        <i class='fa fa-trash'></i> Hapus
                                    </a>
                                </td>
                                <td><?= $item->nama ?></td>
                                <td><?= $item->nama_produk ?></td>
                            </tr>   
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection