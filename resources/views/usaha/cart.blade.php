@extends('layouts.usaha.default')
@section('title','Keranjang Belanja')

@section('css')
@endsection

@section('content')
<div class="content">
  @if(isset($auth) && $auth == true)
    @include('usaha.modalOrder')
  @elseif(isset($order) && $order == true)
    @include('usaha.modalWa')
  @endif
    <div class="container-fluid" style="max-width:75%;margin-top:80px;">
    	<div class="row">
    		<div class="col-md-12">
          <h3>Keranjang Belanja</h3>
    			<a href="{{route('landing')}}/{{$usaha->slug}}/" class="btn btn-light"><i class="fa fa-angle-left"></i> Kembali</a>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-8">
          <div class="responsive-table">
            <table class="table">
    				<thead>
    					<tr>
                <th width="5%">#</th>
                <th width="10%">Gambar</th>
    						<th width="%">Produk</th>
                <th width="5%">jumlah</th>
    						<th width="%">Harga</th>
    					</tr>
    				</thead>
    				<tbody>
    					@foreach ($carts as $cart)
              <tr>
    						<td>
                  <form class="" action="{{route('clearCart')}}" method="post">
                    @csrf
                    <input type="text" name="toko" value="{{$usaha->slug}}" style="display:none">
                    <input type="text" name="target" value="{{$cart['id']}}" style="display:none">
                    <button type="submit" class="btn btn-sm  btn-danger"><i class="fa fa-times"></i></button>
                  </form>
    						</td>
                <td>
                  <a class="swipebox" href="{{ asset($cart['gambar']) }}" title="Produk {{$cart['nama']}}">
                    <img src="{{asset($cart['gambar'])}}" style="min-height:45px;max-height:65px;">
                  </a>
    						</td>
                <td class="text-left">
                  <strong>{{$cart['nama']}}</strong>
                  <p>@ Rp {{number_format($cart['harga'],0,",",".")}}</p>
    						</td>
                <td>
                  {{$cart['jumlah']}}
                </td>
                <td class="text-right">
                  Rp {{number_format( ($cart['harga']*$cart['jumlah']) ,0,",",".")}},-
    						</td>
    					</tr>
              @endforeach
    				</tbody>
    			</table>
          </div>
          <form class="" action="{{route('clearCart')}}" method="post">
            @csrf
            <input type="text" name="toko" value="{{$usaha->slug}}" style="display:none">
            <input type="text" name="action" value="clear" style="display:none">
            <button type="submit" class="btn btn-warning">Kosongkan</button>
          </form>
    		</div>
    		<div class="col-md-4">
    			<table class="table table-hover table-sm">
    				<tbody>
    					<tr>
                <td>Sub Total</td>
                <td class="text-right">Rp {{number_format( ($bill['subTotal']) ,0,",",".")}},-</td>
              </tr>
    					<tr>
                <td>Pajak (10%)</td>
                <td class="text-right">Rp {{number_format( ($bill['tax']) ,0,",",".")}},-</td>
              </tr>
              <tr>
                <td>Biaya Admin</td>
                <td class="text-right">Rp {{number_format( ($bill['admin']) ,0,",",".")}},-</td>
              </tr>
              <tr>
                <td>Total</td>
                <td class="text-right">Rp {{number_format( ($bill['total']) ,0,",",".")}},-</td>
              </tr>
    				</tbody>
    			</table>
          <div class="row">
            <div class="col-lg-4">
              <h3>Total</h3>
            </div>
            <div class="col-lg-8">
              <h3 class="text-right">Rp {{number_format( ($bill['total']) ,0,",",".")}},-</h3>
            </div>
          </div>
          <form action="{{route('checkout')}}" method="post">
            @csrf
            <input type="text" name="toko" value="{{$usaha->slug}}" style="display:none">
            <button type="submit" class="buttonWrap button button-green contactSubmitButton">Kirim Pesanan</button>
          </form>
    		</div>
    	</div>
    </div>
</div>

@endsection

@section('js')
<script type="text/javascript">
    @if(isset($auth) && $auth == true)
            $(window).on('load',function(){
                $('#orderModal').modal('show');
            });
    @else(isset($order) && $order == true)
            $(window).on('load',function(){
                $('#waModal').modal('show');
            });
    @endif
</script>

@endsection
