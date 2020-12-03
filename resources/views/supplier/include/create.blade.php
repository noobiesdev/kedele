<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">Tambah Supplier</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('supplier.store')}}" autocomplete="off" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="nama" class="col-form-label">Nama Supplier</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-user"></i></div>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Supplier" required>
						</div>
          </div>
          <div class="form-group">
            <label for="alamat" class="col-form-label">Alamat</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
							<textarea class="form-control" name="alamat" id="alamat" rows="2" cols="80"></textarea>
						</div>
          </div>
          <div class="form-group">
            <label for="no_hp" class="col-form-label">Nomor Handphone/Whatsapp</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-phone"></i></div>
							<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Handphone" required>
						</div>
          </div>
          <div class="form-group">
            <label for="kategori" class="col-form-label">Kategori Kedelai</label>
              <select class="form-control" name="kategori" id="exampleFormControlSelect1">
                @foreach($kategori as $key=>$ktg)
                <option value="{{$ktg->nama}}">{{$ktg->nama}}</option>
                @endforeach
              </select>
            </div>
          <div class="form-group">
            <label class="control-label mb-10" for="twitter">Twitter</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-twitter"></i></div>
              <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter" value="" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label mb-10" for="Facebook">Facebook</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-facebook"></i></div>
              <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook" value="" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label mb-10" for="instagram">Instagram</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-instagram"></i></div>
              <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram" value="" >
            </div>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Tambah Supplier</button>
      </form>
      </div>
    </div>
  </div>
</div>
