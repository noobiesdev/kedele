<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0 minimal-ui"/>
      <meta name="apple-mobile-web-app-capable" content="yes"/>
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      @include('layouts.favicon')
      <title>@yield('title')</title>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <link href="{{ asset('main/css/bootstrap.min.css') }}"			 rel="stylesheet" type="text/css">
      <link href="{{ asset('template-usaha/default/styles/style.css') }}"     		 rel="stylesheet" type="text/css">
      <link href="{{ asset('template-usaha/default/styles/framework.css') }}" 		 rel="stylesheet" type="text/css">
      <link href="{{ asset('template-usaha/default/styles/owl.theme.css') }}" 		 rel="stylesheet" type="text/css">
      <link href="{{ asset('template-usaha/default/styles/swipebox.css') }}"		 rel="stylesheet" type="text/css">
      <link href="{{ asset('template-usaha/default/styles/font-awesome.css') }}"	 rel="stylesheet" type="text/css">
      <link href="{{ asset('template-usaha/default/styles/animate.css') }}"			 rel="stylesheet" type="text/css">
      <link href="{{ asset('main/css/font-awesome.min.css') }}"			 rel="stylesheet" type="text/css">
      <script type="text/javascript" src="{{ asset('template-usaha/default/scripts/jquery.js') }}"></script>
      <script type="text/javascript" src="{{ asset('template-usaha/default/scripts/jqueryui.js') }}"></script>
      <script type="text/javascript" src="{{ asset('template-usaha/default/scripts/framework.plugins.js') }}"></script>
      <script type="text/javascript" src="{{ asset('template-usaha/default/scripts/custom.js') }}"></script>
      <link href="{{ asset('main/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">
      @yield('css')
      <style media="screen">
        .head{
          margin: 22px 0px 10px 30px;
          color: white;
          font-style: normal;
          font-weight: bold;
          font-size: 16pt;
        }
        :root {
          --primer: #27ae60;
          --sekunder: #ffffff;
        }
        .badge-danger{
          background-color: #c9302c;
        }
      </style>
    </head>
    <body>

        <div id="preloader">
        	<div id="status">
            	<p class="center-text">
        			Memuat lapak...
                    <em>Proses memuat laman berdasar kecepatan internet!</em>
                </p>
            </div>
        </div>

        <ul class="menu-top">
            <li class="active-menu"><a href="{{route('landing')}}/{{$usaha->slug}}/"><i class="fa fa-home"></i>Halaman Utama<i class="fa fa-circle"></i></a></li>
            <li><a href="{{route('landing')}}/{{$usaha->slug}}#produk-list"><i class="fa fa-cube"></i>Produk<i class="fa fa-circle"></i></a></li>
            <li><a href="{{route('landing')}}/{{$usaha->slug}}/keranjang"><i class="fa fa-shopping-basket"></i>Keranjang Belanja<i class="fa fa-circle"></i></a></li>
            <li>
                <a class="has-submenu" href="#"><i class="fa fa-phone"></i>Kontak<i class="fa fa-plus"></i></a>
                <ul class="submenu">
                  @if($usaha->website->whatsapp != null)
                  <li><a href="{{$usaha->website->whatsapp}}"><i class="fa fa-whatsapp"></i>Whatsapp<i class="fa fa-circle"></i></a></li>@endif
                  @if($usaha->website->facebook != null)
                  <li><a href="{{$usaha->website->facebook}}"><i class="fa fa-facebook"></i>Facebook<i class="fa fa-circle"></i></a></li>@endif
                  @if($usaha->website->twitter != null)
                  <li><a href="{{$usaha->website->twitter}}"><i class="fa fa-instagram"></i>Instagram<i class="fa fa-circle"></i></a></li>@endif
                  @if($usaha->website->instagram != null)
                  <li><a href="{{$usaha->website->instagram}}"><i class="fa fa-twitter"></i>Twitter<i class="fa fa-circle"></i></a></li>@endif
                  @if($usaha->website->marketplace != null)
                  <li><a href="{{$usaha->website->marketplace}}"><i class="fa fa-shopping-bag"></i>Toko Online<i class="fa fa-circle"></i></a></li>@endif
                </ul>
            </li>
            <li><a class="close-menu" href="#"><i class="fa fa-times"></i>Close<i class="fa fa-circle"></i></a></li>
        </ul>
        <div class="header justify-content-between">
            <a href="{{route('landing')}}/{{$usaha->slug}}/" class="header-logo"><i class="head">{{$usaha->nama}}</i> </a>
            <a href="#" class="header-navigation show-navigation"><i class="fa fa-navicon"></i></a>
            <?php
            $ca = ( Session::has('cart') )? count(Session::get('cart')) : 0; ?>
            <a href="{{route('landing')}}/{{$usaha->slug}}/keranjang" class="header-navigation"><i class="fa fa-shopping-basket">@if($ca>0) <span class="badge badge-danger">{{$ca}}</span> @endif</i></a>
            @auth
            <a href="{{route('home')}}" class="header-navigation"><i class="fa fa-user"></i></a>
            @endauth
        </div>



        @yield('banner')
        @yield('produk')
        @yield('content')


        @yield('owner')
        <!-- Content Heding -->


        <!-- Content Heding -->
        <!-- <div class="content-heading">
            <h4>Testimonials</h4>
            <p>Testimonials from our customers</p>
            <i class="fa fa-quote-right"></i>
            <div class="overlay"></div>
            <img src="{{ asset('template-usaha/default/images/pictures/1w.jpg') }}" alt="img">
        </div> -->


        <!-- <div class="content">
            <div class="quote-slider full-bottom">
                <div>
                    <h4>
                        Great all around product, with some of the best documentation I have ever seen. Really thorough and easy to follow!
                        Also the support responsiveness is really fantastic. Extremely happy with everything. Thanks!
                    </h4>
                    <a href="#">ChrisPizzoDesign - ThemeForest</a>
                </div>
                <div>
                    <h4>
                        Exceptional theme. Completely customisable, the best customer service I've ever had from a theme/plugin. Not only are
                        they fast but polite and don't make you feel like a doofus even when you are probably being one.
                    </h4>
                    <a href="#">larzick27 - ThemeForest</a>
                </div>
                <div>
                    <h4>
                        One of the best themes I've used so far and is very well documented, coded and very clean. Got it intergrated with
                        wordpress in less than an hour! But this is an amazing template built with a load of features!
                    </h4>
                    <a href="#">ramseycosay18 - ThemeForest</a>
                </div>
            </div>
            <div class="decoration"></div>
        </div> -->

        <!-- Page Footer-->
        <div class="footer">
            <div class="center-socials footer-socials half-bottom">
                @if($usaha->website->facebook != null)
                <a href="{{$usaha->website->facebook}}" class="footer-facebook"><i class="fa fa-facebook"></i></a> @endif
                @if($usaha->website->twitter != null)
                <a href="{{$usaha->website->twitter}}" class="footer-twitter"><i class="fa fa-twitter"></i></a> @endif
                @if($usaha->website->instagram != null)
                <a href="{{$usaha->website->instagram}}" class="footer-google"><i class="fa fa-instagram"></i></a> @endif
                @if($usaha->website->marketplace != null)
                <a href="{{$usaha->website->marketplace}}" class="footer-share show-share-bottom"><i class="fa fa-shopping-bag"></i></a> @endif
                <a href="#" class="footer-up"><i class="fa fa-angle-up"></i></a>
            </div>
            <p class="center-text">Copyright {{date('Y')}} <a href="{{route('landing')}}">Kedele.Me</a>. All rights reserved.</p>
        </div>

        <!-- Share Elements-->
        <script src="{{ asset('main/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('main/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('main/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>
        <script src="{{ asset('main/vendors/bower_components/jquery/dist/jquery-mask.min.js') }}"></script>
        <script>
          @if($message = Session::get('success'))
            $(window).on("load",function(){
            	window.setTimeout(function(){
            		$.toast({
            			heading: 'Sukses',
            			text: '{{$message}}',
            			position: 'bottom-left',
                  bgColor: '#18C967',
            			loaderBg:'#A4DE02',
            			icon: '',
            			hideAfter: 3500,
            			stack: 6
            		});
            	}, 1000);
            });
            @endif
            @if ($message = Session::get('error'))
            $(window).on("load",function(){
            	window.setTimeout(function(){
            		$.toast({
            			heading: 'Kesalahan',
            			text: '{{$message}}',
            			position: 'bottom-left',
                  bgColor:'#E01A31',
            			loaderBg:'#B53737',
            			icon: '',
            			hideAfter: 3500,
            			stack: 6
            		});
            	}, 1000);
            });
            @endif
        </script>
        <div class="menu-wrapper-background"></div>
        <script type="text/javascript">
        $(".share").click(function() {
          var id = $(this).attr("id");
            $("#share-toko").show();
            var copyText = document.getElementById("share-toko");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            document.execCommand("copy");
            console.log(copyText.value);
            $("#share-toko").hide();
            alert("Tautan telah disalin")
        });
        $(document).ready(function(){
            $('#no_hp').mask('+62 9999 999 99ZZ', {
            translation: {
              'Z': {
                pattern: /[0-9]/, optional: true
              }
            }
          });
        });
        </script>
        @yield('js')
    </body>
</html>
