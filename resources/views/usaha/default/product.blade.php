@extends('layouts.usaha.default')
@section('title'){{$produk->nama}} - {{$usaha->nama}} | Kedele.me @endsection

@section('css')
<style media="screen">
  .direct-buy{
    background-color: var(--primer);
    padding-bottom: 5px;
  }

.tab-pane active{
  display: block;
}
.tab-content{
  display: block;
}
.produk-img{
  width: 100%;
  max-width: 446px;
}
.harga,
.nav a{
  color: var(--primer);
}
.active a{
  color: inherit;
  font-weight: bold;
}
</style>
@endsection

@section('content')
<div class="content">
    <div class="container-fluid" style="max-width:75%;margin-top:80px;">
      <div class="row">
          <div class="col-md-12">
          <a href="{{route('landing')}}/{{$usaha->slug}}/" class="btn btn-light"><i class="fa fa-angle-left"></i> Kembali</a>
          </div>
      </div>
      <div class="row">
          <div class="col-md-6">
            <a class="swipebox" href="{{ asset($produk->gambar) }}" title="An awesome gallery!">
              <img class="produk-img" src="{{ asset($produk->gambar) }}" alt="img"/>
            </a>
          </div>
          <div class="col-md-4">
              <div class="row">
                <div class="col-md-12">
                  <h1>{{$produk->nama}}</h1>
                  <p><strong>Produk Terjual: {{$produk->detailPembelians->count()}}</strong> </p>
                </div>
                <div class="col-md-4">
                    harga
                </div>
                <div class="col-md-8">
                    <h3 class="harga">Rp {{number_format($produk->harga,0,",",".")}}</h3>
                </div>
                <div class="col-md-12">
                  <h1>{{$produk->nama}}</h1>
                  <p><strong>Produk Terjual: {{$produk->detailPembelians->count()}}</strong> </p>
                </div>

                  <div class="container">
                  <ul class="nav nav-tabs">
                  			<li class="active">
                          <a  href="#1" data-toggle="tab">Deskripsi Produk</a>
                  			</li>
                  			<li><a href="#2" data-toggle="tab">Ulasan</a>
                  			</li>
                  		</ul>

                  			<div class="tab-content ">
                  			  <div class="tab-pane active" id="1">
                            {!!$produk->deskripsi!!}
                  				</div>
                  				<div class="tab-pane" id="2">
                            Tidak ada ulasan
                  				</div>
                  			</div>
                    </div>

              </div>
              <a href="#" class="show-share-bottom button button-green full-button full-bottom">+ Keranjang</a>
          </div>
      </div>
    	<div class="row">

      </div>
    </div>
</div>


<div class="share-bottom">
    <h3>Pembelian</h3>
    <div class="share-socials-bottom">
      <div class="row">
        <div class="col-md-4">
          <h4>{{$produk->nama}}</h4>
        </div>
        <div class="col-md-4">
          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Rp {{number_format($produk['harga'],0,",",".")}} X</label>
            </div>
            <input type="number" class="form-control" id="harga" value="$produk['harga']" style="display:none">
            <form action="{{route('landing')}}/{{$usaha->slug}}/addToCart" method="post">
            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" min="1" value="1">
          </div>
        </div>
        <div class="col-md-4">
            @csrf
            <textarea name="produk" rows="8" cols="80" name="slug" style="display:none">{{$produk['slug']}}</textarea>
            <button type="submit" class="btn btn-block" name="button">+ Keranjang</button>
          </form>
        </div>
      </div>
    </div>
    <a href="#" class="close-share-bottom direct-buy">Pesan Langsung</a>
    <a href="#" class="close-share-bottom">Close</a>
</div>
@endsection
