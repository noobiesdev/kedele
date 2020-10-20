@extends('layouts.main')

@section('title', "Desain")

@section('css')
<link href="{{ asset('main/vendors/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{ asset('main/vendors/bower_components/summernote/dist/summernote.css') }}" />
@endsection

@section('content')
    <div class="container-fluid">

      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="txt-dark">Desain</h4>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="{{route('dashboard')}}">Dasbor</a></li>
          <li><a href="#">Desain</a></li>
          <li><a href="#">Website</a></li>
          <li class="active"><span>Lokasi</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      <!-- Row -->

      <div class="row">
        <div class="col-md-9">
          <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-wrap">
                      <form class="form-horizontal" method="POST" action="{{ route('website.update') }}" autocomplete="off">
                        @csrf
                        <div class="form-group">
                          <label class="control-label mb-10" for="nama2">Nama Pengguna</label>
                          <div class="input-group">
                            <div class="input-group-addon">@</div>
                            <input type="text" class="form-control" id="nama2" placeholder="Nama Pengguna" value="{{$user['username']}}" disabled>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputweb_31" class="col-sm-3 control-label">Sub-judul Sampul</label>
                          <div class="col-sm-9">
                              <textarea class="summernote" name="teks_jumbotron" rows="4" cols="40" required>{{$usaha['teks_jumbotron']}}</textarea>
                          </div>
                        </div>
                        <div class="form-group mb-0">
                          <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-success ">Simpan</button>
                          </div>
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
      <!-- /Row -->
@endsection

@section('js')
<script src="{{ asset('main/vendors/bower_components/summernote/dist/summernote.min.js') }}"></script>
<script src="{{ asset('main/js/summernote-data.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/dropify/dist/js/dropify.min.js') }}"></script>
<script src="{{ asset('main/js/form-file-upload-data.js') }}"></script>


@endsection
