@extends('admin.masteradmin')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('flash_message')

        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="callout callout-info">
            <h3>
            Jadwal Antrian Anda 
            <small>10.00 WIB - Jumat, 10 Juli 2010</small>
            </h3>
            <h4>Di Poli Umum</h4>
        </div>

        <h4>Usahakan datang tepat waktu sesuai jadwal antrian Anda, karena disiplin itu baik</h4>
        <h1></h1>
        <h3>JUMLAH ANTRIAN HARI INI</h3>
        
        
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
            <li class="active">Beranda</li>
        </ol>
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
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
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
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
            </div>
            <!-- ./col -->
        </div>

        <!-- Main content -->
        <section class="content container-fluid">

        <!--------------------------
            | Your Page Content Here |
            -------------------------->

        </section>
        <!-- /.content -->
    </div>
    <script type="text/javascript">
        window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 5000);
    </script>
    <!-- /.content-wrapper -->
    
@endsection