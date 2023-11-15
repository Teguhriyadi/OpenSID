@if (!$cek_kades)
    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6 mb-10">
        <i class="fa-duotone fa-triangle-exclamation fs-2qx text-warning me-4"></i>
        <div class="d-flex flex-stack flex-grow-1">
            <div class=" fw-semibold">
                <h4 class="text-gray-900 fw-bold">Informasi</h4>
                <div class="fs-6 text-gray-700 ">
                    Silahkan tentukan Kepala Desa {{ $main->nama_desa }}
                    melalui modul <a class="fw-bold" href="<?= site_url('pengurus') ?>">Pemerintah Desa</a>.
                </div>
            </div>
        </div>
    </div>
@endif
