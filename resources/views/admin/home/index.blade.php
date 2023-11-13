@extends('admin.layouts.index')

@section('title')
    <h1>
        Tentang <?= config_item('nama_aplikasi') ?>
    </h1>
@endsection

@section('css')
    <style>
        .custom-button {
            background-color: white;
            border: 1px solid gray;
            border-radius: 5px;
            width: 100%;
            padding-top: 5px;
            padding-bottom: 5px;
            text-align: center;
        }

        .shadow-sm {}
    </style>
@endsection

@section('content')
    {{-- <div class="row">
        @if (can('u', 'sid_core'))
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0 card-flush h-md-90 mb-xl-10"style="background-color: purple">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">
                                {{ $dusun }}
                            </span>
                        </div>
                        <span class="text-white pt-1 fw-semibold fs-6">
                            {{ SebutanDesa('Wilayah [Desa]') }}
                        </span>
                    </div>
                    <i class="fa fa-location text-white" style="font-size: 30px;"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route('sid_core') }}">
                        <div class="custom-button">
                            Lihat Detail <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endif

        @if (can('u', 'penduduk'))
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0 card-flush h-md-90 mb-xl-10" style="background-color: #00c0ef">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">
                                {{ $penduduk }}
                            </span>
                        </div>
                        <span class="text-white pt-1 fw-semibold fs-6">
                            Penduduk
                        </span>
                    </div>
                    <i class="fa fa-user text-white" style="font-size: 30px;"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route('penduduk.clear') }}">
                        <div class="custom-button">
                            Lihat Detail <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endif

        @if (can('u', 'keluarga'))
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0 card-flush h-md-90 mb-xl-10" style="background-color: #00a65a">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">
                                {{ $keluarga }}
                            </span>
                        </div>
                        <span class="text-white pt-1 fw-semibold fs-6">
                            Keluarga
                        </span>
                    </div>
                    <i class="fa fa-users text-white" style="font-size: 30px;"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route('keluarga.clear') }}">
                        <div class="custom-button">
                            Lihat Detail <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endif

        @if (can('u', 'keluar'))
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0 card-flush h-md-90 mb-xl-10" style="background-color: #0073b7">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">
                                {{ $surat }}
                            </span>
                        </div>
                        <span class="text-white pt-1 fw-semibold fs-6">
                            Surat Tercetak
                        </span>
                    </div>
                    <i class="fa fa-book text-white" style="font-size: 30px;"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route('keluar.clear') }}">
                        <div class="custom-button">
                            Lihat Detail <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endif

        @if (can('u', 'kelompok'))
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0 card-flush h-md-90 mb-xl-10" style="background-color: #dd4b39">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">
                                {{ $kelompok }}
                            </span>
                        </div>
                        <span class="text-white pt-1 fw-semibold fs-6">
                            Kelompok
                        </span>
                    </div>
                    <i class="fa fa-users text-white" style="font-size: 30px;"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route('kelompok.clear') }}">
                        <div class="custom-button">
                            Lihat Detail <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endif

        @if (can('u', 'rtm'))
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0 card-flush h-md-90 mb-xl-10" style="background-color: #d2d6de !important">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">
                                {{ $rtm }}
                            </span>
                        </div>
                        <span class="text-white pt-1 fw-semibold fs-6">
                            Rumah Tangga
                        </span>
                    </div>
                    <i class="fa fa-home text-white" style="font-size: 30px;"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route('rtm.clear') }}">
                        <div class="custom-button">
                            Lihat Detail <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endif

        @if (can('u', 'program_bantuan'))
        <div class="col-md-3 mb-3">
            <div class="card shadow-sm border-0 card-flush h-md-90 mb-xl-10" style="background-color: #f39c12 !important">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <div class="d-flex align-items-center">
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">
                                {{ $bantuan['jumlah'] }}
                            </span>
                        </div>
                        <span class="text-white pt-1 fw-semibold fs-6">
                            {{ $bantuan['nama'] }}
                        </span>
                    </div>
                    <i class="fa fa-pie-chart text-white" style="font-size: 30px;"></i>
                </div>
                <div class="card-body">
                    <a href="{{ route($bantuan['link_detail']) }}">
                        <div class="custom-button">
                            Lihat Detail <i class="fa fa-arrow-circle-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endif

        @if (can('u', 'mandiri'))
            <div class="col-md-3">
                <div class="card shadow-sm border-0 card-flush h-md-90 mb-xl-10" style="background-color: #39CCCC">
                    <div class="card-header pt-5">
                        <div class="card-title d-flex flex-column">
                            <div class="d-flex align-items-center">
                                <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{ $pendaftaran }}</span>
                            </div>
                            <span class="text-white pt-1 fw-semibold fs-6">
                                Verif Layanan Mandiri
                            </span>
                        </div>
                        <i class="fa fa-user text-white" style="font-size: 30px;"></i>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('mandiri') }}">
                            <div class="custom-button">
                                Lihat Detail <i class="fa fa-arrow-circle-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div> --}}
    <div class="row g-5 g-xl-8">
        <div class="col-12">
            <div class="row g-5 g-xl-8">
                <div class="col-md-4">
                    <a href="./penduduk.html">
                        <div class="card shadow-sm border-0 h-xl-100 hover-elevate-up bg-danger text-white overflow-hidden"
                            style="z-index: 2;">
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold">
                                        {{ $penduduk }}
                                    </span>
                                    <span class="pt-1 fw-semibold fs-6">
                                        Penduduk
                                    </span>
                                </div>
                                <div class="d-flex position-absolute top-0 h-100 align-items-center" style="right: 30px;">
                                    <i class="fa-duotone fa-user-group fs-5hx text-white" style="filter: opacity(0.5);"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="./keluarga.html">
                        <div class="card shadow-sm border-0 h-xl-100 hover-elevate-up bg-info text-white overflow-hidden"
                            style="z-index: 2;">
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold">
                                        {{ $keluarga }}
                                    </span>
                                    <span class="pt-1 fw-semibold fs-6">
                                        Keluarga
                                    </span>
                                </div>
                                <div class="d-flex position-absolute top-0 h-100 align-items-center" style="right: 30px;">
                                    <i class="fa-duotone fa-family fs-5hx text-white" style="filter: opacity(0.5);"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="./arsip_layanan.html">
                        <div class="card shadow-sm border-0 h-xl-100 hover-elevate-up bg-success text-white overflow-hidden"
                            style="z-index: 2;">
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <span class="fs-2hx fw-bold">
                                        100
                                    </span>
                                    <span class="pt-1 fw-semibold fs-6">
                                        Surat Tercetak
                                    </span>
                                </div>
                                <div class="d-flex position-absolute top-0 h-100 align-items-center" style="right: 30px;">
                                    <i class="fa-duotone fa-folder-open fs-5hx text-white"
                                        style="filter: opacity(0.5);"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xl-6">
            <div class="card shadow-sm card-flush border-0 h-520px">
                <div class="card-header py-7">
                    <h2 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">
                            Verifikasi Layanan Mandiri
                        </span>
                        <span class="text-gray-500 mt-1 fw-semibold fs-6">
                            Total <?= $mandiri_count ?> terdaftar
                        </span>
                    </h2>
                    <div class="card-toolbar align-self-center d-flex column-gap-2">
                    </div>
                </div>
                <div class="card-body py-0">
                    <div class="table-responsive">
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                            <thead>
                                <tr class="fw-bold text-muted bg-light text-uppercase align-middle">
                                    <th class="min-w-150px">NIK</th>
                                    <th class="min-w-150px">Nama Penduduk</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php if ($mandiri_count == 0) : ?>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <strong>
                                            Belum Ada Pendaftar
                                        </strong>
                                    </td>
                                </tr>
                                <?php else : ?>
                                <?php foreach ($mandiri as $data) : ?>
                                <tr>
                                    <td>
                                        <div class="position-relative ps-6 pe-3 py-2">
                                            <div class="position-absolute start-0 top-0 w-4px h-100 rounded-2 bg-success">
                                            </div>
                                            <span class="text-gray-900 fw-bold">
                                                <?= $data->nik ?>
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="text-gray-900 fw-bold">
                                            <?= $data->nama ?>
                                        </span>
                                    </td>
                                </tr>
                                <?php endforeach ?>

                                <?php endif ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <?php if ($mandiri_count == 0) : ?>

                    <?php else : ?>
                    <?php if ($mandiri_count > 5) : ?>
                    <a href="<?= base_url('mandiri') ?>" class="fw-bold">
                        <span class="me-1">Lihat semua data</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <?php endif ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card shadow-sm card-flush border-0 h-520px">
                <div class="card-header py-7">
                    <h2 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">BPNT</span>
                        <span class="text-gray-500 mt-1 fw-semibold fs-6">
                            Total 145 peserta
                        </span>
                    </h2>
                    <div class="card-toolbar align-self-center d-flex column-gap-2">
                        <div id="kt_daterangepicker_1" data-kt-daterangepicker-opens="left"
                            class="btn btn-sm btn-outline d-flex align-items-center px-4">
                            <div class="text-gray-600 fw-bold" id="daterangepicker_content">
                            </div>
                            <i class="fa-duotone fa-calendar-range fs-1 ms-2 me-0"></i>
                        </div>
                        <script>
                            $(document).ready(function() {
                                var start = moment().startOf("month");
                                var end = moment();

                                function cb(start, end) {
                                    $("#kt_daterangepicker_1 #daterangepicker_content").html(
                                        `${start.format("DD MMM Y")} - ${end.format("DD MMM Y")}`);
                                }
                                $("#kt_daterangepicker_1").daterangepicker({
                                    startDate: start,
                                    endDate: end,
                                    ranges: {
                                        "Hari Ini": [moment(), moment()],
                                        "Kemarin": [moment().subtract(1, "days"), moment().subtract(1, "days")],
                                        "7 Hari Terakhir": [moment().subtract(6, "days"), moment()],
                                        "30 Hari Terakhir": [moment().subtract(29, "days"), moment()],
                                        "Bulan Ini": [moment().startOf("month"), moment().endOf("month")],
                                        "Bulan Kemarin": [moment().subtract(1, "month").startOf("month"), moment().subtract(1,
                                            "month").endOf("month")]
                                    }
                                }, cb);
                                cb(start, end);
                            });
                        </script>
                    </div>
                </div>
                <div class="card-body py-0">
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
                    <script src="https://code.highcharts.com/modules/exporting.js"></script>
                    <script src="https://code.highcharts.com/modules/export-data.js"></script>
                    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                    <div id="chart_index_desa"></div>
                    <script>
                        var tahun = 2022;
                        var terdaftar = 392;
                        var proses = 102;
                        var tidak_terdaftar = 480;

                        Highcharts.chart('chart_index_desa', {
                            chart: {
                                plotBorderWidth: null,
                                plotShadow: false,
                                type: 'pie',
                                options3d: {
                                    enabled: true,
                                    alpha: 45,
                                },
                                height: '356px'
                            },
                            title: {
                                enabled: false,
                                text: ''
                            },
                            subtitle: {
                                enabled: false,
                                text: ''
                            },
                            exporting: {
                                enabled: false
                            },
                            plotOptions: {
                                series: {
                                    colorByPoint: true
                                },
                                pie: {
                                    allowPointSelect: true,
                                    cursor: 'pointer',
                                    showInLegend: true,
                                    depth: 45,
                                    innerSize: 70,
                                    dataLabels: {
                                        enabled: true,
                                        format: '<b>{point.y}</b>'
                                    }
                                }
                            },
                            series: [{
                                name: 'Peserta',
                                shadow: 1,
                                border: 1,
                                data: [
                                    ['Terdaftar', terdaftar],
                                    ['Proses', proses],
                                    ['Tidak Terdaftar', tidak_terdaftar]
                                ]
                            }]
                        });
                    </script>
                </div>
                <div class="card-footer text-center">
                    <a href="./statistik_kependudukan_bpnt.html" class="fw-bold">
                        <span class="me-1">Lihat semua data</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
