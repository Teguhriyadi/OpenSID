@extends('admin.layouts.index')

@section('title')
<h1>
    Data Iuran Produk
</h1>
@endsection

@section('breadcrumb')
<li class="active">Data Iuran</li>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('custom/css/style.min.css') }}">
@endpush

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <div class="btn-group btn-group-vertical">
                    <a href="<?= site_url('vi_iuran_produk/form') ?>" class="btn btn-social btn-flat btn-success btn-sm">
                        <i class='fa fa-plus'></i> Tambah Iuran Produk
                    </a>
                </div>
                <div class="btn-group btn-group-vertical">
                    <button type="button" class="btn btn-success btn-social btn-flat btn-sm" data-toggle="modal" data-target="#modal-default">
                        <i class="fa fa-download"></i> Import Excel
                    </button>
                </div>
                <br><br>
                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-striped table-hover">
                        <thead class="bg-gray disabled color-palette">
                            <tr>
                                <th class="text-center" style="width: 50px;">No.</th>
                                <th class="text-center" style="width: 200px;">Aksi</th>
                                <th style="text-align: left">Desa</th>
                                <th>Nama Produk</th>
                                <th>Adm Produk</th>
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
                                <td><?= $item->dusun ?></td>
                                <td><?= $item->nama_produk ?></td>
                                <td><?= $item->adm_produk ?></td>
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
                    <i class="fa fa-download"></i> Upload Data Iuran Produk
                </h4>
            </div>
            <form action="<?= site_url('vi_iuran_produk/proses_excel') ?>" method="POST" enctype="multipart/form-data">
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

@push('scripts')

<script src="{{ asset('custom/javascript/dataTables.min.js') }}"></script>
<script src="{{ asset('custom/javascript/bootstrap.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#example").DataTable();
    })
</script>

@endpush