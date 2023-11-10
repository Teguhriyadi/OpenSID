@extends('admin.layouts.index')

@section('title')
    <h1>
        Daftar Apps Menu
    </h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('pengurus') }}"> Pengurus</a>
    </li>
    <li class="active">Daftar Menu Apps</li>
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
                        <a href="<?= site_url('apps/form') ?>" class="btn btn-social btn-flat btn-success btn-sm">
                            <i class='fa fa-plus'></i> Tambah Menu
                        </a>
                    </div>
                    <br><br>
                    <div class="table-responsive">
                        <table id="data-example" class="table table-bordered table-striped table-hover" style="width: 100%">
                            <thead class="bg-gray disabled color-palette">
                                <tr>
                                    <th style="text-align: center">No.</th>
                                    <th style="text-align: center">Aksi</th>
                                    <th style="text-align: left">Nama</th>
                                    <th style="text-align: center;">Links</th>
                                    <th style="text-align: center">Kategori</th>
                                    <th style="text-align: center">Submenu</th>
                                    <th style="text-align: center">Posisi</th>
                                    <th style="text-align: center">Icons</th>
                                    <th style="text-align: center">Icon</th>
                                    <th style="text-align: center">Keterangan</th>
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
                    "url": "<?= site_url('apps/datatable') ?>",
                    "type": "GET",
                    "dataSrc": function(json) {
                        return json.query
                    }
                },
                "columnDefs": [{
                    "orderable": false
                }],
                "columns": [{
                        "data": null,
                        render: function(data, type, row, meta) {
                            return '<div style="text-align: center;">' + (meta.row + meta.settings
                                ._iDisplayStart + 1) + '.</div>'
                        }
                    }, {
                        "data": null,
                        render: function(data, type, row) {
                            return '<div style="text-align: center;"><a href="<?= site_url('apps/edit/') ?>' +
                                data.id +
                                '" class="btn btn-warning btn-flat btn-social btn-sm"><i class="fa fa-edit"></i> Edit</a>' +
                                '&nbsp; <a onclick="confirmDelete(' + data.id +
                                ')" class="btn btn-social btn-flat btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a></div>';
                        }
                    },
                    {
                        "data": "nama"
                    },
                    {
                        "data": "links",
                        render: function(data) {
                            return "<div style='text-align: center'>" + data + "</div>"
                        }
                    },
                    {
                        "data": "kategori",
                        render: function(data) {
                            return "<div style='text-align: center'>" + data + "</div>"
                        }
                    },
                    {
                        "data": "submenu",
                        render: function(data) {
                            return "<div style='text-align: center'>" + data + "</div>"
                        }
                    },
                    {
                        "data": "posisi",
                        render: function(data) {
                            return "<div style='text-align: center'>" + data + "</div>"
                        }
                    },
                    {
                        "data": "icons",
                        render: function(data) {
                            return "<div style='text-align: center'>" + data + "</div>"
                        }
                    },
                    {
                        "data": "icon",
                        render: function(data) {
                            return "<div style='text-align: center'>" + data + "</div>"
                        }
                    },
                    {
                        "data": "keterangan"
                    }
                ],
                "language": {
                    "zeroRecords": "<div style='padding-top: 10px;'>No matching records found</div>",
                    "infoEmpty": "No records available"
                }
            })
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
                            url: "<?= site_url('apps/destroy/') ?>" + id,
                            type: "GET",
                            data: {
                                id: id
                            },
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
    </script>
@endpush
