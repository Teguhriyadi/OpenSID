@extends('admin.layouts.index')

@section('title')
    <h1>
        Data Iuran
    </h1>
@endsection

@section('breadcrumb')
    <li class="active">Data Iuran</li>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('custom/css/style.min.css') }}">
@endpush

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <div class="btn-group btn-group-vertical">
                        <a href="<?= site_url('vi_iuran/form') ?>" class="btn btn-social btn-flat btn-success btn-sm">
                            <i class='fa fa-plus'></i> Tambah Iuran
                        </a>
                    </div>
                    <div class="btn-group btn-group-vertical">
                        <button type="button" class="btn btn-success btn-social btn-flat btn-sm" data-toggle="modal"
                            data-target="#modal-default">
                            <i class="fa fa-download"></i> Import Excel
                        </button>
                    </div>
                    <div class="btn-group btn-group-vertical">
                        <a href="<?= site_url('vi_iuran/history') ?>" class="btn btn-social btn-flat btn-primary btn-sm">
                            <i class='fa fa-book'></i> History Iuran
                        </a>
                    </div>
                    <br><br>
                    <div class="table-responsive">
                        <table id="data-example" class="table table-bordered table-striped table-hover"
                            style="width: 100%;">
                            <thead class="bg-gray disabled color-palette">
                                <tr>
                                    <th style="text-align: center;">No.</th>
                                    <th style="text-align: center;">Aksi</th>
                                    <th style="text-align: center;">NIK</th>
                                    <th>Nama</th>
                                    <th style="text-align: center;">Desa</th>
                                    <th style="text-align: center;">Tagihan</th>
                                    <th style="text-align: center;">Bulan</th>
                                    <th style="text-align: center;">Tahun</th>
                                    <th style="text-align: center;">Produk</th>
                                    <th style="text-align: center;">Tanggal Bayar</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">
                        <i class="fa fa-download"></i> Upload Data Iuran
                    </h4>
                </div>
                <form action="<?= site_url('vi_iuran/upload_excel') ?>" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="upload"> Upload Excel </label>
                            <input type="file" class="form-control" name="upload" id="upload">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger pull-left btn-social btn-flat btn-sm"
                            data-dismiss="modal">
                            <i class="fa fa-times"></i> Batal
                        </button>
                        <button type="submit" class="btn btn-primary btn-social btn-flat btn-sm">
                            <i class="fa fa-save"></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End -->
@endsection

@push('scripts')
    <script src="{{ asset('custom/javascript/dataTables.min.js') }}"></script>
    <script src="{{ asset('custom/javascript/bootstrap.min.js') }}"></script>
    <script src="{{ asset('custom/javascript/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#data-example").DataTable({
                "processing": true,
                "serverSide": true,
                "order": [],
                "ajax": {
                    "url": "<?= site_url('vi_iuran/dataTable') ?>",
                    "type": "GET",
                    "dataSrc": function(json) {
                        return json.query;
                    }
                },
                "columnDefs": [{
                    "orderable": false
                }],
                "columns": [{
                        "data": null,
                        render: function(data, type, row, meta) {
                            return '<div style="text-align: center;">' + (meta.row + meta.settings
                                ._iDisplayStart + 1) + '.</div>';
                        }
                    },
                    {
                        "data": null,
                        render: function(data, type, row) {
                            return '<a href="<?= site_url('vi_iuran/edit/') ?>' + data.id_iuran +
                                '" class="btn btn-warning btn-flat btn-social btn-sm"><i class="fa fa-edit"></i> Edit </a>' +
                                '&nbsp; <a onclick="confirmDelete(' + data.id_iuran +
                                ')" class="btn btn-danger btn-flat btn-social btn-sm"><i class="fa fa-trash"></i> Hapus </a>';
                        }
                    },
                    {
                        "data": "nik"
                    },
                    {
                        "data": "nama"
                    },
                    {
                        "data": "dusun"
                    },
                    {
                        "data": "tagihan",
                        render: function(data) {
                            return "<div style='text-align: center;'>Rp. " + number_format(data) + "</div>";
                        }
                    },
                    {
                        "data": "p_bulan"
                    },
                    {
                        "data": "p_tahun"
                    },
                    {
                        "data": "namaproduk"
                    },
                    {
                        "data": "tgl_bayar"
                    }
                ],
                "language": {
                    "zeroRecords": "No matching records found",
                    "infoEmpty": "No records available"
                }
            });
        });

        function confirmDelete(id) {
            swal({
                    title: "Apakah Anda Yakin Untuk Menghapus Data Ini?",
                    text: "Klik OK Untuk Menghapus Data Ini",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: "<?= site_url('vi_iuran/destroy/') ?>" + id,
                            type: "GET",
                            data: {id : id},
                            success: function(data) {
                                swal("Berhasil!", "Data Anda Berhasil Dihapus", "success");
                            }
                            
                        });
                        $("#data-example").DataTable().ajax.reload();
                    } else {
                        swal("Oke!", "Data Anda Tidak Dihapus", "success");
                    }
                });
        }

        function number_format(number) {
            return new Intl.NumberFormat('id-ID').format(number);
        }
    </script>
@endpush
