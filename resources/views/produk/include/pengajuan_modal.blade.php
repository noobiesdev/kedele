<div class="modal fade" id="pengajuanModal" tabindex="-1" role="dialog" aria-labelledby="pengajuanModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pengajuanModalLabel">Pengajuan Bahan Baku</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{route('pengajuan-bahan.store')}}">
          @csrf
          <div class="form-group">
            <label for="amount" class="col-form-label">Jumlah Bahan:</label>
            <input type="number" name="jumlah_bahan" class="form-control" id="amount" value="{{$usaha['jumlah_bahan']}}">
          </div>
          <div class="form-group">
            <label for="kategori" class="col-form-label">Kategori Bahan:</label>
            <select class="form-control" name="kategori" id="kategori">
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
