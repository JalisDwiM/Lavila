@extends('admin.masteradmin')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content">
        <!-- Main content -->
        <section class="content-header">
        <h1>
            Daftar Pengunjung 
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
                    <th>Email</th>
                    <th>Password</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="label label-success">Approved</span></td>
                </tr>
                <tr>
                    <td>219</td>
                    <td>Alexander Pierce</td>
                    <td>11-7-2014</td>
                    <td><span class="label label-warning">Pending</span></td>
                </tr>
                <tr>
                    <td>657</td>
                    <td>Bob Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="label label-primary">Approved</span></td>
                </tr>
                <tr>
                    <td>175</td>
                    <td>Mike Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="label label-danger">Denied</span></td>
                </tr>
                </table>
            </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        </div>
    
    {{-- <!-- /.content -->
    <!-- form start -->
    <form role="form">
        <div class="form-group">
        <label for="exampleInputEmail1">Nama Dokter </label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama">
        </div>
        <!-- Poli -->
        <div class="form-group">
        <label>Select</label>
        <select class="form-control">
            <option>Poli umum</option>
            <option>Poli Gigi</option>
            <option>Poli Anak</option>
            <option>Poli Penyakit Dalam</option>
        </select>
        </div>
            {{-- <form role="form"> --}}
            {{--<div class="form-group">
                <label for="exampleInputEmail1">Kuota Antrian</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama">
            </div>
        <!-- Date -->
        <div class="form-group">
        <label>Date:</label>
        
        <div class="input-group date">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        <input type="text" class="form-control pull-right datepicker" id="date">
        </div>
        <!-- /.input group -->
        </div>
            <script type="text/javascript">
                $(function(){
                    $(".datepicker").datepicker({
                        format: 'yyyy-mm-dd',
                        autoclose: true,
                        todayHighlight: true,
                    });
                });
            </script>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <br><br>
    </form> --}}



</div>
    
@endsection