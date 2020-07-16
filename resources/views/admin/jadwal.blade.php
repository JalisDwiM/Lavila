@extends('admin.masteradmin')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <h1>
            Histori Antrian Anda
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
            <li class="active">Histori</li>
        </ol>
        </section>
        <section class="content">
        <!-- Main content -->
        <section class="content-header">
        <h1>
            Jadwal Dokter 
        </h1>
        {{-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
            <li class="active">Antrian</li>
        </ol> --}}
        </section>
        <section class="content">

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
        <form role="form">
            <div class="form-group">
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
    </form>
    </div>
</div>
@endsection