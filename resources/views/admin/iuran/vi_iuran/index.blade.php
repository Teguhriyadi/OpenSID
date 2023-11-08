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
                                <th>RW</th>
                                <th class="text-center">RT</th>
                                <th class="text-center">Submenu</th>
                                <th class="text-center">Posisi</th>
                                <th class="text-center">Icons</th>
                                <th class="text-center">Icon</th>
                                <th class="text-center">Keterangan</th>
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
                                <td><?= $item->nama ?></td>
                                <td class="text-center"><?= $item->links ?></td>
                                <td class="text-center"><?= $item->desa ?></td>
                                <td class="text-center"><?= $item->rw ?></td>
                                <td class="text-center"><?= $item->rt ?></td>
                                <td class="text-center"><?= $item->icons ?></td>
                                <td class="text-center"><?= $item->icon ?></td>
                                <td class="text-center"><?= $item->keterangan ?></td>
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