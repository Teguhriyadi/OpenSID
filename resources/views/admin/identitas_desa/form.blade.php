@extends('admin.layouts.index')

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
                            <a href="<?= site_url('identitas_desa') ?>" class="text-muted text-hover-primary">
                                Identitas Desa
                            </a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">
                            Ubah Data
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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
    <form action="<?= $form_action ?>" method="POST" enctype="multipart/form-data"
        class="d-flex flex-column flex-lg-row gap-5 gap-xl-8">
        <div class="d-flex flex-column flex-lg-row-auto w-lg-250px w-xl-350px gap-5 gap-xl-8">
            <div class="card shadow-sm border-0 card-flush">
                <div class="card-header border-0 py-7">
                    <div class="card-title">
                        <h2>Logo {{ ucwords($setting->sebutan_desa) }}</h2>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="fv-row w-100 fv-plugins-icon-container mb-5 text-center">
                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                            data-kt-image-input="true">
                            <div class="image-input-wrapper w-150px h-150px">
                            </div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                data-bs-original-title="Pilih file">
                                <i class="fa-duotone fa-pen-swirl fs-7"></i>
                                <input type="file" name="logo" accept=".png, .jpg, .jpeg, .webp, .avif">
                                <input type="hidden" name="old_logo" value="{{ $main->logo }}">
                            </label>
                            <span class="btn btn-icon btn-circle btn-active-color-danger w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-original-title="Batal">
                                <i class="fa-duotone fa-xmark fs-7"></i> </span>
                        </div>
                        <div class="text-gray-600 fw-semibold fs-7">
                            Kosongkan jika logo desa tidak berubah
                        </div>
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                    <div class="fv-row w-100 fv-plugins-icon-container">
                        <label class="required form-label fs-5 fw-bold">
                            Dimensi Logo (persegi)
                        </label>
                        <input type="text" name="dimension" class="form-control mb-2" placeholder="Dimensi Logo"
                            value="">
                        <div class="text-gray-600 fw-semibold fs-7">
                            Kosongkan jika ingin dimensi bawaan
                        </div>
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm border-0 card-flush">
                <div class="card-header border-0 py-7">
                    <div class="card-title">
                        <h2>Kantor {{ ucwords($setting->sebutan_desa) }}</h2>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="fv-row w-100 fv-plugins-icon-container text-center">
                        <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                            data-kt-image-input="true">
                            <div class="image-input-wrapper w-150px h-150px">
                            </div>
                            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                data-bs-original-title="Pilih file">
                                <i class="fa-duotone fa-pen-swirl fs-7"></i>
                                <input type="file" name="kantor_desa" accept=".png, .jpg, .jpeg, .webp, .avif">
                                <input type="hidden" name="old_kantor_desa" value="{{ $main->kantor_desa }}">
                            </label>
                            <span class="btn btn-icon btn-circle btn-active-color-danger w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip" data-bs-original-title="Batal">
                                <i class="fa-duotone fa-xmark fs-7"></i> </span>
                        </div>
                        <div class="text-gray-600 fw-semibold fs-7">
                            Kosongkan jika kantor desa tidak berubah
                        </div>
                        <div class="fv-plugins-message-container invalid-feedback">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-lg-row-fluid">
            <div class="card shadow-sm card-flush border-0">
                <div class="card-header border-0 py-7">
                    <div class="card-title">
                        <h2>Detail</h2>
                    </div>
                    <div class="card-toolbar align-self-center d-flex column-gap-2">
                    </div>
                </div>
                <div class="card-body pt-0">
                    <form action="" class="form">
                        <div class="d-flex align-items-center position-relative mb-5">
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                            </div>
                            <div class="fw-semibold ms-5">
                                <span
                                    class="fs-5 fw-bold text-gray-900 text-hover-primary">{{ ucwords($setting->sebutan_desa) }}</span>
                                <div class="fs-7 text-gray-700 fw-semibold">
                                    Informasi tentang {{ ucwords($setting->sebutan_desa) }}
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    {{ ucwords($setting->sebutan_desa) }}
                                </label>
                                @if (cek_koneksi_internet())
                                    <select class="form-select mb-2 select2" name="pilih_desa" id="pilih_desa"></select>
                                @endif
                                <input type="hidden" name="nama_desa" id="nama_desa" value="{{ $main->nama_desa }}">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Kode Desa
                                </label>
                                <input type="text" name="kode_desa" class="form-control mb-2" id="kode_desa"
                                    placeholder="Kode desa" readonly value="{{ $main->kode_desa }}">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Kode Pos
                            </label>
                            <input type="text" name="kode_pos" id="kode_pos" class="form-control mb-2"
                                placeholder="Kode pos" value="{{ $main->kode_pos }}">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Kepala Desa
                                </label>
                                <input type="text" name="kepala_desa" class="form-control mb-2"
                                    placeholder="Kepala desa" value="" readonly>
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    NIP Kepala Desa
                                </label>
                                <input type="text" name="nip_kepala_desa" class="form-control mb-2"
                                    placeholder="NIP kepala desa" value="" readonly>
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Alamat Kantor Desa
                            </label>
                            <textarea class="form-control mb-2" name="alamat_kantor" placeholder="Alamat kantor desa" id="alamat_kantor_desa"
                                rows="5" required>{{ $main->alamat_kantor }}</textarea>
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Email Desa
                            </label>
                            <input type="text" name="email_desa" class="form-control mb-2" placeholder="Email desa"
                                value="{{ $main->email_desa }}">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    No Telepon Desa
                                </label>
                                <input type="text" name="telepon" class="form-control mb-2"
                                    placeholder="No telepon desa" value="{{ $main->telepon }}">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    No Ponsel Desa
                                </label>
                                <input type="text" name="nomor_operator" class="form-control mb-2"
                                    placeholder="No ponsel desa" value="{{ $main->nomor_operator }}">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="fv-row w-100 fv-plugins-icon-container mb-5">
                            <label class="required form-label fs-5 fw-bold">
                                Website
                            </label>
                            <input type="text" name="website" class="form-control mb-2" placeholder="Website"
                                value="{{ $main->website }}">
                            <div class="text-gray-600 fw-semibold fs-7">
                            </div>
                            <div class="fv-plugins-message-container invalid-feedback">
                            </div>
                        </div>

                        <div class="separator separator-dashed bg-primary mb-5"></div>

                        <div class="d-flex align-items-center position-relative mb-5">
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                            </div>
                            <div class="fw-semibold ms-5">
                                <span class="fs-5 fw-bold text-gray-900 text-hover-primary">Kecamatan</span>
                                <div class="fs-7 text-gray-700 fw-semibold">
                                    Informasi tentang kecamatan
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Kecamatan
                                </label>
                                <input type="text" name="nama_kecamatan" id="nama_kecamatan" class="form-control"
                                    placeholder="Nama Kecamatan" readonly value="{{ $main->nama_kecamatan }}">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Kode Kecamatan
                                </label>
                                <input type="text" name="kode_kecamatan" class="form-control mb-2"
                                    id="kode_kecamatan" placeholder="Kode kecamatan" readonly
                                    value="{{ $main->kode_kecamatan }}">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Nama Camat
                                </label>
                                <input type="text" name="nama_kepala_camat" class="form-control mb-2"
                                    placeholder="Nama Kecamatan" value="{{ $main->nama_kepala_camat }}" required>
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    NIP Camat
                                </label>
                                <input type="text" name="nip_kepala_camat" class="form-control mb-2"
                                    placeholder="NIP camat" value="{{ $main->nip_kepala_camat }}">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>

                        <div class="separator separator-dashed bg-primary mb-5"></div>

                        <div class="d-flex align-items-center position-relative mb-5">
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                            </div>
                            <div class="fw-semibold ms-5">
                                <span class="fs-5 fw-bold text-gray-900 text-hover-primary">Kota/Kabupaten</span>
                                <div class="fs-7 text-gray-700 fw-semibold">
                                    Informasi tentang kota/kabupaten
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Kota/Kabupaten
                                </label>
                                <input type="text" name="nama_kabupaten" id="nama_kabupaten" class="form-control"
                                    placeholder="Kota / Kabupaten" readonly value="{{ $main->nama_kabupaten }}">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Kode Kota/Kabupaten
                                </label>
                                <input type="text" name="kode_kabupaten" id="kode_kabupaten"
                                    class="form-control mb-2" placeholder="Kode kota/kabupaten" readonly
                                    value="{{ $main->kode_kabupaten }}">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>

                        <div class="separator separator-dashed bg-primary mb-5"></div>

                        <div class="d-flex align-items-center position-relative mb-5">
                            <div class="position-absolute top-0 start-0 rounded h-100 bg-primary w-4px">
                            </div>
                            <div class="fw-semibold ms-5">
                                <span class="fs-5 fw-bold text-gray-900 text-hover-primary">Provinsi</span>
                                <div class="fs-7 text-gray-700 fw-semibold">
                                    Informasi tentang provinsi
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-5 mb-5">
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Provinsi
                                </label>
                                <input type="text" name="nama_propinsi" id="nama_propinsi" class="form-control"
                                    placeholder="Provinsi" readonly value="{{ $main->nama_propinsi }}">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Kode Provinsi
                                </label>
                                <input type="text" name="kode_propinsi" class="form-control mb-2" id="kode_propinsi"
                                    placeholder="Kode provinsi" readonly value="{{ $main->kode_propinsi }}">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
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
                    </form>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            let server = "{{ config_item('server_pantau') }}"
            let token = "{{ config_item('token_pantau') }}"
            let select2 = $('.select2');

            $('.select2').select2({
                placeholder: 'Pilih desa',
                minimumInputLength: 0,
                escapeMarkup: function(markup) {
                    return markup;
                },
                templateResult: function(data) {
                    return data.text;
                },
                templateSelection: function(data) {
                    if (data && data.id && data.nama_desa) {
                        $("#nama_kecamatan").val(data.nama_kec)
                        $("#kode_desa").val(data.kode_desa)
                        $("#nama_desa").val(data.nama_desa)
                        $("#kode_propinsi").val(data.kode_prov)
                        $("#nama_propinsi").val(data.nama_prov)
                        $("#nama_kabupaten").val(data.nama_kab)
                        $("#kode_kabupaten").val(data.kode_kab)
                        $("#kode_kecamatan").val(data.kode_kec)
                    }

                    return data.text
                },
                ajax: {
                    url: function(params) {
                        return server + "/index.php/api/wilayah/caridesa?&token=" + token + "&page=" + (
                            params.page || 1);
                    },
                    dataType: 'json',
                    processResults: function(data) {
                        return {
                            results: data.results,
                            pagination: {
                                more: data.results.length >= 10
                            }
                        };
                    },
                    cache: true
                }
            });

            let existing = $("#nama_desa").val();
            let ambil_kode_desa = $("#kode_desa").val();

            if (existing) {
                $.ajax({
                    url: server + "/index.php/api/wilayah/caridesa?&token=" + token,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        let selectedOption = data.results.find(option => option.nama_desa == existing);

                        if (selectedOption) {
                            let newOption = new Option(selectedOption.text, selectedOption.id, true,
                                true);
                            select2.append(newOption).trigger('change');
                        }
                    }
                });
            }
        });
    </script>
@endsection
