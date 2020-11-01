<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">Tambah Pengguna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('admin.store')}}" autocomplete="off" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="role" class="col-form-label">Mendaftar Sebagai</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="fa fa-crosshairs"></i></div>
              <select class="form-control" name="role">
                <option value="konsumen"><span class="fa fa-cutlery"></span> Konsumen</option>
                <option value="produsen"><span class="fa fa-briefcase"></span> Produsen</option>
                <option value="admin"><span class="fa fa-star"></span> Admin</option>
              </select>
						</div>
          </div>
          <div class="form-group">
            <label for="username" class="col-form-label">Nama Pengguna</label>
            <div class="input-group">
              <div class="input-group-addon">@</div>
							<input type="text" class="form-control" id="username" name="username" placeholder="ID Pengguna (Unik)" required>
						</div>
          </div>
          <div class="form-group">
            <label for="nama" class="col-form-label">Nama Lengkap</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-user"></i></div>
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required>
						</div>
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
							<input type="email" class="form-control" id="email" name="email" placeholder="Alamat Surel" required>
						</div>
          </div>
          <div class="form-group">
            <label for="no_hp" class="col-form-label">Nomor Handphone</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-phone"></i></div>
							<input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Handphone" required>
						</div>
          </div>
          <div class="form-group">
            <label class="control-label mb-10" for="katasandi">Kata Sandi</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-lock"></i></div>
              <input type="password" class="form-control" id="katasandi" name="password" placeholder="Kata Sandi" value="" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label mb-10" for="alamat">Alamat</label>
            <div class="input-group">
              <div class="input-group-addon"><i class="icon-lock"></i></div>
              <textarea class="form-control" name="alamat" id="alamat" rows="2" cols="80"></textarea>
            </div>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Tambah Pengguna</button>
      </form>
      </div>
    </div>
  </div>
</div>
