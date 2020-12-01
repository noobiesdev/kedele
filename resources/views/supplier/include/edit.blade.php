<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/userAdmin/update/{{$edit->username}}" autocomplete="off" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="username" class="col-form-label">Nama Pengguna</label>
            <div class="input-group">
              <div class="input-group-addon">@</div>
							<input type="text" class="form-control" id="username" name="username" value="{{$edit->username}}" placeholder="ID Pengguna (Unik)" disabled>
						</div>
          </div>
          <div class="form-group">
            <label for="nama" class="col-form-label">Nama Lengkap</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-user"></i></div>
							<input type="text" class="form-control" id="nama" name="nama" value="{{$edit->nama}}" placeholder="Nama Lengkap" required>
						</div>
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
							<input type="email" class="form-control" id="email" name="email" value="{{$edit->email}}" placeholder="Alamat Surel" required>
						</div>
          </div>
          <div class="form-group">
            <label for="no_hp" class="col-form-label">Nomor Handphone</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-phone"></i></div>
							<input type="text" class="form-control phone" id="no_hp" name="no_hp" value="{{$edit->no_hp}}" placeholder="Nomor Handphone" required>
						</div>
          </div>
          <div class="form-group">
            <label class="control-label mb-10" for="katasandi">Kata Sandi</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-lock"></i></div>
              <input type="password" class="form-control" id="katasandi" name="password" placeholder="Kata Sandi" value="">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label mb-10" for="alamat">Alamat</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-lock"></i></div>
              <textarea class="form-control" name="alamat" id="alamat" rows="2" cols="80">{{$edit->alamat}}</textarea>
            </div>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Perbarui</button>
      </form>
      </div>
    </div>
  </div>
</div>
