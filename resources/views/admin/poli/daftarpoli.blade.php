<div class="modal modal-info fade" id="daftarpoli">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">DAFTAR POLI</h4>
        </div>
        <div class="modal-body">
            <div class="box">
                <div class="box-header">
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered">
                        <thead>
                        <tr>
                        <th>No</th>
                        <th>Nama Poli</th>
                        <th>Kode</th>
                        </tr>
                        </thead>
                        <?php $no=0;?>
                        @foreach ($department as $d)
                        <?php $no++;?>    
                        <tr>
                            <td>{{$no}}</td>
                            <td>{{$d->nama}}</td>
                            <td>{{$d->kode}}</td>
                        </tr>
                        @endforeach
                    </table>
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