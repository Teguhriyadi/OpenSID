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
                <a href="#" class="btn_add btn btn-icon btn-sm btn-primary align-self-center" data-title="Tambah RW"
                    data-modal-target="#mdl_wilayah_administratif" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Tambah">
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
                <table id="example" class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                    <thead>
                        <tr class="fw-bold text-muted bg-light text-uppercase">
                            <th class="min-w-25px text-center">No</th>
                            <th class="min-w-25px text-center">Aksi</th>
                            <th class="min-w-50px text-end">RW</th>
                            <th class="min-w-125px">Ketua RW</th>
                            <th class="min-w-125px">NIK Ketua RW</th>
                            <th class="min-w-50px text-end">RT</th>
                            <th class="min-w-50px text-end">KK</th>
                            <th class="min-w-50px text-end">L+P</th>
                            <th class="min-w-50px text-end">L</th>
                            <th class="min-w-50px text-end">P</th>
                        </tr>
                    </thead>

                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section("javascript")

<script src="{{ asset('custom/javascript/customDataTables.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#example").DataTable();
    });
</script>

@endsection