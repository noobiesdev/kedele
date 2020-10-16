@extends('layouts.main')

@section('title', "Akun")

@section('content')
    <div class="container-fluid">

      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h5 class="txt-dark">Akun</h5>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="/">Dasbor</a></li>
          <li class="active"><span>Akun</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      <!-- Row -->
      <div class="row">
					<div class="col-sm-12">
            <div class="panel panel-default col-lg-9 col-xs-12 card-view">
                <div class="panel panel-default card-view pa-0">
                  <div class="panel-wrapper collapse in">
                    <div  class="panel-body pb-0">
                      <div  class="tab-struct custom-tab-1">
                        <ul role="tablist" class="nav nav-tabs nav-tabs-responsive" id="myTabs_8">
                          <li class="active" role="presentation"><a  data-toggle="tab" id="profile_tab_8" role="tab" href="#profile_8" aria-expanded="false"><span>Akun</span></a></li>
                          <li  role="presentation" class="next"><a aria-expanded="true"  data-toggle="tab" role="tab" id="follo_tab_8" href="#follo_8"><span>Keamanan<span class="inline-block"> </span></span></a></li>
                        </ul>

                        <div class="tab-content" id="myTabContent_8">
                          <div  id="profile_8" class="tab-pane fade active in" role="tabpanel">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="">
                                  <div class="panel-wrapper collapse in">
                                    <div class="panel-body pa-0">
                                      <div class="col-sm-12 col-xs-12">
                                        <div class="form-wrap">
                                          <form method="post" action="{{route('akun-update')}}">
                                            @csrf
                                            <div class="form-body overflow-hide">
                                              <div class="form-group">
                                                <label class="control-label mb-10" for="nama2">Nama Pengguna</label>
                                                <div class="input-group">
                                                  <div class="input-group-addon">@</div>
                                                  <input type="text" class="form-control" id="nama2" placeholder="Nama Pengguna" value="{{$user['username']}}" disabled>
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <label class="control-label mb-10" for="nama">Nama Lengkap</label>
                                                <div class="input-group">

                                                  <div class="input-group-addon"><i class="icon-user"></i></div>
                                                  <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="{{$user['nama']}}" required>
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <label class="control-label mb-10" for="no_hp">Nomor Handphone</label>
                                                <div class="input-group">
                                                  <div class="input-group-addon"><i class="icon-phone"></i></div>
                                                  <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="" data-mask="+62 999 999 999" value="+{{$user['no_hp']}}" required>
                                                </div>
                                              </div>

                                              <hr>
                                              <div class="form-group">
                                                <label class="control-label mb-10" for="exampleInputpwd_02" required>Kata Sandi</label>
                                                <p>Masukkan kata sandi untuk konfirmasi</p>
                                                <div class="input-group">
                                                  <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                  <input type="password" class="form-control" id="exampleInputpwd_02" name="old_password" placeholder="Kata Sandi" value="" required>
                                                </div>
                                              </div>

                                            </div>
                                            <div class="form-actions mt-10">
                                              <button type="submit" class="btn btn-success mr-10 mb-30">Perbarui Profil</button>
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

                          <div  id="follo_8" class="tab-pane fade" role="tabpanel">
                            <div class="row">
                              <div class="col-lg-12">
                                <div class="">
                                  <div class="panel-wrapper collapse in">
                                    <div class="panel-body pa-0">
                                      <div class="col-sm-12 col-xs-12">
                                        <div class="form-wrap">
                                          <form method="post" action="{{route('akun-update')}}">
                                            @csrf
                                            <div class="form-body overflow-hide">
                                              <div class="form-group">
                                                <label class="control-label mb-10" for="email">Email</label>
                                                <div class="input-group">
                                                  <div class="input-group-addon"><i class="icon-envelope-open"></i></div>
                                                  <input type="email" class="form-control" name="email" id="email" placeholder="alamat@gmail.com" value="{{$user['email']}}" required>
                                                </div>
                                              </div>
                                              <div class="form-group">
                                                <label class="control-label mb-10" for="exampleInputpwd_01">Kata Sandi Baru</label>
                                                <div class="input-group">
                                                  <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                  <input type="password" class="form-control" id="exampleInputpwd_01" name="password" placeholder="Kata Sandi Baru" value="" required>
                                                </div>
                                              </div>

                                              <div class="form-group">
                                                <label class="control-label mb-10" for="exampleInputpwd_02">Kata Sandi Lama</label>
                                                <div class="input-group">
                                                  <div class="input-group-addon"><i class="icon-lock"></i></div>
                                                  <input type="password" class="form-control" id="exampleInputpwd_02" name="old_password" placeholder="Kata Sandi Lama" value="" required>
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
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
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
<script src="{{ asset('main/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/pdfmake/build/vfs_fonts.js') }}"></script>

    <script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('main/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('main/js/export-table-data.js') }}"></script>
@endsection
