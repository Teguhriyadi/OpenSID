@extends('admin.layouts.index')

@section('title')
    <h1>
        Tentang <?= config_item('nama_aplikasi') ?>
    </h1>
@endsection

@section('breadcrumb')
    <li class="active">Tentang <?= config_item('nama_aplikasi') ?></li>
@endsection

@section('content')
    <div class="row">
        @if (can('u', 'sid_core'))
            <div class="col-md-4">
                <div class="card shadow-sm border-0 card-flush mb-xl-10">
                    <div class="card-header pt-5">
                        <div class="card-title d-flex flex-column">
                            <div class="d-flex align-items-center">
                                <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">1,836</span>
                                <span class="badge badge-light-danger fs-base">
                                    <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>2.2%
                                </span>
                            </div>
                            <span class="text-gray-400 pt-1 fw-semibold fs-6">
                                Total Sales
                            </span>
                        </div>
                    </div>
                    <div class="card-body d-flex align-items-end pt-0">
                        <!--begin::Progress-->
                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                <span class="fw-bolder fs-6 text-dark">1,048
                                    to
                                    Goal</span>
                                <span class="fw-bold fs-6 text-gray-400">62%</span>
                            </div>
                            <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                <div class="bg-success rounded h-8px" role="progressbar"
                                    style="
                                        width: 62%;
                                    "
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 card-flush mb-xl-10">
                    <div class="card-header pt-5">
                        <div class="card-title d-flex flex-column">
                            <div class="d-flex align-items-center">
                                <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">1,836</span>
                                <span class="badge badge-light-danger fs-base">
                                    <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>2.2%
                                </span>
                            </div>
                            <span class="text-gray-400 pt-1 fw-semibold fs-6">
                                Total Sales
                            </span>
                        </div>
                    </div>
                    <div class="card-body d-flex align-items-end pt-0">
                        <!--begin::Progress-->
                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                <span class="fw-bolder fs-6 text-dark">1,048
                                    to
                                    Goal</span>
                                <span class="fw-bold fs-6 text-gray-400">62%</span>
                            </div>
                            <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                <div class="bg-success rounded h-8px" role="progressbar"
                                    style="
                                        width: 62%;
                                    "
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 card-flush mb-xl-10">
                    <div class="card-header pt-5">
                        <div class="card-title d-flex flex-column">
                            <div class="d-flex align-items-center">
                                <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">1,836</span>
                                <span class="badge badge-light-danger fs-base">
                                    <i class="ki-outline ki-arrow-down fs-5 text-danger ms-n1"></i>2.2%
                                </span>
                            </div>
                            <span class="text-gray-400 pt-1 fw-semibold fs-6">
                                Total Sales
                            </span>
                        </div>
                    </div>
                    <div class="card-body d-flex align-items-end pt-0">
                        <!--begin::Progress-->
                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                <span class="fw-bolder fs-6 text-dark">1,048
                                    to
                                    Goal</span>
                                <span class="fw-bold fs-6 text-gray-400">62%</span>
                            </div>
                            <div class="h-8px mx-3 w-100 bg-light-success rounded">
                                <div class="bg-success rounded h-8px" role="progressbar"
                                    style="
                                        width: 62%;
                                    "
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
