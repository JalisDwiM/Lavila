@extends('admin.masteradmin')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content">
        <!-- Main content -->
        <section class="content-header">
        <h1>
            Review Kritik Saran 
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
                    <th>Score</th>
                    <th>Deskripsi</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Paijo</td>
                    <td>9</td>
                    <td>sistem masih ada bug yang perlu di perbaiki minn</td>
                </tr>
                </table>
            </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</div>

    
@endsection