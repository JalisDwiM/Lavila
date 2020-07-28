<div class="modal modal-success fade" id="tambahpoli">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">FORM TAMBAH POLI</h4>
        </div>
        <div class="modal-body">
            <div class="box">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{url('/tambahpoli')}}" method="POST" role="form">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Pilih Poli</label>
                            <select name="poli" class="form-control">
                                <option>Poli umum</option>
                                <option>Poli Gigi</option>
                                <option>Poli Anak</option>
                                <option>Poli Penyakit Dalam</option>
                            </select>
                            </div>
                        
                        <div class="form-group">
                            <label>Kode </label>
                            <input type="text" class="form-control" name="kode" value="" placeholder="Masukkan Kode Poli">
                        </div>

                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                            
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
        <!-- /.box -->
        <div class="modal-footer">
            <button type="button" class="btn btn-outline center" data-dismiss="modal">Close</button>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->