@extends('admin.layouts.index')

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
    <div class="card shadow-sm card-flush border-0">
        <div class="card-header border-0 py-7">
            <div class="card-toolbar align-self-center d-flex column-gap-2">
                <a href="#" class="btn_add btn btn-icon btn-sm btn-primary align-self-center"
                    data-title="Tambah Dusun" data-bs-target="#tambah-data" data-bs-toggle="modal"
                    data-bs-placement="top" title="Tambah Dusun">
                    <i class="fa-solid fa-plus fs-7"></i>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-primary align-self-center" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Cetak">
                    <i class="fa-solid fa-print fs-7"></i>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-primary align-self-center" data-bs-toggle="tooltip"
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
                <table id="example" class="table table-hover table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted bg-light text-uppercase">
                            <th class="min-w-25px text-center">No</th>
                            <th class="min-w-25px text-center">Aksi</th>
                            <th class="min-w-125px">Dusun</th>
                            <th class="min-w-125px">Kepala Dusun</th>
                            <th class="min-w-50px text-center">RW</th>
                            <th class="min-w-50px text-center">RT</th>
                            <th class="min-w-50px text-center">KK</th>
                            <th class="min-w-50px text-center">L+P</th>
                            <th class="min-w-50px text-center">L</th>
                            <th class="min-w-50px text-center">P</th>
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
                            Tambah Dusun
                        </h2>
                        <div class="btn btn-sm btn-icon btn-active-color-danger position-absolute"
                            style="top: 17px;right: 15px;" data-bs-dismiss="modal">
                            <i class="fa-duotone fa-xmark fs-3"></i>
                        </div>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold" for="dusun">
                                Nama Dusun
                            </label>
                            <input type="text" name="dusun" id="dusun" class="form-control mb-2" placeholder="Nama dusun">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold" for="id_kepala">
                                NIK/Nama Kepala Dusun
                            </label>
                            <select class="form-select mb-2"
                            data-dropdown-parent="#tambah-data"
                            data-control="select2"
                            data-placeholder="NIK/Nama kepala dusun" name="id_kepala" id="id_kepala">
                            <option value=""></option>
                            @foreach ($penduduk as $item)
                            <option value="{{ $item["id"] }}">
                                NIK : {{ $item["nik"] }} -
                                {{ $item["nama"] }}
                            </option>
                            @endforeach
                            </select>
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

            $("#example").DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?= site_url('sid_core/dataTable') ?>",
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
                            return '<div style="text-align: center;">' + (meta.row + meta.settings
                                ._iDisplayStart + 1) + '.</div>';
                        },
                    },
                    {
                        "data": null,
                        render: function(data, type, row, meta) {
                            let url = "<?= site_url('sid_core/sub_rw/') ?>" + data.id;
                            return `
                        <div class="d-flex justify-content-center flex-shrink-0 gap-2">
                            <a href="${url}" data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah sub dusun" class="btn btn-icon btn-primary btn-sm">
                                <i class="fa-solid fa-timeline fs-6"></i>
                            </a>
                            <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Lokasi" class="btn btn-sm btn-primary btn-icon btn-flex btn-center menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                                <i class="fa-solid fa-location-dot fs-3"></i>
                            </a>
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-auto py-4 min-w-125px"
                    data-kt-menu="true" data-popper-placement="bottom-start">
                    <div class="menu-item px-3">
                        <a href="./wilayah_administratif_kantor_dusun.html" class="menu-link px-3">
                            Lokasi Kantor Dusun
                        </a>
                    </div>
                    <div class="menu-item px-3">
                        <a href="./wilayah_administratif_wilayah_dusun.html" class="menu-link px-3">
                            Peta Wilayah Dusun
                        </a>
                    </div>
                </div>
                <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Aksi"
                    class="btn btn-sm btn-secondary btn-icon btn-flex btn-center menu-dropdown"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                    <i class="fa-solid fa-ellipsis fs-3"></i>
                </a>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-auto py-4 min-w-125px"
                    data-kt-menu="true" data-popper-placement="bottom-start">
                    <div class="menu-item px-3">
                        <a href="#" data-title="Ubah Dusun"
                            data-modal-target="#mdl_wilayah_administratif"
                            class="btn_edit menu-link px-3">
                            Ubah
                        </a>
                    </div>
                    <div class="menu-item px-3">
                        <a href="#" class="btn_del menu-link px-3">
                            Hapus
                        </a>
                    </div>
                </div>
                        </div>`;
                        },
                    },
                    {
                        "data": "dusun"
                    },
                    {
                        "data": "nama",
                        render: function(data) {
                            return data ? data : "-";
                        }
                    },
                    {
                        "data": "rw",
                        render: function(data) {
                            return "<div style='text-align: center'>" + data + "</div>";
                        }
                    },
                    {
                        "data": "rt",
                        render: function(data) {
                            return "<div style='text-align: center'>" + data + "</div>";
                        }
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
                    }
                ],
                "language": {
                    "zeroRecords": "No matching records found",
                    "infoEmpty": "No records available"
                }
            })
        });
    </script>
@endsection
