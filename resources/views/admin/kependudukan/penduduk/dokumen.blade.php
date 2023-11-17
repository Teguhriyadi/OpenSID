@extends('admin.layouts.index')

@section('css')
    <link rel="stylesheet" href="{{ asset('custom/css/style.min.css') }}">
@endsection

@section('breadcrumb')
    <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Data Penduduk
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
                                Data Penduduk
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

@section('content')
    <div class="card shadow-sm card-flush border-0">
        <div class="card-header border-0 py-7">
            <div class="card-toolbar align-self-center d-flex column-gap-2">
                <div>
                    <a href="<?= site_url("penduduk/dokumen_form/{$penduduk['id']}")?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Dokumen"
                        class="btn btn-icon btn-sm btn-primary align-self-center menu-dropdown"
                        data-kt-menu-placement="bottom-start">
                        <i class="fa-solid fa-plus fs-7"></i>
                    </a>
                    <a href="<?= preg_match('/bumindes_arsip/i', $_SERVER['HTTP_REFERER']) ? site_url('bumindes_arsip/clear') : site_url("penduduk/detail/1/0/{$penduduk['id']}")
                        ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Kembali"
                        class="btn btn-icon btn-sm btn-danger align-self-center menu-dropdown"
                        data-kt-menu-placement="bottom-start">
                        <i class="fa-solid fa-sign-out fs-7"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" style="width: 100%">
                <tbody>
                    <tr>
                        <td>Nama Penduduk</td>
                        <td> : <?= $penduduk['nama'] ?> </td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td> : <?= $penduduk['nik'] ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>
                            : <?= $penduduk['alamat'] ?>
                            RT/RW : <?= $penduduk['rt'] ?>/<?= $penduduk['rw'] ?> Dusun : <?= $penduduk['dusun'] ?>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table id="example" class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4"
                style="width: 100%">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Aksi</th>
                        <th>Nama Dokumen</th>
                        <th class="text-center">Jenis Dokumen</th>
                        <th class="text-center">Tanggal Upload</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('javascript')
<script src="{{ asset('custom/javascript/bootstrap.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        let id_pend = {{ $penduduk["id"] }}
        
        $("#example").DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= site_url('penduduk/getDataTableDokumen/') ?>" + id_pend,
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
                    return '<div style="text-align: center">' + (meta.row + meta.settings._iDisplayStart + 1) + '.</div>'
                }
            },
            {
                "data": null
            },
            {
                "data": "nama"
            },
            {
                "data": null
            },
            {
                "data": "tgl_upload",
                render: function(data, type, row, meta) {
                    
                }
            }]
        });
    })
</script>
@endsection