@extends('admin.layouts.index')

@section('title')
    Administrasi Umum
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('custom/css/style.min.css') }}">
@endsection

@section('breadcrumb')
    <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Wilayah Administratif
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <li class="breadcrumb-item text-muted">
                            <a href="./index.html" class="text-muted text-hover-primary">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted text-hover-primary">
                                Info Desa
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Wilayah Administratif
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
    <div class="d-flex flex-column flex-lg-row gap-5 gap-xl-8">
        <div class="d-flex flex-column flex-lg-row-auto w-lg-250px w-xl-350px">
            <div class="card shadow-sm card-flush border-0" data-kt-sticky="true" data-kt-sticky-name="docs-sticky-summary"
                data-kt-sticky-left="auto" data-kt-sticky-width="{default:'auto','md': '350px'}" data-kt-sticky-top="100px"
                data-kt-sticky-animation="true" data-kt-sticky-zindex="95">
                <div class="card-body">
                    <div class="menu menu-rounded menu-column menu-active-bg menu-hover-bg menu-title-gray-700 fs-5 fw-semibold"
                        id="#kt_aside_menu" data-kt-menu="true">
                        <div class="menu-item">
                            <div class="menu-content pb-2">
                                <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Menu</span>
                            </div>
                        </div>
                        @include('admin.bumindes.umum.main.side')
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-lg-row-fluid gap-5 gap-xl-8">
            <div class="card shadow-sm card-flush border-0">
                <div class="card-body">
                    <div class="row row-gap-5">
                        <div class="col-md-12 col-12">
                            <select class="form-select form-select-sm" name="desa" data-control="select2"
                                data-placeholder="Pilih status">
                                <option></option>
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm card-flush border-0">
                <div class="card-header border-0 py-7">
                    <div class="card-toolbar align-self-center d-flex column-gap-2">
                        <a href="<?= site_url('pengurus/form') ?>" class="btn btn-icon btn-sm btn-primary align-self-center"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah">
                            <i class="fa-solid fa-plus fs-7"></i>
                        </a>
                        <a href="#" class="btn_del btn btn-icon btn-sm btn-danger align-self-center"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data Terpilih">
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
                                    <th class="min-w-125px">Foto</th>
                                    <th class="min-w-300px">Nama, NIP/NIPD, NIK, Tag ID Card
                                    </th>
                                    <th class="min-w-125px">Tempat,<br>Tanggal Lahir</th>
                                    <th class="min-w-125px">Jenis Kelamin</th>
                                    <th class="min-w-125px">Agama</th>
                                    <th class="min-w-125px">Pangkat/Golongan</th>
                                    <th class="min-w-125px">Jabatan</th>
                                    <th class="min-w-125px">Pendidikan Terakhir</th>
                                    <th class="min-w-125px">Nomor Keputusan Pengangkatan
                                    </th>
                                    <th class="min-w-125px">Tanggal Keputusan Pengangkatan
                                    </th>
                                    <th class="min-w-125px">Nomor Keputusan Pemberhentian
                                    </th>
                                    <th class="min-w-125px">Tanggal Keputusan Pemberhentian
                                    </th>
                                    <th class="min-w-125px">Masa/Periode Jabatan</th>
                                </tr>
                            </thead>

                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    "url": "<?= site_url('buku_umum/dokumen_sekretariat/dataTable') ?>",
                    "type": "GET",
                    "dataSrc": function(json) {
                        return json.query
                    }
                },
                "columnDefs": [{
                        "data": null,
                        "render": function(data, type, row, meta) {
                            return '<div style="text-align: center;">' + (meta.row + meta.settings
                                ._iDisplayStart + 1) + '.</div>';
                        }
                    },
                    {
                        "data": null
                    },
                    {
                        "data": null
                    }
                ]
            });
        });
    </script>
@endsection
