@extends('admin.masteradmin')
@section('content')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content">
        <!-- Main content -->
        <section class="content-header">
        <h1>
            Jadwal Dokter 
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
                        <th>Poli</th>
                        <th>Kuota</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                    </tr>
                    <?php $no=0; ?>
                    @foreach ($schedules as $u)

                    <?php $no++;?>
                    <tr>
                    <td>{{$no}}</td>
                    <td>{{$u->user->name}}</td>
                    <td>{{$u->poli}}</td>
                    <td>{{$u->kuota}}</td>
                    <td>{{$u->date}}</td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                @endforeach

                </table>
            </div>
            <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        </div>
    
    <!-- /.content -->

    <!-- form start -->
    <form action="{{url('/jadwal/store')}}" method="POST" role="form">
        {{csrf_field()}}
        <div class="form-group">
        <label >Nama Dokter </label>
        <select name="user_id" class="form-control">
        @foreach($users as $d)
        @foreach($d->roles as $r)
            <option value="{{$d->id}}">{{$d->name}}</option>
        @endforeach
        @endforeach
        </select>
        </div>
        <!-- Poli -->
        <div class="form-group">
        <label>Pilih Poli</label>
        <select name="poli" class="form-control">
            <option>Poli umum</option>
            <option>Poli Gigi</option>
            <option>Poli Anak</option>
            <option>Poli Penyakit Dalam</option>
        </select>
        </div>
            {{-- <form role="form"> --}}
            <div class="form-group">
                <label>Kuota Antrian</label>
                <input type="text" name="kuota" class="form-control" id="kuota" placeholder="Masukkan kuota">
            </div>
        <!-- Date -->
        <div class="form-group">
        <label>Date:</label>
        
        <div class="input-group date">
        <div class="input-group-addon">
            <i class="fa fa-calendar"></i>
        </div>
        <input type="text" name="date" class="form-control pull-right datepicker" id="date">
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
    </form>



</div>


@endsection