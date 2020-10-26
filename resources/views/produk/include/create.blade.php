<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="createModalLabel">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('produksi.store')}}" autocomplete="off" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="name" class="col-form-label">Nama produk</label>
            <input type="text" class="form-control nama" id="name" name="nama" required>
              <p>Url akses: <i style="color:green;">{{route('landing')}}/{{$usaha->slug}}/<span class="slug-prev"></span></i></p>
          </div>
          <div class="form-group">
						<input type="text" class="form-control slug" id="slug" name="slug"  required style="display:none">
          </div>
          <div class="form-group">
            <label for="deskripsi" class="col-form-label">Deskripsi produk</label>
            <textarea class="summernote" name="deskripsi" id="deskripsi" rows="2" cols="10" required style="height: 30px"></textarea>
          </div>
          <div class="form-group">
            <label for="price" class="col-form-label">Harga produk</label>
            <div class="input-group">
              <div class="input-group-addon">Rp</div>
							<input type="number" class="form-control price" id="price" name="harga" required>
						</div>
          </div>
          <div class="form-group">
            <label for="kebutuhan_bahan" class="col-form-label">Kedelai yang dibutuhkan per produk</label>
            <div class="input-group">
							<input type="number" class="form-control" id="kebutuhan_bahan" name="kebutuhan_bahan" value="0" step="0.1" required>
							<div class="input-group-addon">Kg</div>
						</div>
          </div>
          <div class="form-group">
            <label for="gambar" class="col-form-label">Gambar</label>
						<input type="file" id="bukti" name="gambar" class="dropify">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Tambah Produk</button>
      </form>
      </div>
    </div>
  </div>
</div>
