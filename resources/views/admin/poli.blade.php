@extends('admin.masteradmin')
@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="callout callout-info">
    
    <h3>DAFTAR POLI</h3>
    
</section>
<section class="content">

    <!-- Small boxes (Stat box) -->
    <div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
        <div class="inner">
            <h3>170</h3>

            <p>Poli Umum</p>
        </div>
        <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
        <a href="" data-toggle="modal" data-target="#poliumum" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>43</h3>
                
                <p>Poli Gigi</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="" data-target="#poligigi" data-toggle="modal" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>90</h3> 
                
                <p>Poli Anak</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="" data-toggle="modal" data-target="#polianak" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
        <div class="inner">
            <h3>65</h3>
            
            <p>Poli Penyakit dalam</p>
        </div>
        <div class="icon">
            <i class="ion ion-pie-graph"></i>
        </div>
        {{-- <button type="button" class="btn btn-info small-box-footer" data-toggle="modal" data-target="#polipenyakitdalam">More info</button> --}}
        <a href="" data-toggle="modal" data-target="#polipenyakitdalam" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
<!-- ./col -->
</div>
@include('admin.poli.poliumum')
@include('admin.poli.poligigi')
@include('admin.poli.polianak')
@include('admin.poli.polipenyakitdalam')
</div>
@endsection