@extends('layouts.main')

@section('title', "Produksi")

@section('css')
<link href="{{ asset('main/vendors/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{ asset('main/vendors/bower_components/summernote/dist/summernote.css') }}" />
<link rel="stylesheet" href="{{ asset('main/css/custom.css') }}">

@endsection
@section('content')
    @if(isset($edit) && $edit != "")
        @include('produk.include.edit')
    @endif
    <div class="container-fluid">
      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="txt-dark">Produksi</h4>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="{{route('dashboard')}}">Dasbor</a></li>
          <li><a href="#">Produksi</a></li>
          <li class="active"><span>Produk</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      <!-- Row -->
      <div class="row">
				<div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
					<div class="panel panel-default card-view pa-0" id="green-gr">
						<div class="panel-wrapper collapse in">
							<div class="panel-body pa-0">
								<div class="sm-data-box">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
												<span class="txt-light block counter"><span class="counter-anim">{{$usaha['jumlah_bahan']}}</span> kg</span>
												<span class="weight-500 uppercase-font block font-13 txt-light">Bahan Baku Tersedia</span>
											</div>
											<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
												<img class="imgcon" src="{{asset('img/i_produksi_kedelai.png')}}" alt="">
                        <a class="btn btn-info btn-sm smbt btn-rounded btn-block btn-anim mt-5" data-toggle="modal" data-target="#stokModal"><i class="fa fa-pencil"></i><span class="btn-text">Perbarui</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
					<div class="panel panel-default card-view pa-0" id="orange-gr">
						<div class="panel-wrapper collapse in">
							<div class="panel-body pa-0">
								<div class="sm-data-box">
									<div class="container-fluid">
										<div class="row">
											<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
                        <span class="weight-500 uppercase-font block txt-light">Ajukan Permintaan Bahan</span>
												<span class="txt-light block counter">Kategori {{$usaha['kualitas_bahan']}}</span>
											</div>
											<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
												<img class="imgcon" src="{{asset('img/i_ajukan_bahan.png')}}" alt="">
                        <a class="btn btn-danger btn-sm smbt btn-rounded btn-block btn-anim mt-5" data-toggle="modal" data-target="#stokModal"><i class="fa fa-pencil"></i><span class="btn-text">Perbarui</span></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
        @include('produk.include.edit_stok')
			</div>
      <div class="row">
        <div class="col-md-9">
          <!-- Info -->
          <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
              <div class="panel-body p-norm">
                <div class="row">
                  <div class="col-sm-12">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">Tambah Produk</button>
                    @include('produk.include.create')
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product List -->
          <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="table-wrap">
                      <div class="table-responsive">
                          <table id="example" class="table table-hover display  pb-30" >
                          <thead>
                            <tr>
                              <th>Produk</th>
                              <th>Gambar</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>

                          <tbody>
                            @foreach ($usaha->produks as $key => $value)
                            <tr>
                              <td width="60%">
                                <strong class="product-name">{{$value['nama']}}</strong><br>
                                <p>Rp {{number_format($value['harga'],0,",",".")}}</p>
                								<a href="{{route('landing')}}/{{$usaha->slug}}/{{$value['slug']}}" class="pr-a"><i class="fa fa-eye"></i> Tinjau</a>
                                <a href="javascript:void(0)" class="pr-a share" id="{{$key}}"><i class="fa fa-share-square-o" onclick="copy()"></i> Bagikan</a>
                                <input type="text" id="i-{{$key}}" value="{{route('landing')}}/{{$usaha->slug}}/{{$value['slug']}}" hidden>
                              </td>
                              <td width="%"><img src="{{asset($value['gambar'])}}" alt="{{$value['name']}}" style="height:90px;"> </td>
                              <td>
                                <a class="btn btn-warning btn-icon-anim btn-square btn-sm" href="/produksi/?produk={{$value['slug']}}"><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-danger btn-icon-anim btn-square btn-sm" href="/produksi/hapus/?produk={{$value['slug']}}" onclick="return confirm('Apakah yakin untuk menghapus produk ini?\n Produk yang dihapus diakan membatalkan pesanan dan tidak dapat dikembalikan')"><i class="fa fa-trash-o"></i></a>
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
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



</script>
@if(isset($edit) && $edit != "")
    @include('produk.include.edit')
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#editModal').modal('show');
        });
    </script>
@endif
@endsection
