@extends('layouts.main')

@section('title', "Kelola Pengguna")

@section('content')
    <div class="container-fluid">

      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="txt-dark">Kelola Pengguna</h4>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="/">Dasbor</a></li>
          <li class="active"><span>Kelola Pengguna</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      <!-- Row -->
      <div class="row">
        <div class="col-md-9">
          <!-- Info -->
          <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
              <div class="panel-body p-norm">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="button-list">
                      <div class="btn-group">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">Tambah Pengguna</button>
                      </div>
                      <div class="btn-group">
                        <div class="dropdown">
                          <button aria-expanded="false" data-toggle="dropdown" class="btn btn-info dropdown-toggle " type="button">Sortir @if($role!=='' && $removed != 'true') : {{$role}} @endif @if($removed == 'true') : Pengguna Terhapus @endif<span class="caret"></span></button>
                          <ul role="menu" class="dropdown-menu">
                            <li><a href="{{route('admin.manage')}}">Bersihkan Sortir</a></li>
                            <li class="divider"></li>
                            <li><a href="{{route('admin.manage')}}?role=admin">Peran Admin</a></li>
                            <li><a href="{{route('admin.manage')}}?role=konsumen">Peran Konsumen</a></li>
                            <li><a href="{{route('admin.manage')}}?role=produsen">Peran Produsen</a></li>
                            <li class="divider"></li>
                            <li><a href="{{route('admin.manage')}}?removed=true">Pengguna Terhapus</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    @include('akun.include.create')
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
                              <th>Pengguna</th>
                              <th>Peran</th>
                              <th>Keterangan</th>
                              <th>Tanggal Pendaftaran</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>

                          <tbody>
                            @foreach ($users as $key => $user)
                            <tr>
                              <td width="30%">
                                <strong class="product-name">{{$user->nama}}</strong><br>
                                <p>{{"@".$user->username}}</p>
                							</td>
                              <td>
                                <p>{{ucfirst($user->level)}}</p>
                              </td>
                              <td width="20%">
                                @if($user->level == 'produsen')
                                <ul>
                                  <li>Status:
                                    <?php $usaha = $user->usahas[0]; ?>
                                    @if ($usaha->status == 'act')
                                      <span class="badge badge-success">Aktif</span>
                                  </li>
                                  <li>Aktif Sampai: <strong>{{$usaha->masa_aktif}}</strong></li>
                                    @else
                                      <span class="badge badge-danger">Tidak Aktif</span>
                                    </li>
                                    @endif
                                </ul>
                                @else
                                <p>-</p>
                                @endif
                              </td>
                              <td>
                                <p>{{date('d-m-Y', strtotime($user->created_at))}}</p>
                              </td>
                              <td>
                                <a class="btn btn-warning btn-icon-anim btn-square btn-sm" href="/userAdmin/?edit={{$user->username}}"><i class="fa fa-pencil"></i></a>
                                @if($removed == "true")
                                <a class="btn btn-success btn-icon-anim btn-square btn-sm" href="/userAdmin/kembalikan/?user={{$user->username}}" onclick="return confirm('Apakah yakin untuk mengembalikan pengguna `{{$user->nama}}`?')"><i class="fa fa-random"></i></a>
                                @else
                                <a class="btn btn-danger btn-icon-anim btn-square btn-sm" href="/userAdmin/hapus/?user={{$user->username}}" onclick="return confirm('Apakah yakin untuk memblokir pengguna `{{$user->nama}}`?')"><i class="fa fa-trash-o"></i></a>
                                @endif
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

    </div>
    @if(isset($edit) && $edit != "")
        @include('akun.include.edit')
    @endif
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
<script type="text/javascript">
$(document).ready(function(){
    $('#no_hp').mask('+62 9999 999 99ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
        }
      }
    });
    $('.phone').mask('+62 9999 999 99ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
        }
      }
    });
});
@if(isset($edit) && $edit != "")
    $(window).on('load',function(){
      $('#editModal').modal('show');
    });
@endif
</script>

@endsection
