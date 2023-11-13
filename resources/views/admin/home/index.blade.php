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

@section('breadcrumb')
    <li class="active">Tentang <?= config_item('nama_aplikasi') ?></li>
@endsection

@section('content')
    <div class="row">
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
    </div>
@endsection
