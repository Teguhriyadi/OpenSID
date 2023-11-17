<div class="row">
    <div class="col-md-3 mb-2">
        <?php if (! $kk_baru): ?>
            <input name="no_kk" type="hidden" value="<?= $penduduk['no_kk'] ?>">
        <?php endif; ?>
        <div class="card shadow-sm border-0 card-flush">
            <div class="card-header border-0 py-7">
                <div class="card-title">
                    <h2>Foto Profil</h2>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="fv-row w-100 fv-plugins-icon-container mb-5 text-center">
                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                        <div class="image-input-wrapper w-150px h-150px">
                        </div>
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" data-bs-original-title="Pilih file">
                            <i class="fa-duotone fa-pen-swirl fs-7"></i>
                            <input type="file" name="logo_desa" accept=".png, .jpg, .jpeg, .webp, .avif">
                        </label>
                        <span class="btn btn-icon btn-circle btn-active-color-danger w-25px h-25px bg-body shadow"
                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                        data-bs-original-title="Batal">
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
                    <div class="text-gray-600 fw-semibold fs-7">
                        Kosongkan jika ingin dimensi bawaan
                    </div>
                    <div class="fv-plugins-message-container invalid-feedback">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9">
        <div class="card shadow-sm card-flush border-0">
            <div class="card-header border-0 py-7">
                <div class="card-toolbar align-self-center d-flex column-gap-2">
                    <div>
                        <?php if (preg_match('/keluarga/i', $_SERVER['HTTP_REFERER'])): ?>
                        <a href="<?= $_SERVER['HTTP_REFERER']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Kembali" class="btn btn-icon btn-sm btn-danger align-self-center menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                            <i class="fa-solid fa-sign-out fs-7"></i>
                        </a>
                        <?php endif ?>

                        <?php if (preg_match('/rtm/i', $_SERVER['HTTP_REFERER'])): ?>
                        <a href="<?= $_SERVER['HTTP_REFERER']; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Kembali" class="btn btn-icon btn-sm btn-info align-self-center menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                            <i class="fa-solid fa-sign-out fs-7"></i>
                        </a>
                        <?php endif ?>
                        <a href="<?= site_url('penduduk/clear'); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Kembali" class="btn btn-icon btn-sm btn-primary align-self-center menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                            <i class="fa-solid fa-sign-out fs-7"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                @include("admin.kependudukan.penduduk.component.form_isian_bersama")
            </div>
            <?php if ($penduduk['status_dasar_id'] == 1 || ! isset($penduduk['status_dasar_id'])): ?>
            <div class="card-footer">
                <button type="reset" data-bs-toggle="tooltip" data-bs-placement="top" title="Batal" class="btn btn-icon btn-sm btn-danger align-self-center menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                    <i class="fa-solid fa-times fs-7"></i>
                </button>
                <button type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Kembali" class="btn btn-icon btn-sm btn-primary align-self-center menu-dropdown" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                    <i class="fa-solid fa-save fs-7"></i>
                </button>
            </div>
            <?php endif ?>
        </div>
    </div>
</div>