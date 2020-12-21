@extends('layouts.main')

@section('title', "Arsip")

@section('css')
<link href="{{ asset('main/vendors/bower_components/dropify/dist/css/dropify.min.css') }}" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="{{ asset('main/vendors/bower_components/summernote/dist/summernote.css') }}" />
<link rel="stylesheet" href="{{ asset('main/css/custom.css') }}">

@endsection
@section('content')
    @if(isset($edit) && $edit != "")
        @include('pembelian.include.edit')
    @endif
    <div class="container-fluid">
      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="txt-dark">Pesanan Diarsipkan</h4>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="{{route('dashboard')}}">Dasbor</a></li>
          <li class="active"><span>Pembelian</span></li>
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
												<span class="txt-light block counter"><span class="counter-anim">{{count($orders)}}</span></span>
												<span class="weight-500 uppercase-font block font-13 txt-light">Pesanan Aktif</span>
											</div>
											<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
												<img class="imgcon" src="{{asset('img/i_produksi_kedelai.png')}}" alt="">
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
                        <span class="txt-light block counter"><span class="counter-anim">{{count($orders)}}</span></span>
												<span class="weight-500 uppercase-font block font-13 txt-light">Total Pesanan</span>
											</div>
											<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
												<img class="imgcon" src="{{asset('img/i_ajukan_bahan.png')}}" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
      <div class="row">
        <div class="col-md-9">
          <!-- Info -->
          <div class="panel panel-default card-view">
            <div class="panel-wrapper collapse in">
              <div class="panel-body p-norm">
                <div class="row">
                  <div class="col-sm-12">
                    <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#createModal">Tambah Produk</button> -->
                    @include('pembelian.include.create')
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
                              <th>Tanggal</th>
                              <th>Toko</th>
                              <th>Daftar Produk</th>
                              <th>Resi</th>
                              <th>Status</th>
                              <th>Aksi</th>
                            </tr>
                          </thead>

                          <tbody>
                            @foreach ($orders as $key => $order)
                              <tr>
                                <td>
                                  {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $order->created_at)->format('M d Y')}}<br>
                                  {{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $order->created_at)->format('H:i')}}
                                </td>
                                <td width="20%">
                                  <strong class="product-name">{{$order->detailPembelians[0]->produk->usaha->nama}}</strong><br>
                                  <p><a href="{{route('landing')}}/{{$order->detailPembelians[0]->produk->usaha->slug}}" target="_blank">Kunjungi toko</a></p>
                                </td>
                                <td>
                                  @foreach ($order->detailPembelians as $p)
                                  <i style="color:#27AE60;font-weight:800">{{$p->produk->nama}}</i> sebanyak <strong>{{$p->jumlah}} item</strong> (Rp{{number_format($p->produk->harga*$p->jumlah,0,",",".")}})<br>
                                  @endforeach
                                  <hr style="margin-bottom:0">
                                  <p>Pajak (10%): Rp{{number_format(($order->total_harga-5000)/11,0,",",".")}}</p>
                                  <p>Biaya Admin: Rp5.000</p>
                                  <strong>Total: Rp{{number_format($order->total_harga,0,",",".")}}</strong>
                                </td>
                                <td>
                                  <a href="#">{{$order->kode_pemesanan}}</a>
                                </td>
                                <td>
                                  <?php
                                      switch ($order->status) {
                                        case 'dipesan':
                                          $type = 'warning';
                                          break;
                                        case 'diproses':
                                          $type = 'info';
                                          break;
                                        case 'dikirim':
                                          $type = 'danger';
                                          break;
                                        case 'selesai':
                                          $type = 'success';
                                          break;
                                        case 'batal':
                                          $type = 'danger';
                                          break;
                                      }
                                   ?>
                                      <p class="badge badge-{{$type}} dropdown-toggle">{{$order['status']}}</p>
                                  </td>
                                  <td>
                                    <a class="btn btn-warning btn-icon-anim btn-square btn-sm" href="/belanja/set/{{$order['kode_pemesanan']}}/dipesan" onclick="return confirm('Apakah yakin untuk membatalkan pesanan ini?\n Pesanan yang dikembalikan, akan dibaca oleh toko dengan status `Dipesan`')"><i class="fa fa-undo"></i></a>
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

@if(isset($edit) && $edit != "")
    @include('produk.include.edit')
    <script type="text/javascript">
        $(window).on('load',function(){
            $('#editModal').modal('show');
        });
    </script>
@endif
@endsection
