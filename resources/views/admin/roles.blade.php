@extends('admin.masteradmin')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content">
        <!-- Main content -->
        <section class="content-header">
        <h1>
            Roles 
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
                    <th>Roles</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Paijo</td>
                    <td>paijo@gmail.com</td>
                    <td>user</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Alexander Pierce</td>
                    <td>Alex@yahoo.com</td>
                    <td>admin</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bob Doe</td>
                    <td>bob@gmail.com</td>
                    <td>user</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mike Doe</td>
                    <td>mike@gmail.com</td>
                    <td>user</td>
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
        <label >Nama </label>
        <input type="name" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
        <label >Email </label>
        <input type="name" name="email" class="form-control" id="email" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
            <label>Roles</label>
            <select class="form-control" name="roles">
                <option>Admin</option>
                <option>User</option>
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