<div class="modal fade" id="waModal" tabindex="-1" role="dialog" aria-labelledby="waModal" aria-hidden="true" style="margin-top:5%;">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="createModalLabel">Saran untuk interaksi lebih lanjut</h5>
      </div>
      <div class="modal-body">
        <div class="">
          <h4 class="text-center">Pesanan sudah tercatat, untuk dapat berinteraksi dengan dapat diteruskan melalui whatsapp</h4>
          <?php $msg = Session::get('message');$raw = Session::get('raw'); ?>
          <code>{{$raw}}</code>
        </div>
      </div>
      <div class="modal-footer">
        <a target="_blank" class="btn btn-md btn-success" href="https://api.whatsapp.com/send?phone={{$usaha->user->no_hp}}&text={{$msg}}"> <i class="fa fa-whatsapp"></i> Whatsapp</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
