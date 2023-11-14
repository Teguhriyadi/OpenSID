@extends('admin.layouts.index')

@section('title')
<h1>
    Data Iuran Produk
</h1>
@endsection

@section('breadcrumb')
    <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Iuran Produk
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
                                Iuran Produk
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

@section('css')
    <link rel="stylesheet" href="{{ asset('custom/css/style.min.css') }}">
@endsection

@section('content')

<div class="card shadow-sm card-flush border-0">
    <div class="card-header border-0 py-7">
        <div class="card-toolbar align-self-center d-flex column-gap-2">
            <a href="<?= site_url('vi_iuran_produk/form') ?>" class="btn_add btn btn-icon btn-sm btn-primary align-self-center"
                data-title="Tambah Iuran Produk" data-modal-target="#mdl_iuran_produk" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Tambah Iuran Produk">
                <i class="fa-solid fa-plus fs-7"></i>
            </a>
            <a href="#" class="btn btn-icon btn-sm btn-primary align-self-center" data-bs-toggle="tooltip"
                data-bs-placement="top" title="Unduh">
                <i class="fa-solid fa-download fs-7"></i>
            </a>
        </div>
    </div>

    <div class="card-body pt-0">
        <div class="table-responsive">
            <table id="example" class="table table-hover table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                <thead class="bg-gray disabled color-palette">
                    <tr>
                        <th class="text-center" style="width: 50px;">No.</th>
                        <th class="text-center" style="width: 200px;">Aksi</th>
                        <th>Nama Produk</th>
                        <th>Adm Produk</th>
                    </tr>
                </thead>
                <tbody>
                    
                </tbody>
            </table>
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

@section('javascript')

<script src="{{ asset('custom/javascript/bootstrap.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#example").DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= site_url('vi_iuran_produk/dataTable') ?>",
                "type": "GET",
                "dataSrc": function(json) {
                    return json.query;
                }
            },
            "columnDefs": [{
                "orderable": false
            }],
            "columns": [{
                "data": null,
                render: function(data, type, row, meta) {
                    return '<div style="text-align: center;">'+ (meta.row + meta.settings._iDisplayStart + 1) +'.</div>';
                }
            },
            {
                "data": null,
                render: function(data, type, row, meta) {
                    return `
                        <div style='text-align: center;'>
                            <a href='<?= site_url("vi_iuran_produk/edit/") ?>`+ data.id +`' class='btn btn-warning btn-sm'>
                                <i class='fa fa-edit'></i> Edit
                            </a>
                            <a href='<?= site_url("vi_iuran_produk/destroy/") ?>`+ data.id +`' class='btn btn-danger btn-sm'>
                                <i class="fa fa-trash"></i> Hapus 
                            </a>
                        </div>`;
                }
            },
            {
                "data": "nama_produk"
            },
            {
                "data": "adm_produk"
            }]
        });
    })
</script>

@endsection