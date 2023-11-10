@extends('admin.layouts.index')

@section('title')
<h1>
    Data History Iuran
</h1>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="<?= site_url('vi_iuran') ?>">Data Iuran</a>
</li>
<li class="active">History Iuran</li>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="bg-gray disabled color-palette">
                            <tr>
                                <th class="text-center">No.</th>

                                <th class="text-center">User</th>
                                <th>Deskripsi</th>
                                <th class="text-center">Tagihan</th>
                                <th class="text-center">Bulan</th>
                                <th class="text-center">Tahun</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $nomer = 0 ?>
                            <?php foreach ($query as $data) : ?>
                            <tr>
                                <td class="text-center"><?= ++$nomer ?>.</td>
                                <td class="text-center"><?= $data->execs ?></td>
                                <td><?= $data->deskripsi ?></td>
                                <td class="text-center">Rp. <?= number_format($data->tagihan) ?></td>
                                <td class="text-center"><?= $data->bulan ?></td>
                                <td class="text-center"><?= $data->tahun ?></td>
                                <td class="text-center" style="padding-top: 20px; padding-bottom: 10px;">
                                    <?php if ($data->aksi == "TAMBAH") : ?>
                                        <span style="background-color: green; padding: 10px; color: white; text-transform: uppercase" class="badge badge-success">
                                            Tambah
                                        </span>
                                    <?php elseif ($data->aksi == "UPDATE") : ?>
                                        <span style="background-color: yellow; padding: 10px; color: white; text-transform: uppercase" class="badge badge-success">
                                            Tambah
                                        </span>
                                    <?php elseif ($data->aksi == "DELETE") : ?>
                                        <span style="background-color: red; padding: 10px; color: white; text-transform: uppercase" class="badge badge-success">
                                            Delete
                                        </span>
                                    <?php else : ?>
                                    <?php endif ?>
                                </td>
                            </tr>
                            <?php endforeach ?>
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