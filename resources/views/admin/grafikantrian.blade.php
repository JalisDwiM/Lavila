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
    <section class="content">
        <!-- /.row -->
    <!-- Main row -->
    <div class="row">
        <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
        <div class="card">
            <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Sales
            </h3>
            <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                </li>
                </ul>
            </div>
            </div><!-- /.card-header -->
            <div class="card-body">
            <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart"
                    style="position: relative; height: 300px;">
                    <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                </div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>                         
                </div>  
            </div>
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- /.card -->
        </section>
        <!-- /.Left col -->
    </div>
</div>
<!-- ./wrapper -->

@endsection