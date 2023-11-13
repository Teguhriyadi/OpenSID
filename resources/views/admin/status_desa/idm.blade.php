@extends('admin.layouts.index')

@push('css')
    <style>
        .radius {
            border-radius: 5px;
        }
    </style>
@endpush

@section('title')
    <h1>
        Status IDM Desa
    </h1>
@endsection

@section('breadcrumb')
    <li class="active">Status IDM Desa</li>
@endsection

@section('content')
    <div class="row g-5 g-xl-8 justify-content-center">
        <div class="col-xl-6">
            <a href="./status_desa_idm.html">
                <div class="hover-elevate-up card card-xl-stretch mb-xl-8 bg-primary">
                    <div class="card-body d-flex align-items-center pt-3 pb-0">
                        <div class="d-flex flex-column flex-grow-1 py-2 py-lg-13 me-2">
                            <h1 class="fw-bold fs-4 mb-2 text-white">IDM</h1>
                            <span class="fw-semibold text-muted fs-5">
                                Index Desa Membangun
                            </span>
                        </div>
                        <i class="fa-solid fa-chart-area fs-7tx" style="opacity: .4;"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-6">
            <a href="./status_desa_sdgs.html">
                <div class="hover-elevate-up card card-xl-stretch mb-xl-8 bg-success">
                    <div class="card-body d-flex align-items-center pt-3 pb-0">
                        <div class="d-flex flex-column flex-grow-1 py-2 py-lg-13 me-2">
                            <h1 class="fw-bold fs-4 mb-2 text-white">SDGS</h1>
                            <span class="fw-semibold text-gray-300 fs-5">
                                Sustainable Deveopment Goals
                            </span>
                        </div>
                        <i class="fa-solid fa-recycle text-white fs-7tx" style="opacity: .4;"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="card shadow-sm card-flush border-0">
        <div class="card-header py-7">
            <h2 class="card-title">
                <select class="form-select form-select-sm" name="filter_tahun" data-control="select2"
                    data-hide-search="true" data-placeholder="Pilih tahun">
                    <option></option>
                    <option value="1" selected>2023</option>
                    <option value="2">2022</option>
                    <option value="2">2021</option>
                    <option value="2">2020</option>
                </select>
                <span class="ms-3 nowrap">IDM Tahunan</span>
            </h2>
            <div class="card-toolbar align-self-center d-flex column-gap-2">
                <a href="#" class="btn_add btn btn-icon btn-sm btn-primary align-self-center" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Perbarui">
                    <i class="fa-solid fa-recycle fs-7"></i>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-primary align-self-center" data-bs-toggle="tooltip"
                    data-bs-placement="top" title="Simpan">
                    <i class="fa-solid fa-save fs-7"></i>
                </a>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="row g-5 g-xl-8">
                <div class="col-xl-6">
                    <div class="row g-5 g-xl-8">
                        <div class="col-xl-6">
                            <div class="card shadow-sm border-0 h-xl-100 position-relative hover-elevate-up"
                                style="z-index: 2;">
                                <div class="card-body">
                                    <div class="fs-1 text-dark fw-bold mb-6 counted">
                                        0.6540
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="card-title fw-semibold text-muted">
                                            SKOR IDM SAAT INI
                                        </span>
                                    </div>
                                </div>
                                <i class="fa-solid fa-chart-bar fs-5hx position-absolute text-light-primary"
                                    style="right: 10px;top: 5px;z-index: -1;"></i>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card shadow-sm border-0 h-xl-100 position-relative hover-elevate-up"
                                style="z-index: 2;">
                                <div class="card-body">
                                    <div class="fs-1 text-dark fw-bold mb-6 counted">
                                        BERKEMBANG
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="card-title fw-semibold text-muted">
                                            STATUS IDM
                                        </span>
                                    </div>
                                </div>
                                <i class="fa-solid fa-chart-line fs-5hx position-absolute text-light-primary"
                                    style="right: 10px;top: 5px;z-index: -1;"></i>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card shadow-sm border-0 h-xl-100 position-relative hover-elevate-up"
                                style="z-index: 2;">
                                <div class="card-body">
                                    <div class="fs-1 text-dark fw-bold mb-6 counted">
                                        0.7073
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="card-title fw-semibold text-muted">
                                            SKOR IDM MINIMAL
                                        </span>
                                    </div>
                                </div>
                                <i class="fa-solid fa-chart-pie fs-5hx position-absolute text-light-primary"
                                    style="right: 10px;top: 5px;z-index: -1;"></i>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="card shadow-sm border-0 h-xl-100 position-relative hover-elevate-up"
                                style="z-index: 2;">
                                <div class="card-body">
                                    <div class="fs-1 text-dark fw-bold mb-6 counted">
                                        MAJU
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span class="card-title fw-semibold text-muted">
                                            TARGET STATUS
                                        </span>
                                    </div>
                                </div>
                                <i class="fa-solid fa-arrow-trend-up fs-5hx position-absolute text-light-primary"
                                    style="right: 10px;top: 5px;z-index: -1;"></i>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row mt-3 fs-5 fw-bold bg-hover-light-primary py-1 mx-0 rounded-2 cursor-default">
                                <label class="col-4">Provinsi</label>
                                <div class="col-8">
                                    <span class="me-2">:</span>
                                    <span class="text-gray-700 fw-semibold">
                                        Jawa Timur
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-3 fs-5 fw-bold bg-hover-light-primary py-1 mx-0 rounded-2 cursor-default">
                                <label class="col-4">Kabupaten</label>
                                <div class="col-8">
                                    <span class="me-2">:</span>
                                    <span class="text-gray-700 fw-semibold">
                                        Sidoarjo
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-3 fs-5 fw-bold bg-hover-light-primary py-1 mx-0 rounded-2 cursor-default">
                                <label class="col-4">Kecamatan</label>
                                <div class="col-8">
                                    <span class="me-2">:</span>
                                    <span class="text-gray-700 fw-semibold">
                                        Sidoarjo
                                    </span>
                                </div>
                            </div>
                            <div class="row mt-3 fs-5 fw-bold bg-hover-light-primary py-1 mx-0 rounded-2 cursor-default">
                                <label class="col-4">Desa</label>
                                <div class="col-8">
                                    <span class="me-2">:</span>
                                    <span class="text-gray-700 fw-semibold">
                                        Sekardangan
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body">
                            <script src="https://code.highcharts.com/highcharts.js"></script>
                            <script src="https://code.highcharts.com/highcharts-3d.js"></script>
                            <script src="https://code.highcharts.com/modules/exporting.js"></script>
                            <script src="https://code.highcharts.com/modules/export-data.js"></script>
                            <script src="https://code.highcharts.com/modules/accessibility.js"></script>
                            <div id="chart_index_desa"></div>
                            <script>
                                var tahun = 2022;
                                var iks = 0.82857142857143;
                                var ike = 0.33333333333333;
                                var ikl = 0.8;

                                Highcharts.chart('chart_index_desa', {
                                    chart: {
                                        type: 'pie',
                                        options3d: {
                                            enabled: true,
                                            alpha: 45
                                        }
                                    },
                                    title: {
                                        text: 'Indeks Desa Membangun (IDM) ' + tahun
                                    },
                                    subtitle: {
                                        text: 'SKOR : IKS, IKE, IKL'
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
                                                format: '<b>{point.name}</b>: {point.y:,.2f} / {point.percentage:.1f} %'
                                            }
                                        }
                                    },
                                    series: [{
                                        name: 'SKOR',
                                        shadow: 1,
                                        border: 1,
                                        data: [
                                            ['IKS', iks],
                                            ['IKE', ike],
                                            ['IKL', ikl]
                                        ]
                                    }]
                                });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
                            <thead class="fw-bold text-muted bg-light text-uppercase">
                                <tr>
                                    <th class="min-w-25px text-center align-middle" rowspan="3">
                                        No
                                    </th>
                                    <th class="min-w-150px align-middle" rowspan="3">
                                        Indikator IDM
                                    </th>
                                    <th class="min-w-100px text-end align-middle" rowspan="3">
                                        Skor
                                    </th>
                                    <th class="min-w-250px align-middle" rowspan="3">
                                        Keterangan
                                    </th>
                                    <th class="min-w-250px align-middle" rowspan="3">
                                        Kegiatan Yang Dapat Dilakukan
                                    </th>
                                    <th class="min-w-100px text-end align-middle" rowspan="3">
                                        +Nilai
                                    </th>
                                </tr>
                                <tr>
                                    <th class="min-w-250px text-center" colspan="6">
                                        Yang Dapat Melaksanakan Kegiatan
                                    </th>
                                </tr>
                                <tr>
                                    <th class="min-w-125px">Pusat</th>
                                    <th class="min-w-125px">Provinsi</th>
                                    <th class="min-w-125px">Kabupaten</th>
                                    <th class="min-w-125px">Desa</th>
                                    <th class="min-w-125px">CSR</th>
                                    <th class="min-w-125px">Lainnya</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>Skor Akses Sarkes</td>
                                    <td class="text-end">5</td>
                                    <td>Waktu tempuh dari ≤ 30 Menit</td>
                                    <td>-</td>
                                    <td class="text-end">0</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>Dinkes, PU</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
