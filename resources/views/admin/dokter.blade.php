@extends('admin.masteradmin')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
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
                <table class="table table-hover">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Spesialis</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Sujoko</td>
                    <td>0352178563</td>
                    <td>Dokter Mata</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Alexander Pierce</td>
                    <td>0987654212</td>
                    <td>Gigi</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bob Doe</td>
                    <td>08765435987</td>
                    <td>Gizi</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mike Doe</td>
                    <td>0456782287</td>
                    <td>Kanker</td>
                </tr>
                </table>
            </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>

    
    <!-- /.content -->
    <!-- form start -->
    <form role="form">
        <div class="form-group">
        <label >Nama Dokter </label>
        <input type="name" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
        <label for="exampleInputEmail1">No Telepon </label>
        <input type="email" name="telepon" class="form-control" placeholder="No Telepon">
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
    
@endsection