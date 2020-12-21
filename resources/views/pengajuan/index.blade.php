@extends('layouts.main')

@section('title', "Pengajuan Bahan")

@section('css')
<link href="{{ asset('main/vendors/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{ asset('main/vendors/bower_components/summernote/dist/summernote.css') }}" />
<link rel="stylesheet" href="{{ asset('main/css/custom.css') }}">

@endsection
@section('content')
    <div class="container-fluid">
      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="txt-dark">Pengajuan Bahan</h4>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="{{route('dashboard')}}">Dasbor</a></li>
          <li class="active"><a href="#">Pengajuan Bahan</a></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      <!-- Row -->
      <div class="row">
        <div class="col-md-12">
          <!-- Product List -->
          <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="table-wrap">
                      <div class="table-responsive">
                          <table id="example" class="table table-hover display  pb-30" >
                          @role('produsen')
                          <thead>
                            <tr>
                              <th>Tanggal</th>
                              <th>Jumlah Bahan</th>
                              <th>Kategori</th>
                              <th>Kode Pemesanan</th>
                              <th>Status</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>

                          <tbody>
                                @foreach ($pengajuan as $pengajuans)
                                <tr>
                                  <td>{{$pengajuans['created_at']}}</td>
                                  <td>{{$pengajuans['jumlah_bahan']}} kg</td>
                                  <td>{{$pengajuans['kategori_kedelai']}}</td>
                                  <td>{{$pengajuans['id_kode_pemesanan']}}</td>
                                  <td>{{$pengajuans['status']}}</td>
                                  <td>
                                    <a class="btn btn-danger btn-icon-anim btn-square btn-sm" href="/pengajuan-bahan/batal/{{$pengajuans['id']}}" onclick="return confirm('Apakah yakin untuk membatalkan pengajuan ini?')"><i class="fa fa-trash-o"></i></a>
                                  </td>
                                </tr>
                                @endforeach
                          </tbody>
                          @endrole

                          @role('admin')
                          <thead>
                            <tr>
                              <th>Tanggal</th>
                              <th>Pengusaha</th>
                              <th>Supplier</th>
                              <th>Kategori kedelai</th>
                              <th>Jumlah Bahan</th>
                              <th>Kode Pemesanan</th>
                              <th>Status</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>

                          <tbody>
                                @foreach ($pengajuan as $pengajuans)
                                <tr>
                                  <td>{{$pengajuans['created_at']}}</td>
                                  <td>{{$pengajuans->usaha->nama}}</td>
                                  <td>@if(!is_null($pengajuans['id_supplier'])){{$pengajuans->supplier->nama}}@else <i style="color:red">Supplier dipilih</i>@endif</td>
                                  <td>{{$pengajuans['kategori_kedelai']}}</td>
                                  <td>{{$pengajuans['jumlah_bahan']}} kg</td>
                                  <td>{{$pengajuans['id_kode_pemesanan']}}</td>
                                  <td><div class="dropdown">
                                    <?php
                                        switch ($pengajuans->status) {
                                          case 'mencari':
                                            $type = 'warning';
                                            break;
                                          case 'pengujian':
                                            $type = 'info';
                                            break;
                                          case 'pengiriman':
                                            $type = 'danger';
                                            break;
                                          case 'selesai':
                                            $type = 'success';
                                            break;
                                        }
                                     ?>
                                    <button class="btn btn-{{$type}} dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $pengajuans['status']; ?>
                                    </button>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <li>Ubah Status</li>
                                <a class="dropdown-item" href="/pengajuan-bahan/{{$pengajuans['id']}}/mencari"><li><span class="btn btn-warning btn-icon-anim">Mencari</span></li></a>
                                <a class="dropdown-item" href="/pengajuan-bahan/{{$pengajuans['id']}}/pengujian"><li><span class="btn btn-info btn-icon-anim">Pengujian</span></li></a>
                                <a class="dropdown-item" href="/pengajuan-bahan/{{$pengajuans['id']}}/pengiriman"><li><span class="btn btn-danger btn-icon-anim">Pengiriman</span></li></a>
                                <a class="dropdown-item" href="/pengajuan-bahan/{{$pengajuans['id']}}/selesai"><li><span class="btn btn-success btn-icon-anim">Selesai</span></li></a>
                              </div>
                            </ul></td>
                                  <td>
                                    <a class="btn btn-warning btn-icon-anim btn-square btn-sm" href="/pengajuan-bahan/admin/?pop={{$pengajuans['id']}}"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger btn-icon-anim btn-square btn-sm" href="/pengajuan-bahan/{{$pengajuans['id']}}/batal" onclick="return confirm('Apakah yakin untuk membatalkan pengajuan ini?')"><i class="fa fa-trash-o"></i></a>
                                  </td>
                                </tr>
                                @endforeach
                          </tbody>
                          @endrole
                        </table>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      @if(isset($pop) && $pop !="")
          @include('pengajuan.include.admin_supplier')
      @endif
      <!-- /Row -->
@endsection

@section('js')
<script src="{{ asset('main/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<!-- <script src="{{ asset('main/vendors/bower_components/jszip/dist/jszip.min.js') }}"></script> -->
<!-- <script src="{{ asset('main/vendors/bower_components/pdfmake/build/pdfmake.min.js') }}"></script> -->
<script src="{{ asset('main/vendors/bower_components/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('main/js/export-table-data.js') }}"></script>

<script src="{{ asset('main/vendors/bower_components/summernote/dist/summernote.min.js') }}"></script>
<script src="{{ asset('main/js/summernote-simple.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
<script src="{{ asset('main/js/form-file-upload-data.js') }}"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('.price').mask('00.000.000,-', {reverse: true});
  $(".share").click(function() {
    var id = $(this).attr("id");
      $("#i-"+id+"").show();
      var copyText = document.getElementById("i-"+id+"");
      copyText.select();
      copyText.setSelectionRange(0, 99999);
      document.execCommand("copy");
      console.log(copyText.value);
      $("#i-"+id+"").hide();
      alert("Tautan telah disalin")
  });

  $( ".nama" ).keyup(function(){
    var nama  = $('.nama').val()
    var slug  = $('.slug').val(nama.toString().toLowerCase().normalize('NFD').trim().replace(/\s+/g, '-').replace(/[^\w\-]+/g, '').replace(/\-\-+/g, '-'));
    var slugP = $('.slug-prev').text($('.slug').val());
  });
  $( ".nama-e" ).keyup(function(){
    var nama  = $('.nama-e').val()
    var slug  = $('.slug-e').val(nama.toString().toLowerCase().normalize('NFD').trim().replace(/\s+/g, '-').replace(/[^\w\-]+/g, '').replace(/\-\-+/g, '-'));
    var slugP = $('.slug-prev-e').text($('.slug-e').val());
  });
});

@if(isset($pop) && $pop != "")
  console.log('pop keluar!!');
    $(window).on('load',function(){
      $('#popModal').modal('show');
    });
@endif

</script>
@if(isset($edit) && $edit != "")
    @include('produk.include.edit')
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#editModal').modal('show');
            var nama  = $('.nama-e').val()
            var slug  = $('.slug-e').val(nama.toString().toLowerCase().normalize('NFD').trim().replace(/\s+/g, '-').replace(/[^\w\-]+/g, '').replace(/\-\-+/g, '-'));
            var slugP = $('.slug-prev-e').text($('.slug-e').val());
        });
        $
    </script>
@endif
@endsection
