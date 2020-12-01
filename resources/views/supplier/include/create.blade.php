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
        <form method="POST" action="{{route('admin.store')}}" autocomplete="off" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="nama" class="col-form-label">Nama Lengkap</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-user"></i></div>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
						</div>
          </div>
          <div class="form-group">
            <label for="maps" class="col-form-label">Maps</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
							<textarea class="form-control" name="facebook" id="facebook" rows="2" cols="80"></textarea>
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
            <label class="control-label mb-10" for="twitter">Twitter</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-lock"></i></div>
              <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter" value="" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label mb-10" for="Facebook">Facebook</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-lock"></i></div>
              <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook" value="" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label mb-10" for="instagram">Instagram</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-lock"></i></div>
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
