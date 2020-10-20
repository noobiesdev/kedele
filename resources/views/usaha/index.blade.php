@extends('layouts.main')

@section('title', "Profil Usaha")

@section('css')
<link href="{{ asset('main/vendors/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('main/vendors/bower_components/switchery/dist/switchery.min.css') }}" rel="stylesheet" type="text/css">
<style media="screen">
  .switchery{

  }
</style>
@endsection

@section('content')
    <div class="container-fluid">

      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="txt-dark">Profil Usaha</h4>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="{{route('dashboard')}}">Dasbor</a></li>
          <li class="active"><span>Profil Usaha</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      <div class="col-lg-12 col-xs-12">
  			<div class="panel panel-default card-view pa-0">
  				<div class="panel-wrapper collapse in">
  					<div class="panel-body">
              <div class="col-md-12">
                <ul>
                  <li>Status:
                    @if ($usaha['status'] == 'act')
                      <span class="badge badge-success">Aktif</span>
                  </li>
                  <li>Aktif Sampai: <strong>{{$usaha['masa_aktif']}}</strong></li>
                    @else
                      <span class="badge badge-danger">Tidak Aktif</span>
                    </li>
                    @endif
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Row -->
      <div class="col-lg-12 col-xs-12">
  			<div class="panel panel-default card-view pa-0">
  				<div class="panel-wrapper collapse in">
  					<div class="panel-body pb-0">
  						<div class="tab-struct custom-tab-1">
  							<ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
  								<li class="active" role="presentation"><a data-toggle="tab" id="umum_tab" role="tab" href="#umum" aria-expanded="false"><span>Umum</span></a></li>
  								<li role="presentation" class=""><a data-toggle="tab" id="kepemilikan_tab" role="tab" href="#kepemilikan" aria-expanded="false"><span>Kepemilikan</span></a></li>
  							</ul>
  							<div class="tab-content" id="myTabContent_8">
  								<div id="umum" class="tab-pane fade active in" role="tabpanel">
  									<div class="col-md-12">
  										<div class="pt-20">
                        <form method="post" action="{{route('usaha.update')}}">
                          @csrf
                          <div class="form-body overflow-hide">
                            <div class="form-group">
                              <label class="control-label mb-10" for="nama">Nama Usaha</label>
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                <input type="text" class="input100 form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Nama Usaha" value="{{$usaha['nama']}}" required>
                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label mb-10" for="nama">Tautan Toko</label>
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-link"></i></div>
                                <input type="text" class="input100 form-control @error('slug') is-invalid @enderror" name="slug" id="slug" placeholder="Tautan akses ke toko" value="{{$usaha['slug']}}" required>
                                @error('slug')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label mb-10" for="nama">Deskripsi</label>
                              <div class="input-group">

                                <div class="input-group-addon"><i class="fa fa-list-alt"></i></div>
                                <textarea class="input100 form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" rows="8" cols="40">{{$usaha['deskripsi']}}</textarea>
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>

                          </div>
                          <div class="form-actions mt-10">
                            <button type="submit" class="btn btn-success mr-10 mb-30">Simpan</button>
                          </div>
                        </form>
  										</div>
  									</div>
  								</div>
  								<div id="kepemilikan" class="tab-pane fade" role="tabpanel">
                    <div class="col-md-12">
  										<div class="pt-20">
                        <form method="post" action="{{route('usaha.update')}}" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                            <div class="input-group">
                              <div class="input-group-addon">Memiliki NPWP</div>
                              <input type="checkbox" @if($usaha['has_npwp'] == 1) checked @endif class="js-switch" name="has_npwp" id="npwp" data-color="#DCDCDC"/>
                            </div>
                          </div>
                          <div class="form-body overflow-hide">
                            <div class="form-group">
                              <label class="control-label mb-10" for="nama" id="label_nama_pemilik">Nama Pemilik</label>
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-briefcase"></i></div>
                                <input type="text" class="input100 form-control @error('nama_pemilik') is-invalid @enderror" name="nama_pemilik" id="nama_pemilik" placeholder="Nama Pemilik" value="{{$usaha['nama_pemilik']}}" required>
                                @error('nama_pemilik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label mb-10" for="nama" id="label_nomor_pemilik">Nomor Pemilik</label>
                              <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-link"></i></div>
                                <input type="text" class="input100 form-control @error('nomor_pemilik') is-invalid @enderror" name="nomor_pemilik" id="nomor_pemilik" placeholder="Nomor Pemilik" value="{{$usaha['nomor_pemilik']}}" required>
                                @error('nomor_pemilik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label mb-10" id="label_bukti" for="bukti">Dokumen Bukti</label>
                                <input type="file" id="bukti" name="bukti" class="dropify" data-default-file="{{asset($usaha['bukti_pemilik'])}}">
                            </div>

                          </div>
                          <div class="form-actions mt-10">
                            <button type="submit" class="btn btn-success mr-10 mb-30">Simpan</button>
                          </div>
                        </form>
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
<script src="{{ asset('main/vendors/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
<script src="{{ asset('main/js/form-file-upload-data.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>
<script type="text/javascript">
var elem = document.querySelector('.js-switch');
var init = new Switchery(elem);
var checked = $('#npwp').is(':checked');
$(document).ready(function() {
  if (checked) {
      $('#label_nama_pemilik').text("Nama Pemilik NPWP");
      $('#label_nomor_pemilik').text("Nomor NPWP yang terdaftar");
      $('#label_bukti').text("Foto NPWP");
  } else {
      $('#label_nama_pemilik').text("Nama Pemilik KTP");
      $('#label_nomor_pemilik').text("Nomer Induk Kependudukan (NIK)");
      $('#label_bukti').text("Foto KTP (KTP saja)");
  }

        $(".switchery").click(function() {
            var checked = $('#npwp').is(':checked');
            if (checked) {
                $('#label_nama_pemilik').text("Nama Pemilik NPWP");
                $('#label_nomor_pemilik').text("Nomor NPWP yang terdaftar");
                $('#label_bukti').text("Foto NPWP");
            } else {
                $('#label_nama_pemilik').text("Nama Pemilik KTP");
                $('#label_nomor_pemilik').text("Nomer Induk Kependudukan (NIK)");
                $('#label_bukti').text("Foto KTP (KTP saja)");
            }
        });
    });


</script>
@endsection
