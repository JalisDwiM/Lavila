@extends('admin.masteradmin')
@section('content')

<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content container-fluid ">
    
    <form action="{{url('/pesan/store')}}" method="POST" role="form">
        {{csrf_field()}}
        <div class="form-group">
            <label>Nama </label>
            <input type="text" class="form-control" name="name" value="{{ auth()->user()->name}}" placeholder="Masukkan Nama">
        </div>
        
        <div class="form-group">
            <label>Email </label>
            <input type="email" class="form-control" name="email" value="{{ auth()->user()->email}}" placeholder="Masukkan email">
        </div>
        
        <div class="form-group">
            <label>Kritik dan Saran </label>
            <textarea cols="8" rows="10" class="form-control" name="review" value="" placeholder="Masukkan Pesan"></textarea>
        </div>
        
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Kirim</button>
        </div>
            
    </form>
    </section>
</div>

@endsection