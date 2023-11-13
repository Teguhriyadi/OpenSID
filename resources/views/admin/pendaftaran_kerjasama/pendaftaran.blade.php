@extends('admin.layouts.index')

@section('breadcrumb')
    <div id="kt_app_toolbar" class="app-toolbar pt-7 pt-lg-10">
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
            <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">
                    <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bold fs-3 m-0">
                        Pendaftaran Kerjasama
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

@push('scripts')
    <script type="text/javascript">
        var loading = Swal.fire({
            title: 'Sedang Memuat',
            allowOutsideClick: false,
            allowEscapeKey: false,
            showConfirmButton: false,
            didOpen: () => {
                Swal.showLoading()
            }
        });
        loading;

        $.ajax({
            url: '{{ config_item('server_layanan') . '/api/v1/pelanggan/terdaftar' }}',
            type: 'get',
            headers: {
                "Authorization": `Bearer {{ $setting->layanan_opendesa_token }} `,
                "X-Requested-With": `XMLHttpRequest`,
            },
            data: {
                desa_id: '{{ kode_wilayah($desa['kode_desa']) }}'
            },
        })
        .done(function(response) {
            $.ajax({
                url: `${SITE_URL}pendaftaran_kerjasama/terdaftar`,
                type: 'Post',
                data: {
                    response: response,
                    sidcsrf: getCsrfToken(),
                },
            })
            .done(function(result) {
                loading.close()
                $('.content-wrapper').html(result)
            }).fail(function(e) {
                Swal.fire({
                    icon: 'error',
                    text: e.responseText,
                })
            });
        })
        .fail(function() {
            $.ajax({
                url: '{{ config_item('server_layanan') . '/api/v1/pelanggan/form-register' }}',
                type: 'get',
                headers: {
                    "Authorization": `Bearer {{ $setting->layanan_opendesa_token }} `,
                    "X-Requested-With": `XMLHttpRequest`,
                },
            })
            .done(function(response) {
                form(response);
            })
            .fail(function(e) {
                form({});
            });
        });

        function form(response) {
            $.ajax({
                url: `${SITE_URL}pendaftaran_kerjasama/form`,
                type: 'Post',
                dataType: 'json',
                data: {
                    response: response,
                    sidcsrf: getCsrfToken(),
                },
            })
            .done(function(response) {
                loading.close()
                $('.content-wrapper').html(response)
            })
            .fail(function(e) {
                loading.close()
                $('.content-wrapper').html(e.responseText)

            })
            .always(function() {
                $('.content-wrapper').find('#file_browser').click(function(e) {
                    e.preventDefault();
                    $('.content-wrapper').find('#file').click();
                });
                $('.content-wrapper').find('#file').change(function() {
                    $('.content-wrapper').find('#file_path').val($(this).val());
                    if ($(this).val() == '') {
                        $('#' + $(this).data('submit')).attr('disabled', 'disabled');
                    } else {
                        $('#' + $(this).data('submit')).removeAttr('disabled');
                    }
                });
                $('.content-wrapper').find('#file_path').click(function() {
                    $('.content-wrapper').find('#file_browser').click();
                });

                $('.content-wrapper').find('button.simpan').click(function(event) {
                   
                    var that = $('.content-wrapper').find('form#validasi');
                    var cek =  that.validate();
                    setTimeout(function(){
                        
                        const formData = new FormData();
                        formData.append('user_id', that.find('input[name="user_id"]').val());
                        formData.append('email', that.find('input[name="email"]').val());
                        formData.append('desa', that.find('input[name="desa"]').val());
                        formData.append('domain', that.find('input[name="domain"]').val());
                        formData.append('kontak_nama', that.find('input[name="kontak_nama"]').val());
                        formData.append('kontak_no_hp', that.find('input[name="kontak_no_hp"]').val());
                        formData.append('status_langganan', that.find('input[name="status_langganan_id"]')
                            .val());
                        formData.append('permohonan', that.find('input[name="permohonan"]').val());
                        if (that.valid() == true) {
                            Swal.showLoading()
                            $.ajax({
                                url: '{{ config_item('server_layanan') . '/api/v1/pelanggan/register' }}',
                                type: "POST",
                                data: formData,
                                processData: false,
                                contentType: false,
                            })
                            .done(function(response) {
                                Swal.fire({
                                    icon: 'success',
                                    text: response.message,
                                })
                            })
                            .fail(function(e) {
                                Swal.fire({
                                    icon: 'error',
                                    text: e.responseText,
                                })
                            });
                        }
                    }, 100);
                });
            });
        }
    </script>
@endpush
