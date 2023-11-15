@extends('admin.layouts.index')

@section('breadcrumb')
    <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Kategori Lembaga
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <li class="breadcrumb-item text-muted">
                            <a href="<?= site_url('hom_sid') ?>" class="text-muted text-hover-primary">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="<?= site_url('lembaga') ?>" class="text-muted text-hover-primary">
                                Daftar Lembaga
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Kategori Lembaga
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
                <a href="#" class="btn_add btn btn-icon btn-sm btn-primary align-self-center" data-title="Tambah"
                    data-bs-target="#tambah-data" data-bs-toggle="modal" data-bs-placement="top" title="Tambah">
                    <i class="fa-solid fa-plus fs-7"></i>
                </a>
                <a href="#" class="btn_del btn btn-icon btn-sm btn-danger align-self-center" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Hapus Data Terpilih">
                    <i class="fa-solid fa-trash fs-7"></i>
                </a>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="table-responsive">
                <table id="example" class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted bg-light text-uppercase align-middle">
                            <th class="min-w-25px text-center">
                                <div class="form-check form-check-sm form-check-custom">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </th>
                            <th class="min-w-25px text-center">No</th>
                            <th class="min-w-25px text-center">Aksi</th>
                            <th class="min-w-150px">Kategori Lembaga</th>
                            <th class="min-w-150px">Deskripsi Lembaga</th>
                            <th class="min-w-150px text-end">Jumlah Lembaga</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambah-data" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered mw-600px">
            <div class="modal-content">
                <form class="form" action="<?= $form_action ?>" method="POST">
                    <div class="modal-header position-relative justify-content-center">
                        <h2 class="m-0 p-0" id="mdl_title">
                            Tambah Kategori Lembaga
                        </h2>
                        <div class="btn btn-sm btn-icon btn-active-color-danger position-absolute"
                            style="top: 17px;right: 15px;" data-bs-dismiss="modal">
                            <i class="fa-duotone fa-xmark fs-3"></i>
                        </div>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Nama Kategori Lembaga
                            </label>
                            <input type="text" name="kelompok" class="form-control mb-2"
                                placeholder="Nama kategori lembaga">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Deskripsi kategori lembaga
                            </label>
                            <textarea name="deskripsi" id="deskripsi" rows="3" placeholder="Deskripsi kategori lembaga" class="form-control"></textarea>
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-5">
                            <button type="reset" data-bs-dismiss="modal" class="btn btn-sm btn-light">
                                Batal
                            </button>

                            <button type="submit" class="btn btn-sm btn-primary" data-kt-indicator="off">
                                <span class="indicator-label">
                                    Simpan
                                </span>
                                <span class="indicator-progress">
                                    Proses...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END -->
@endsection

@section('javascript')
    <script src="{{ asset('custom/javascript/customDataTables.min.js') }}"></script>
    <script type="text/javascript">
        $("#example").DataTable({
            "scrollX": true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= site_url('lembaga_master/dataTable') ?>",
                "type": "GET",
                "dataSrc": function(json) {
                    return json.query;
                }
            },
            "columnDefs": [{
                "orderable": false
            }],
            "columns": [{
                "data": null
            },
            {
                "data": null,
                render: function(data, type, row, meta) {
                    return '<div style="text-align: center;">'+ (meta.row + meta.settings._iDisplayStart + 1) +'.</div>';
                }
            },
            {
                "data": null,
                render: function(data, type, row, meta) {
                    return `
                        <div style="text-align: center;">
                             
                            <form action="<?= site_url('lembaga_master/delete/') ?>` + data.id + `" method="POST" style="display: inline;">
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i> Hapus    
                                </button>    
                            </form>   
                        </div>
                    `
                }
            },
            {
                "data": "kelompok"
            },
            {
                "data": "deskripsi"
            },
            {
                "data": null
            }],
        });
    </script>
@endsection
