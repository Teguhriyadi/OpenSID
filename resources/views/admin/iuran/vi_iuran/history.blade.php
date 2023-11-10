@extends('admin.layouts.index')

@section('title')
<h1>
    Data History Iuran
</h1>
@endsection

@section('breadcrumb')
<li class="breadcrumb-item">
    <a href="<?= site_url('vi_iuran') ?>">Data Iuran</a>
</li>
<li class="active">History Iuran</li>
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
                    <a href="<?= site_url('vi_iuran') ?>" class="btn btn-social btn-flat btn-danger btn-sm">
                        <i class='fa fa-sign-out'></i> Kembali Ke Halaman Sebelumnya
                    </a>
                </div>
                <br><br>
                <div class="table-responsive">
                    <table id="data-example" class="table table-bordered table-striped table-hover" style="width: 100%">
                        <thead class="bg-gray disabled color-palette">
                            <tr>
                                <th style="text-align: center;">No.</th>
                                <th style="text-align: center;">User</th>
                                <th>Deskripsi</th>
                                <th style="text-align: center;">Tagihan</th>
                                <th style="text-align: center;">Bulan</th>
                                <th style="text-align: center;">Tahun</th>
                                <th style="text-align: center;">Aksi</th>
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
                    <button type="reset" class="btn btn-danger pull-left btn-social btn-flat btn-sm" data-dismiss="modal">
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
<script type="text/javascript">
    $(document).ready(function() {
        $("#data-example").DataTable({
            "processing": true,
            "serverSide": true,
            "order": [],
            "ajax": {
                "url": "<?= site_url('vi_iuran/dataTableHistory') ?>",
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
                    return '<div style="text-align: center;">' + (meta.row + meta.settings._iDisplayStart + 1) + '.</div>';
                }
            },
            {
                "data": "execs",
                render: function(data, type, row, meta) {
                    return "<div style='text-align: center;'>" + data + "</div>";
                }
            },
            {
                "data": "deskripsi"
            },
            {
                "data": "tagihan",
                render: function(data) {
                    return "<div style='text-align: center;'>Rp. " + number_format(data) + "</div>";
                }
            },
            {
                "data": "bulan",
                render: function(data) {
                    return "<div style='text-align: center;'>" + data + "</div>";
                }
            },
            {
                "data": "tahun",
                render: function(data) {
                    return "<div style='text-align: center;'>" + data + "</div>";
                }
            },
            {
                "data": null,
                render: function(data, type, row, meta) {
                    if (data.aksi == "TAMBAH") {
                        return "<div style='text-align: center; padding-top: 20px; padding-bottom: 10px;'><span style='background-color: green; padding: 10px; color: white; text-transform: uppercase' class='badge badge-success'> Tambah </span></div>";
                    } else if (data.aksi == "DELETE") {
                        return "<div style='text-align: center; padding-top: 20px; padding-bottom: 10px;'><span style='background-color: red; padding: 10px; color: white; text-transform: uppercase' class='badge badge-success'> Delete </span></div>";
                    }
                }
            }],
            "language": {
                "zeroRecords": "No matching records found",
                "infoEmpty": "No records available"
            }
        });
    })

    function number_format(number) {
        return new Intl.NumberFormat('id-ID').format(number);
    }
</script>
@endpush