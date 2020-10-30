@extends('layouts.usaha.default')
@section('title','Keranjang Belanja')

@section('css')
@endsection

@section('content')
<div class="content">
    <div class="container-fluid" style="max-width:75%;margin-top:80px;">
    	<div class="row">
    		<div class="col-md-12">
          <h3>Keranjang Belanja</h3>
    			<a href="{{route('landing')}}/{{$usaha->slug}}/" class="btn btn-light"><i class="fa fa-angle-left"></i> Kembali</a>
    		</div>
    	</div>
    	<div class="row">
    		<div class="col-md-8">
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
                  <img src="{{asset($cart['gambar'])}}" style="height:45px;">
    						</td>
                <td>
                  <strong>{{{$cart['nama']}}}</strong>
                  <p>@ Rp {{number_format($cart['harga'],0,",",".")}}</p>
    						</td>
                <td>
                  {{$cart['jumlah']}}
                </td>
                <td>
                  Rp {{number_format( ($cart['harga']*$cart['jumlah']) ,0,",",".")}},-
    						</td>
    					</tr>
              @endforeach
    				</tbody>
    			</table>
          <form class="" action="{{route('clearCart')}}" method="post">
            @csrf
            <input type="text" name="toko" value="{{$usaha->slug}}" style="display:none">
            <input type="text" name="action" value="clear" style="display:none">
            <button type="submit" class="btn btn-warning">Kosongkan</button>
          </form>
    		</div>
    		<div class="col-md-4">
    			<table class="table table-hover table-sm">
    				<thead>
    					<tr>
    						<th>
    							#
    						</th>
    						<th>
    							Product
    						</th>
    						<th>
    							Payment Taken
    						</th>
    						<th>
    							Status
    						</th>
    					</tr>
    				</thead>
    				<tbody>
    					<tr>
    						<td>
    							1
    						</td>
    						<td>
    							TB - Monthly
    						</td>
    						<td>
    							01/04/2012
    						</td>
    						<td>
    							Default
    						</td>
    					</tr>
    					<tr class="table-active">
    						<td>
    							1
    						</td>
    						<td>
    							TB - Monthly
    						</td>
    						<td>
    							01/04/2012
    						</td>
    						<td>
    							Approved
    						</td>
    					</tr>
    					<tr class="table-success">
    						<td>
    							2
    						</td>
    						<td>
    							TB - Monthly
    						</td>
    						<td>
    							02/04/2012
    						</td>
    						<td>
    							Declined
    						</td>
    					</tr>
    					<tr class="table-warning">
    						<td>
    							3
    						</td>
    						<td>
    							TB - Monthly
    						</td>
    						<td>
    							03/04/2012
    						</td>
    						<td>
    							Pending
    						</td>
    					</tr>
    					<tr class="table-danger">
    						<td>
    							4
    						</td>
    						<td>
    							TB - Monthly
    						</td>
    						<td>
    							04/04/2012
    						</td>
    						<td>
    							Call in to confirm
    						</td>
    					</tr>
    				</tbody>
    			</table>
    			<button type="submit" class="buttonWrap button button-green contactSubmitButton">Kirim Pesanan</button>
    		</div>
    	</div>
    </div>
</div>
@endsection
