@extends('layouts.usaha.default')
@section('title'){{$usaha->nama}}@endsection

@section('css')
@endsection

@section('banner')
<div class="slider-container">
    <div class="homepage-slider" data-snap-ignore="true">
        <div>
            <div class="overlay"></div>
            <div class="homepage-slider-caption homepage-center-caption">
                <h3>{!!$usaha->website->judul_jumbotron!!}</h3>
                <p>{!!$usaha->website->teks_jumbotron!!}</p>
            </div>
            <img src="@if($usaha->website->gambar_jumbotron != null) {{ asset($usaha->website->gambar_jumbotron) }} @else {{ asset('template-usaha/default/images/pictures/5.jpg') }} @endif" class="responsive-image" alt="img">
        </div>
    </div>
</div>

<div class="top-call-to-action full-bottom">
    <a href="tel:+{{$usaha->website->whatsapp}}"><i class="fa fa-phone"></i> Call</a>
    <a class="share show-share-bottom" href="#"><i class="fa fa-share"></i> Share</a>
    <input type="text" id="share-toko" value="{{route('landing')}}/{{$usaha->slug}}/" style="display:none">
    <a href="mailto:{{$usaha->user->email}}"><i class="fa fa-envelope-o"></i> Mail</a>
</div>
@endsection

@section('content')
<!-- <div class="content">
    <div class="decoration"></div>
    <div class="container no-bottom">
        <h2 class="center-text">Hubungkan Sosial Media</h2>
        <p class="center-text">
            {{$usaha->nama}} juga tersedia di-
        </p>

    </div>
    <div class="decoration"></div>
</div> -->
@endsection

@section('owner')
<div class="content-strip full-bottom">
    <div class="content-strip-content">
        <h1>{{$usaha->user->nama}}</h1>
        <p>
            Mitra kedele.me. Tergabung sejak {{ \Carbon\Carbon::parse($usaha->user->created_at)->format('d/m/Y')}} dengan total penjualan {{$terjual}}
        </p>
        <div class="center-socials">
            <a href="{{$usaha->website->whatsapp}}" class="footer-share show-share-bottom"><i class="fa fa-whatsapp" style="color:white"></i></a>
            @if($usaha->website->facebook != null)
            <a href="{{$usaha->website->facebook}}" class="facebook-color facebook-social"><i class="fa fa-facebook"></i></a>@endif
            @if($usaha->website->instagram != null)
            <a href="{{$usaha->website->instagram}}" class="google-color google-social"><i class="fa fa-instagram"></i></a>@endif
            @if($usaha->website->twitter != null)
            <a href="{{$usaha->website->twitter}}" class="twitter-color twitter-social"><i class="fa fa-twitter"></i></a>@endif
            @if($usaha->website->marketplace != null)
            <a href="{{$usaha->website->marketplace}}" class="footer-share show-share-bottom"><i class="fa fa-shopping-bag" style="color:white"></i></a>@endif
        </div>
        <a href="javascript:void(0)" class="skeleton-button" data-toggle="modal" data-target="#deskripsiUsaha">
          Deskripsi Usaha
        </a>
    </div>
    <div class="content-strip-overlay"></div>
</div>

<!-- Modal -->
<div class="modal fade" id="deskripsiUsaha" tabindex="-1" role="dialog" aria-labelledby="deskripsiUsahaModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content" style="margin-top:10%;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Deskripsi Usaha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!!$usaha->deskripsi!!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('produk')
<div class="content">
    <div class="decoration"></div>
    <div class="container no-bottom">
        <h2 class="center-text">Varian Produk Olahan</h2>
        <p class="center-text">
            Berikut beberapa produk unggulan dari {{$usaha->nama}}.
        </p>
        <ul class="gallery round-thumb homepage-gallery">
          @foreach($usaha->produks as $value)
            <li>
              <a class="swipebox" href="{{ asset($value->gambar) }}" title="An awesome gallery!">
                <img src="{{ asset($value->gambar) }}" alt="img" />
              </a>
              <a href="{{route('landing')}}/{{$usaha->slug}}/{{$value->slug}}">
                <h5 class="text-center">{{$value->nama}}</h5>
                <p class="text-center"><i>Rp {{number_format($value['harga'],0,",",".")}}</i></p>
              </a>
            </li>
          @endforeach
        </ul>
    </div>
    <div class="decoration"></div>
</div>
@endsection

@section('js')
@endsection
