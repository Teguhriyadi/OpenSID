@extends('admin.layouts.index')

@section('title')
    <h1>
        {{ SebutanDesa('Identitas [Desa]') }}
    </h1>
@endsection

@section('breadcrumb')
    <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        {{ SebutanDesa('Identitas [Desa]') }}
                    </h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                        <li class="breadcrumb-item text-muted">
                            <a href="<?= site_url('hom_sid') ?>" class="text-muted text-hover-primary">
                                Home
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Identitas Desa
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
    
    @include("admin.identitas_desa.info_kades")

    <div class="d-flex flex-column flex-lg-row gap-5 gap-xl-8">
        <div class="d-flex flex-column flex-lg-row-auto w-lg-250px w-xl-350px">
            <div class="card shadow-sm card-flush border-0">
                <div class="card-body">
                    <div class="d-flex flex-center flex-column py-5">
                        <div class="mb-7 text-center">
                            <img src="{{ gambar_desa($main['path_logo']) }}" class="w-200px"
                                alt="">
                        </div>
                        <h1 class="fw-semibold text-gray-800 text-center lh-lg">
                            <span class="fw-bolder">
                                Desa {{ $main->nama_desa }}
                            </span>
                        </h1>
                        <span class="card-label fw-bold text-gray-700 text-center">
                            Kecamatan {{ $main->nama_kecamatan }}, Kabupaten {{ $main->nama_kabupaten }}, Provinsi {{ $main->nama_propinsi }}
                        </span>
                    </div>
                    <div class="d-flex flex-stack justify-content-end fs-4">
                        <span data-bs-toggle="tooltip" data-bs-trigger="hover">
                            <a href="<?= site_url('identitas_desa/form') ?>" class="btn btn-sm btn-primary">
                                Ubah
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-lg-row-fluid">
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8"
                role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_tab_detail"
                        role="tab">Detail</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_tab_lokasi_kantor_desa"
                        role="tab">Lokasi Kantor</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_tab_peta_wilayah_desa"
                        role="tab">Peta Wilayah</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="kt_tab_detail" role="tabpanel">
                    <div class="card shadow-sm card-flush border-0">
                        <div class="card-body accordion" id="kt_accordion">
                            <div>
                                <div class="cursor-pointer d-flex align-items-center position-relative rotate collapsible "
                                    data-bs-toggle="collapse" data-bs-target="#kt_detail_desa">
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                                    </div>
                                    <div class="fw-semibold ms-5">
                                        <span class="fs-5 fw-bold text-gray-900 text-hover-primary">Desa</span>
                                        <div class="fs-7 text-gray-700 fw-semibold">
                                            Informasi tentang desa
                                        </div>
                                    </div>
                                    <span class="ms-2 rotate-180 ms-auto">
                                        <i class="fa-duotone fa-chevron-down fs-7"></i>
                                    </span>
                                </div>
                                <div id="kt_detail_desa" data-bs-parent="#kt_accordion"
                                    class="py-3 accordion-collapse collapse show">
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">Nama</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span class="text-gray-700 fw-semibold">{{ $main->nama_desa }}</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">Kode</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span class="text-gray-700 fw-semibold">{{ $main->kode_desa }}</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">Kepala Desa</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span class="text-gray-700 fw-semibold">-</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">NIP Kepala Desa</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span class="text-gray-700 fw-semibold">-</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">Alamat</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span semfw-semibold class="text-gray-700 fw-normal cursor-default">{{ $main['alamat_kantor'] }}</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">Email</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span semfw-semibold
                                                class="text-gray-700 fw-normal cursor-default">{{ $main['email_desa'] }}</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">Telpon</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span semfw-semibold
                                                class="text-gray-700 fw-normal cursor-default">{{ $main['telepon'] }}</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">Ponsel</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span semfw-semibold
                                                class="text-gray-700 fw-normal cursor-default">{{ $main['nomor_operator'] }}</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">Website</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span semfw-semibold class="text-gray-700 fw-normal cursor-default">{{ $main['website'] }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator my-3 separator-dashed bg-light-primary">
                            </div>
                            <div>
                                <div class="cursor-pointer d-flex align-items-center position-relative rotate collapsible collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#kt_detail_kecamatan">
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                                    </div>
                                    <div class="fw-semibold ms-5">
                                        <span class="fs-5 fw-bold text-gray-900 text-hover-primary">Kecamatan</span>
                                        <div class="fs-7 text-gray-700 fw-semibold">
                                            Informasi tentang kecamatan
                                        </div>
                                    </div>
                                    <span class="ms-2 rotate-180 ms-auto">
                                        <i class="fa-duotone fa-chevron-down fs-7"></i>
                                    </span>
                                </div>
                                <div id="kt_detail_kecamatan" data-bs-parent="#kt_accordion"
                                    class="py-3 accordion-collapse collapse">
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">Nama</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span class="text-gray-700 fw-semibold">{{ $main->nama_kecamatan }}</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">Kode</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span class="text-gray-700 fw-semibold">{{ $main->kode_kecamatan }}</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">Camat</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span class="text-gray-700 fw-semibold">Jamal
                                                Mirdat</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">NIP Camat</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span class="text-gray-700 fw-semibold">-</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator my-3 separator-dashed bg-light-primary">
                            </div>
                            <div>
                                <div class="cursor-pointer d-flex align-items-center position-relative rotate collapsible collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#kt_detail_kabupaten"
                                    href="#kt_detail_kabupaten">
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                                    </div>
                                    <div class="fw-semibold ms-5">
                                        <span class="fs-5 fw-bold text-gray-900 text-hover-primary">Kabupaten</span>
                                        <div class="fs-7 text-gray-700 fw-semibold">
                                            Informasi tentang kabupaten
                                        </div>
                                    </div>
                                    <span class="ms-2 rotate-180 ms-auto">
                                        <i class="fa-duotone fa-chevron-down fs-7"></i>
                                    </span>
                                </div>
                                <div id="kt_detail_kabupaten" data-bs-parent="#kt_accordion"
                                    class="py-3 accordion-collapse collapse">
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">Nama</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span class="text-gray-700 fw-semibold">{{ $main->nama_kabupaten }}</span>
                                        </div>
                                    </div>
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">Kode</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span class="text-gray-700 fw-semibold">{{ $main->kode_kabupaten }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator my-3 separator-dashed bg-light-primary">
                            </div>
                            <div>
                                <div class="cursor-pointer d-flex align-items-center position-relative rotate collapsible collapsed"
                                    data-bs-toggle="collapse" data-bs-target="#kt_detail_provinsi"
                                    href="#kt_detail_provinsi">
                                    <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                                    </div>
                                    <div class="fw-semibold ms-5">
                                        <span class="fs-5 fw-bold text-gray-900 text-hover-primary">Provinsi</span>
                                        <div class="fs-7 text-gray-700 fw-semibold">
                                            Informasi tentang provinsi
                                        </div>
                                    </div>
                                    <span class="ms-2 rotate-180 ms-auto">
                                        <i class="fa-duotone fa-chevron-down fs-7"></i>
                                    </span>
                                </div>
                                <div id="kt_detail_provinsi" data-bs-parent="#kt_accordion"
                                    class="py-3 accordion-collapse collapse">
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">Nama</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span class="text-gray-700 fw-semibold">
                                                {{ $main->nama_propinsi }}
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row mt-3 fs-5 fw-bold">
                                        <label class="col-lg-4">Kode</label>
                                        <div class="col-lg-8"><span class="me-2">:</span>
                                            <span class="text-gray-700 fw-semibold">{{ $main->kode_propinsi }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_tab_lokasi_kantor_desa" role="tabpanel">
                    <div class="card shadow-sm card-flush border-0">
                        <div class="card-header border-0 py-7">
                            <div class="card-title">
                                <h2>
                                    Desa {{ $main->nama_desa }}
                                </h2>
                            </div>
                            <div class="card-toolbar align-self-center d-flex column-gap-2">
                                <a href="#" class="btn btn-icon btn-sm btn-danger align-self-center"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Kosongkan">
                                    <i class="fa-solid fa-trash fs-7"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-sm btn-primary align-self-center"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Export ke GPX">
                                    <i class="fa-solid fa-download fs-7"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="mb-5">
                                <iframe class="w-100 rounded-3"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7911.987315526154!2d112.71904164150094!3d-7.465950470182353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e6d71e2e7351%3A0x5f1df990f0b101cb!2sSekardangan%2C%20Kec.%20Sidoarjo%2C%20Kabupaten%20Sidoarjo%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1698910558120!5m2!1sid!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <form action="" class="form">
                                <div class="row mb-5">
                                    <div class="fv-row col-md-6 fv-plugins-icon-container flex-md-root">
                                        <label class="required form-label fs-5 fw-bold">
                                            Latitude
                                        </label>
                                        <input type="text" name="latitude" class="form-control mb-2"
                                            placeholder="Latitude" value="2.410132391694892">
                                        <div class="text-gray-600 fw-semibold fs-7">
                                        </div>
                                        <div class="fv-plugins-message-container invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="fv-row col-md-6 fv-plugins-icon-container flex-md-root">
                                        <label class="required form-label fs-5 fw-bold">
                                            Longitude
                                        </label>
                                        <input type="text" name="longitude" class="form-control mb-2"
                                            placeholder="Longitude" value="96.34149354620605">
                                        <div class="text-gray-600 fw-semibold fs-7">
                                        </div>
                                        <div class="fv-plugins-message-container invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="button" class="btn btn-sm btn-primary" data-kt-indicator="off">
                                        <span class="indicator-label">
                                            Simpan
                                        </span>
                                        <span class="indicator-progress">
                                            Proses...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_tab_peta_wilayah_desa" role="tabpanel">
                    <div class="card shadow-sm card-flush border-0">
                        <div class="card-header border-0 py-7">
                            <div class="card-title">
                                <h2>
                                    Desa {{ $main->nama_desa }}
                                </h2>
                            </div>
                            <div class="card-toolbar align-self-center d-flex column-gap-2">
                                <a href="#" class="btn btn-icon btn-sm btn-danger align-self-center"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Kosongkan">
                                    <i class="fa-solid fa-trash fs-7"></i>
                                </a>
                                <a href="#" class="btn btn-icon btn-sm btn-primary align-self-center"
                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Export ke GPX">
                                    <i class="fa-solid fa-download fs-7"></i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="mb-5">
                                <iframe class="w-100 rounded-3"
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.1724493433862!2d112.71529067504882!3d-7.446164542564924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e6b4f414d77b%3A0xcfffb9adcd160eb9!2sAlun-Alun%20Sidoarjo%2C%20Kec.%20Sidoarjo%2C%20Kabupaten%20Sidoarjo%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1698912281882!5m2!1sid!2sid"
                                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <form action="" class="form">
                                <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                                    <label class="required form-label fs-5 fw-bold">
                                        Warna
                                    </label>
                                    <input type="color" name="warna"
                                        class="form-control form-control-color w-100 mb-2" placeholder="Warna"
                                        value="#ffffff">
                                    <div class="text-gray-600 fw-semibold fs-7">
                                    </div>
                                    <div class="fv-plugins-message-container invalid-feedback">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end column-gap-3">
                                    <button type="button" class="btn btn-sm btn-primary" data-kt-indicator="off">
                                        <span class="indicator-label">
                                            Simpan
                                        </span>
                                        <span class="indicator-progress">
                                            Proses...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
