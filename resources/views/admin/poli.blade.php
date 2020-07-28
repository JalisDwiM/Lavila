@extends('admin.masteradmin')
@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="callout callout-info">
    
    <h3>DAFTAR POLI</h3>
    </div>
</section>
<section class="content">

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
        <div class="inner">
            <h3>{{$jmldepart}}</h3>

            <p>Daftar Poli</p>
        </div>
        <div class="icon">
            <i class="ion ion-stats-bars"></i>
        </div>
        <a href="" data-toggle="modal" data-target="#daftarpoli" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>{{$jmldepart}}</h3>
                
                <p>Tambah Data Poli</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="" data-target="#tambahpoli" data-toggle="modal" class="small-box-footer">Tambah Data <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    </div>
    <!-- ./col -->
</section>
</div>
@include('admin.poli.daftarpoli')
@include('admin.poli.tambahpoli')


@endsection