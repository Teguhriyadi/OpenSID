@extends('admin.layouts.index')

@section('breadcrumb')
    <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Lembaga Desa
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <li class="breadcrumb-item text-muted">
                            <a href="<?= site_url('hom_sid') ?>" class="text-muted text-hover-primary">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Lembaga Desa
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

                        <div class="menu-item cursor-pointer d-flex align-items-center position-relative rotate collapsible"
                            data-bs-toggle="collapse" data-bs-target="#kt_kategori_lembaga">
                            <div class="menu-content pb-0">
                                <span class="menu-section text-muted text-uppercase fs-7 fw-bold">
                                    Kategori Lembaga
                                </span>
                            </div>
                            <span class="ms-2 rotate-180 ms-auto">
                                <i class="fa-duotone fa-chevron-down fs-7"></i>
                            </span>
                        </div>

                        <div id="kt_kategori_lembaga" data-bs-parent="#kt_aside_menu"
                            class="mt-2 accordion-collapse collapse show">
                            <?php foreach ($query as $q) : ?>
                            <div class="menu-item position-relative">
                                <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                                </div>
                                <a href="<?= $q->id ?>" class="menu-link active">
                                    <span class="menu-title">
                                        <?= $q->kelompok ?>
                                    </span>
                                    <span class="menu-badge fs-7 fw-normal text-muted"></span>
                                </a>
                            </div>
                            <?php endforeach ?>
                            <div class="menu-item mt-5">
                                <a href="<?= site_url('lembaga_master') ?>" class="btn btn-sm btn-primary w-100">
                                    Kelolah Kategori Lembaga
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column flex-lg-row-fluid gap-5 gap-xl-8">
            <!-- filter -->
            <div class="card shadow-sm card-flush border-0">
                <div class="card-body">
                    <div class="row row-gap-5">
                        <div class="col-md-6 col-12">
                            <select class="form-select form-select-sm" name="desa" data-control="select2"
                                data-placeholder="Pilih status">
                                <option></option>
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-12">
                            <select class="form-select form-select-sm" name="desa" data-control="select2"
                                data-placeholder="Pilih kategori lembaga">
                                <option></option>
                                <option value="1">Kemasyarakatan</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm card-flush border-0">
                <div class="card-header border-0 py-7">
                    <div class="card-toolbar align-self-center d-flex column-gap-2">
                        <a href="#" class="btn_add btn btn-icon btn-sm btn-primary align-self-center"
                            data-title="Tambah" data-bs-target="#tambah-data" data-bs-toggle="modal" data-bs-placement="top"
                            title="Tambah">
                            <i class="fa-solid fa-plus fs-7"></i>
                        </a>
                        <a href="#" class="btn_del btn btn-icon btn-sm btn-danger align-self-center"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data Terpilih">
                            <i class="fa-solid fa-trash fs-7"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-sm btn-primary align-self-center"
                            data-modal-target="#mdl_cetak" data-title="Cetak Data" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Cetak">
                            <i class="fa-solid fa-print fs-7"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-sm btn-primary align-self-center"
                            data-modal-target="#mdl_unduh" data-title="Unduh Data" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Unduh">
                            <i class="fa-solid fa-download fs-7"></i>
                        </a>
                        <a href="#" class="btn btn-icon btn-sm btn-primary align-self-center" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Bersihkan">
                            <i class="fa-solid fa-refresh fs-7"></i>
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
                                    <th class="min-w-150px">Kode Lembaga</th>
                                    <th class="min-w-150px">Nama Lengkap</th>
                                    <th class="min-w-150px">Ketua Lembaga</th>
                                    <th class="min-w-150px">Kategori Lembaga</th>
                                    <th class="min-w-150px text-end">Jumlah Anggota</th>
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

    <!-- Modal -->
    <div class="modal fade" id="tambah-data" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered mw-600px">
            <div class="modal-content">
                <form class="form" action="<?= $form_action ?>" method="POST">
                    <div class="modal-header position-relative justify-content-center">
                        <h2 class="m-0 p-0" id="mdl_title">
                            Tambah Lembaga
                        </h2>
                        <div class="btn btn-sm btn-icon btn-active-color-danger position-absolute"
                            style="top: 17px;right: 15px;" data-bs-dismiss="modal">
                            <i class="fa-duotone fa-xmark fs-3"></i>
                        </div>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="row mb-5">
                            <div class="fv-row col-md-6 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Nama Lembaga
                                </label>
                                <input type="text" name="nama" class="form-control mb-2"
                                    placeholder="Nama lembaga">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row col-md-6 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Kode Lembaga
                                </label>
                                <input type="text" name="kode" class="form-control mb-2"
                                    placeholder="Kode lembaga">
                                <div class="text-gray-600 fw-semibold fs-7">
                                    Pastikan kode belum pernah dipakai di data lembaga / di
                                    data kelompok.
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="fv-row col-md-6 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Kategori Lembaga
                                </label>
                                <select class="form-select mb-2" data-dropdown-parent="#tambah-data"
                                    data-control="select2" data-placeholder="Kategori Lembaga" name="id_master"
                                    id="id_master">
                                    <option value=""></option>
                                    @foreach ($query as $q)
                                        <option value="{{ $q->id }}">
                                            {{ $q->kelompok }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row col-md-6 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Ketua Lembaga
                                </label>
                                <select class="form-select mb-2" data-dropdown-parent="#tambah-data"
                                    data-control="select2" data-placeholder="Ketua Lembaga" name="id_ketua"
                                    id="id_ketua">
                                    <option value=""></option>
                                    @foreach ($list_penduduk as $list)
                                        <option value="<?= $list["id"] ?>">
                                            NIK : <?= $list["nik"] ?> - <?= $list["nama"] ?>
                                        </option>
                                    @endforeach
                                </select>
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>  
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Deskripsi Lembaga
                            </label>
                            <textarea name="keterangan" id="keterangan" rows="3" placeholder="Deskripsi lembaga"
                                class="form-control"></textarea>
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
        $(document).ready(function() {
            $("#id_master").select2();
            $("#id_ketua").select2();
        });
        $("#example").DataTable({
            "scrollX": true,
            "scrollCollapse": true,
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= site_url('lembaga/dataTable') ?>",
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
                        <a href="<?= site_url('lembaga/delete/') ?>` + data.id + `" class="btn_del btn btn-icon btn-sm btn-danger align-self-center" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Data Terpilih">
                            <i class="fa-solid fa-trash fs-7"></i>
                        </a>
                    `
                }
            },
            {
                "data": "kode"
            },
            {
                "data": null
            },
            {
                "data": null
            },
            {
                "data": "tipe"
            },
            {
                "data": null
            }],
        });
    </script>
@endsection
