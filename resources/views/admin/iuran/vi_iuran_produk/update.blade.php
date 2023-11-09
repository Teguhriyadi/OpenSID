@include('admin.layouts.components.asset_datatables')

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
<li class="active">
    Daftar Menu Apps
</li>
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="box box-info">
            <div class="box-header with-border">
                <div class="btn-group btn-group-vertical">
                    <a href="<?= site_url('vi_iuran_produk') ?>" class="btn btn-social btn-flat btn-danger btn-sm">
                        <i class='fa fa-sign-out'></i> Kembali Ke Halaman Sebelumnya
                    </a>
                </div>
                <form action="<?= site_url('vi_iuran_produk/update/'.$query->id) ?>" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="desa_id"> Desa </label>
                            <select name="desa_id" class="form-control input-sm select2" id="desa_id">
                                <option value="">- Pilih -</option>
                                @foreach ($desa as $item)
                                    @if ($item->id == $query->desaid)
                                    <option value="<?= $item->id ?>" selected>
                                        <?= $item->dusun ?>
                                    </option>    
                                    @else
                                    <option value="<?= $item->id ?>">
                                        <?= $item->dusun ?>
                                    </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama_produk"> Nama Produk </label>
                            <input type="text" class="form-control input-sm" name="nama_produk" id="nama_produk" placeholder="Masukkan Nama Produk" value="<?= $query->nama_produk ?>">
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="reset" class="btn btn-social btn-flat btn-danger btn-sm">
                            <i class='fa fa-times'></i> Batal
                        </button>
                        <button type="submit" class="btn btn-social btn-flat btn-success btn-sm">
                            <i class='fa fa-save'></i> Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
