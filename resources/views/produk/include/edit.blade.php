<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Edit Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="/produksi/sunting/{{$edit['slug']}}" autocomplete="off" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name_edit" class="col-form-label">Nama produk</label>
            <input type="text" class="form-control nama-e" id="name_edit" name="nama" value="{{$edit['nama']}}" required>
            <p>Url akses: <i style="color: green;">{{route('landing')}}/{{$usaha->slug}}/<span class="slug-prev-e">{{$edit['slug']}}</span></i></p>
          </div>
          <div class="form-group">
						<input type="text" class="form-control slug-e" id="slug_edit" name="slug" value="{{$edit['slug']}}" required style="display:none">
          </div>
          <div class="form-group">
            <label for="deskripsi_edit" class="col-form-label">Deskripsi produk</label>
            <textarea class="summernote" name="deskripsi" id="deskripsi_edit" rows="2" cols="10" required style="height: 30px">{{$edit['deskripsi']}}</textarea>
          </div>
          <div class="form-group">
            <label for="price_edit" class="col-form-label">Harga produk</label>
            <div class="input-group">
              <div class="input-group-addon">Rp</div>
							<input type="number" class="form-control price" id="price_edit" name="harga" value="{{$edit['harga']}}" required>
						</div>
          </div>
          <div class="form-group">
            <label for="kebutuhan_bahan_edit" class="col-form-label">Kedelai yang dibutuhkan per produk</label>
            <div class="input-group">
							<input type="number" class="form-control" id="kebutuhan_bahan_edit" name="kebutuhan_bahan" value="0" step="0.1" value="{{$edit['kebutuhan_bahan']}}" required>
							<div class="input-group-addon">Kg</div>
						</div>
          </div>
          <div class="form-group">
            <label for="gambar_edit" class="col-form-label">Gambar</label>
						<input type="file" id="gambar_edit" name="gambar" class="dropify" data-default-file="{{asset($edit['gambar'])}}">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </form>
      </div>
    </div>
  </div>
</div>
