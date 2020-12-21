<div class="modal fade" id="stokModal" tabindex="-1" role="dialog" aria-labelledby="stokModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stokModalLabel">Perbarui Bahan Baku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="">
          @csrf
          <input type="text" name="slug" value="{{$usaha['slug']}}" style="display:none">
          <div class="form-group">
            <label for="amount" class="col-form-label">Jumlah Bahan:</label>
            <input type="number" name="jumlah_bahan" class="form-control" id="amount" value="{{$usaha['jumlah_bahan']}}">
          </div>
          <div class="form-group">
            <label for="kualitas_bahan" class="col-form-label">Kategori Bahan:</label>
            <select class="form-control" name="kualitas_bahan" id="kualitas_bahan">
              @foreach($data_kategori as $key=>$kategori)
              <option value="{{$kategori->nama}}">{{$kategori->nama}}</option>
              @endforeach
            </select>
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
