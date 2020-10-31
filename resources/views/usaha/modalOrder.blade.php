<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModal" aria-hidden="true" style="margin-top:5%;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="createModalLabel">Anda Belum Melakukan Otentikasi</h5>
      </div>
      <div class="modal-body">
        <div class="text-center">
          <a class="btn btn-success" href="{{route('register')}}">Mendaftar</a>
          atau
          <a class="btn btn-info" href="{{route('login')}}">Masuk</a>
        </div>
        <hr>
        <p>Isi formulir pemesanan berikut untuk melakukan pemesanan tanpa melakukan pendaftaran. </p>
        <form method="POST" action="{{route('checkoutNonAuth')}}" autocomplete="off" enctype="multipart/form-data">
          @csrf
          <input type="text" name="toko" value="{{$usaha->slug}}" style="display:none">
          <div class="form-group">
            <label for="nama" class="col-form-label">Nama</label>
            <div class="input-group">
              <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
          </div>
          <input type="text" class="form-control" name="toko" value="{{$usaha->slug}}" required style="display:none">
          <div class="form-group">
            <label for="notelp" class="col-form-label">No. Telpon</label>
            <div class="input-group">
              <input type="text" class="form-control" id="no_hp" name="no_hp" required>
            </div>
          </div>
          <div class="form-group">
            <label for="alamat" class="col-form-label">Alamat Pengiriman</label>
            <textarea class="form-control" name="deskripsi" id="alamat" rows="4" cols="10" required></textarea>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-success">Pesan Sekarang</button>
      </form>
      </div>
    </div>
  </div>
</div>
