    <!-- form start -->
    <link rel="stylesheet" href="{{ asset('frontend')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <script src="{{ asset('frontend')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<div class="container">

    <h1>Form Edit Data Dokter</h1>

<div class="row">
    <div class="col-xs-10">
    <form role="form" action="/admin/dokter/{{$dokter->id}}/update" method="POST" id="formedit">
        {{csrf_field()}}
            <div class="form-group">
                <label >Nama Dokter </label>
                <input type="name" name="nama" class="form-control" placeholder="Masukkan Nama" value="{{$dokter->nama}}">
        </div>
        <div class="form-group">
        <label>No Telepon </label>
        <input type="name" name="telepon" class="form-control" placeholder="No Telepon" value="{{$dokter->telepon}}">
        </div>
        <!-- spesialis -->
        <div class="form-group">
            <label>Spesialis</label>
            <select class="form-control" name="spesialis" >
                <option value="Mata" @if($dokter->spesialis == 'Mata') selected @endif>Mata</option>
                <option value="Gizi" @if($dokter->spesialis == 'Gizi') selected @endif>Gigi</option>
                <option value="Anak" @if($dokter->spesialis == 'Anak') selected @endif>Anak</option>
                <option value="Kanker" @if($dokter->spesialis == 'Kanker') selected @endif>Kanker</option>
                <option value="Saraf" @if($dokter->spesialis == 'Saraf') selected @endif>Saraf</option>
                <option value="Penyakit Dalam" @if($dokter->spesialis == 'Penyakit Dalam') selected @endif>Penyakit Dalam</option>
            </select>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        <br><br>
    </form>
    </div>
</div>
</div>
