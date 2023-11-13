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

@section('content')
    <form action="" enctype="multipart/form-data" class="d-flex flex-column flex-lg-row gap-5 gap-xl-8">
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
                                <input type="file" name="logo_desa" accept=".png, .jpg, .jpeg, .webp, .avif">
                                <input type="hidden" name="logo_desa_remove">
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
                                <input type="hidden" name="kantor_desa_remove">
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
                                <span class="fs-5 fw-bold text-gray-900 text-hover-primary">{{ ucwords($setting->sebutan_desa) }}</span>
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
                                    <select class="form-select mb-2" name="desa" data-control="select2" data-placeholder="Pilih desa" id="pilih_desa">
                                        <?php foreach ($query as $q) : ?>
                                        <option value="<?= $q->id ?>">
                                            <?= $q->nama_desa ?> - <?= $q->nama_kecamatan ?> - <?= $q->nama_kabupaten ?> - <?= $q->nama_propinsi ?>
                                        </option>
                                        <?php endforeach ?>
                                    </select>
                                @endif
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Kode Desa
                                </label>
                                <input type="text" name="kode_desa" class="form-control mb-2" id="kode_desa" placeholder="Kode desa" disabled>
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
                            <input type="text" name="kode_pos" class="form-control mb-2" placeholder="Kode pos"
                                value="1109">
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
                                    placeholder="Kepala desa" value="">
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
                                    placeholder="NIP kepala desa" value="">
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
                            <textarea class="form-control mb-2" name="alamat_kantor_desa" placeholder="Alamat kantor desa"
                                id="alamat_kantor_desa" rows="5"></textarea>
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
                                value="1109">
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
                                <input type="text" name="no_telepon_desa" class="form-control mb-2"
                                    placeholder="No telepon desa" value="">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    No Ponsel Desa
                                </label>
                                <input type="text" name="no_ponsel_desa" class="form-control mb-2"
                                    placeholder="No ponsel desa" value="">
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
                                value="">
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
                                <select class="form-select mb-2" name="kecamatan" data-control="select2"
                                    data-placeholder="Pilih kecamatan">
                                    <option></option>
                                    <option value="1" selected>Kecamatan 1</option>
                                    <option value="2">Kecamatan 2</option>
                                </select>
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
                                    placeholder="Kode kecamatan" value="1109">
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
                                <input type="text" name="nama_camat" class="form-control mb-2"
                                    placeholder="Nama camat" value="1109">
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    NIP Camat
                                </label>
                                <input type="text" name="nip_camat" class="form-control mb-2" placeholder="NIP camat"
                                    value="1109">
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
                                <select class="form-select mb-2" name="kabupaten" data-control="select2"
                                    data-placeholder="Pilih kota/kabupaten">
                                    <option></option>
                                    <option value="1" selected>Kota 1</option>
                                    <option value="2">Kabupaten 2</option>
                                </select>
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Kode Kota/Kabupaten
                                </label>
                                <input type="text" name="kode_kabupaten" class="form-control mb-2"
                                    placeholder="Kode kota/kabupaten" value="1109">
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
                                <select class="form-select mb-2" name="provinsi" data-control="select2"
                                    data-placeholder="Pilih provinsi">
                                    <option></option>
                                    <option value="1" selected>Provinsi 1</option>
                                    <option value="2">Provinsi 2</option>
                                </select>
                                <div class="text-gray-600 fw-semibold fs-7">
                                </div>
                                <div class="fv-plugins-message-container invalid-feedback">
                                </div>
                            </div>
                            <div class="fv-row w-100 fv-plugins-icon-container flex-md-root">
                                <label class="required form-label fs-5 fw-bold">
                                    Kode Provinsi
                                </label>
                                <input type="text" name="kode_provinsi" class="form-control mb-2"
                                    placeholder="Kode provinsi" value="11">
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

@section("javascript")

<script type="text/javascript">
    $(document).ready(function() {
        $("#pilih_desa").on("change", function() {
            let pilih_desa = $("#pilih_desa").val();

            $.ajax({
                type: "GET",
                url: "<?= site_url('identitas_desa/pilih/') ?>" + pilih_desa,
                success: function(data) {
                    $("#kode_desa").val(data.kode_pos);
                },
                error: function(error) {
                    console.log("Error : " + error);
                }
            })
        });
    });
</script>

@endsection