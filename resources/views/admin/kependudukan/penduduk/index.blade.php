@extends('admin.layouts.index')

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

@section('css')
    <link rel="stylesheet" href="{{ asset('custom/css/style.min.css') }}">
@endsection

@section('content')
    <div class="d-flex flex-column flex-lg-row-fluid gap-5 gap-xl-8">
        <!-- filter -->
        <div class="card shadow-sm card-flush border-0">
            <div class="card-body">
                <div class="row row-gap-5">
                    <div class="col-md-6 col-lg-3 col-12">
                        <select class="form-select form-select-sm" name="desa" data-control="select2"
                            data-placeholder="Pilih status penduduk">
                            <option></option>
                            <option value="1">Tetap</option>
                            <option value="0">Tidak Tetap</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-lg-3 col-12">
                        <select class="form-select form-select-sm" name="desa" data-hide-search="false"
                            data-control="select2" data-placeholder="Pilih status dasar">
                            <option></option>
                            <option value="1">Hidup</option>
                            <option value="2">Mati</option>
                            <option value="3">Pindah</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-lg-3 col-12">
                        <select class="form-select form-select-sm" name="desa" data-control="select2"
                            data-placeholder="Pilih jenis kelamin">
                            <option></option>
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-6 col-lg-3 col-12">
                        <select class="form-select form-select-sm" name="desa" data-hide-search="false"
                            data-control="select2" data-placeholder="Pilih dusun">
                            <option></option>
                            <option value="1">Mangsit</option>
                            <option value="2">Senggigi</option>
                            <option value="3">Loco</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="card shadow-sm card-flush border-0">
            <div class="card-header border-0 py-7">
                <div class="card-toolbar align-self-center d-flex column-gap-2">
                    <div>
                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Penduduk"
                            class="btn btn-icon btn-sm btn-primary align-self-center menu-dropdown"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                            <i class="fa-solid fa-plus fs-7"></i>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-auto py-4 min-w-125px"
                            data-kt-menu="true" data-popper-placement="bottom-start">
                            <div class="menu-item px-3">
                                <a href="./penduduk_lahir_add.html" class="menu-link px-3">
                                    Penduduk Lahir
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="./penduduk_masuk_add.html" class="menu-link px-3">
                                    Penduduk Masuk
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn_del btn btn-icon btn-sm btn-danger align-self-center"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data Terpilih">
                        <i class="fa-solid fa-trash fs-7"></i>
                    </a>
                    <div>
                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Pilih Aksi Lainnya"
                            class="btn btn-icon btn-sm btn-primary align-self-center menu-dropdown"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                            <i class="fa-solid fa-ellipsis fs-7"></i>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-auto py-4 min-w-125px"
                            data-kt-menu="true" data-popper-placement="bottom-start">
                            <div class="menu-item px-3">
                                <a href="#" data-modal-target="#mdl_cetak" data-title="Cetak Data"
                                    class="menu-link px-3">
                                    Cetak
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" data-modal-target="#mdl_unduh" data-title="Unduh Data"
                                    class="menu-link px-3">
                                    Unduh
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" data-modal-target="#mdl_filter_spesifik"
                                    data-title="Pencarian Spesifik" class="menu-link px-3">
                                    Pencarian Spesifik
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" data-modal-target="#mdl_filter_program_bantuan"
                                    data-title="Pencarian Program Bantuan" class="menu-link px-3">
                                    Pencarian Program Bantuan
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" data-modal-target="#mdl_filter_kumpulan_nik"
                                    data-title="Pilih Kumpulan NIK" class="menu-link px-3">
                                    Pilih Kumpulan NIK
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    NIK Sementara
                                </a>
                            </div>
                            <div class="menu-item px-3">
                                <a href="./log_penduduk.html" class="menu-link px-3">
                                    Log Penduduk
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Import/Export"
                            class="btn btn-icon btn-sm btn-primary align-self-center menu-dropdown"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                            <i class="fa-solid fa-download fs-7"></i>
                        </a>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-auto py-4 min-w-125px"
                            data-kt-menu="true" data-popper-placement="bottom-start">
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    Export Penduduk
                                </a>
                                <a href="<?= site_url('penduduk/impor') ?>" class="menu-link px-3">
                                    Import Penduduk
                                </a>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-icon btn-sm btn-primary align-self-center" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Bersihkan">
                        <i class="fa-solid fa-refresh fs-7"></i>
                    </a>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table id="example" class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4" style="width: 100%">
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
                                <th class="min-w-150px">NIK</th>
                                <th class="min-w-150px">Tag ID Card</th>
                                <th class="min-w-150px">Nama</th>
                                <th class="min-w-150px">No KK</th>
                                <th class="min-w-150px">Nama Ayah</th>
                                <th class="min-w-150px">Nama Ibu</th>
                                <th class="min-w-150px">No Rumah Tangga</th>
                                <th class="min-w-150px">Alamat</th>
                                <th class="min-w-150px">Dusun</th>
                                <th class="min-w-150px">RW</th>
                                <th class="min-w-150px">RT</th>
                                <th class="min-w-150px">Pendidikan Dalam KK</th>
                                <th class="min-w-150px">Umur</th>
                                <th class="min-w-150px">Pekerjaan</th>
                                <th class="min-w-150px">Kawin</th>
                                <th class="min-w-150px">Tanggal Peristiwa</th>
                                <th class="min-w-150px">Tanggal Pendaftaran</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("javascript")

<script src="{{ asset('custom/javascript/bootstrap.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#example").DataTable({
            "scrollX": true,
            "scrollCollapse": true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= site_url('penduduk/dataTable') ?>",
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
                "data": null
            },
            {
                "data": null
            },
            {
                "data": 'nik'
            },
            {
                "data": null
            },
            {
                "data": 'nama'
            },
            {
                "data": null
            },
            {
                "data": 'nama_ayah'
            },
            {
                "data": 'nama_ibu'
            },
            {
                "data": null
            },
            {
                "data": null
            },
            {
                "data": null
            },
            {
                "data": null
            },
            {
                "data": null
            },
            {
                "data": null
            },
            {
                "data": null
            },
            {
                "data": null
            },
            {
                "data": null
            },
            {
                "data": null
            },
            {
                "data": null
            }],
        })
    });
</script>

@endsection