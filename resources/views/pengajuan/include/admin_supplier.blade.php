<div class="modal fade" id="popModal" tabindex="-1" role="dialog" aria-labelledby="popModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="popModalLabel">Edit Supplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/pengajuan-bahan/editsupplier/{{$pop->id}}" autocomplete="off" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="supplier" class="col-form-label"><i class="glyphicon glyphicon-grain mr-20"></i>Nama Supplier</label>
              <select class="form-control" name="supplier" id="exampleFormControlSelect1">
                @foreach($data_supplier as $key=>$supplier)
                <option value="{{$supplier->nama}}">{{$supplier->nama}} - {{$supplier->kategori}}</option>
                @endforeach
              </select>
            </div>
          <!-- <div class="form-group">
            <label for="kategori" class="col-form-label">Kategori Kedelai</label>
              <select class="form-control" name="kategori" id="exampleFormControlSelect1">
                @foreach($data_supplier as $key=>$supplier)
                <option value="$supplier->kategori"></option>
                @endforeach
              </select>
            </div> -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Perbarui</button>
      </form>
      </div>
    </div>
  </div>
</div>
