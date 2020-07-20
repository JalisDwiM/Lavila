@extends('admin.masteradmin')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('flash_message')
        <!-- Content Header (Page header) -->

        <section class="content">
        <!-- Main content -->
        <section class="content-header">
        <h1>
            Daftar Dokter 
        </h1><br>
        {{-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
            <li class="active">Antrian</li>
        </ol> --}}
        </section>
        <!-- Main content -->
    <!-- /.row -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
                <h3 class="box-title"></h3>
    
                <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
    
                    <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover" >
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Spesialis</th>
                    <th>Opsi</th>
                </tr>
                <?php $no = 0; ?>
                @foreach ($dokter as $d)
                <?php $no++; ?>
                <tr>
                    <td>{{$no}}</td>
                    <td>{{ $d->nama}}</td>
                    <td>{{ $d->telepon}}</td>
                    <td>{{ $d->spesialis}}</td>
                    <td>
                        <a href="#">Edit</a>
                        |
                        <a href="#">Hapus</a>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

    
    <!-- /.content -->
    <!-- form start -->
    <form role="form" action="/admin/dokter/store" method="POST">
        {{csrf_field()}}
        <div class="form-group">
        <label >Nama Dokter </label>
        <input type="name" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
        <label>No Telepon </label>
        <input type="name" name="telepon" class="form-control" placeholder="No Telepon">
        </div>
        <!-- spesialis -->
        <div class="form-group">
            <label>Spesialis</label>
            <select class="form-control" name="spesialis">
                <option>Mata</option>
                <option>Gigi</option>
                <option>Anak</option>
                <option>Kanker</option>
                <option>Gizi</option>
                <option>Saraf</option>
                <option>Penyakit Dalam</option>
            </select>
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <br><br>
    </form>
</div>
<script type="text/javascript">
    window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 3000);
</script>
    
@endsection