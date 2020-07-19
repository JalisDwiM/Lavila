@extends('user.masteruser')
@section('content')


<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    @include('flash_message')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Ambil Antrian 
    <small>Silahkan pilih jadwal yang tersedia</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
    <li class="active">Antrian</li>
    </ol>
</section>
<section class="content">

<!-- form start -->
<form role="form">
<div class="form-group">
    <label for="exampleInputName">Nama </label>
    <input type="email" class="form-control" id="exampleInputName" placeholder="Masukkan Nama">
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
<div class="box-footer">
<button type="submit" class="btn btn-primary">Cetak</button>
</div>
</form>
<!-- Main content -->
<section class="content container-fluid">

    <!--------------------------
    | Your Page Content Here |
    -------------------------->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
    
@endsection