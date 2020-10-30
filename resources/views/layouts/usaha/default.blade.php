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
            <li class="active-menu"><a href="index.html"><i class="fa fa-home"></i>Homepage<i class="fa fa-circle"></i></a></li>
            <li>
                <a class="has-submenu" href="#"><i class="fa fa-cog"></i>Features<i class="fa fa-plus"></i></a>
                <ul class="submenu">
                    <li><a href="features-type.html"><i class="fa fa-angle-right"></i>Type Features<i class="fa fa-circle"></i></a></li>
                    <li><a href="features-jquery.html"><i class="fa fa-angle-right"></i>jQuery Features<i class="fa fa-circle"></i></a></li>
                    <li><a href="features-others.html"><i class="fa fa-angle-right"></i>Other Features<i class="fa fa-circle"></i></a></li>
                </ul>
            </li>
            <li>
                <a class="has-submenu" href="#"><i class="fa fa-camera"></i>Media<i class="fa fa-plus"></i></a>
                <ul class="submenu">
                    <li><a href="gallery-square.html"><i class="fa fa-angle-right"></i>Square Gallery<i class="fa fa-circle"></i></a></li>
                    <li><a href="gallery-round.html"><i class="fa fa-angle-right"></i>Round Gallery<i class="fa fa-circle"></i></a></li>
                    <li><a href="gallery-wide.html"><i class="fa fa-angle-right"></i>Wide Gallery<i class="fa fa-circle"></i></a></li>
                    <li><a href="portfolio-adaptive.html"><i class="fa fa-angle-right"></i>Adaptive Portfolio<i class="fa fa-circle"></i></a></li>
                    <li><a href="portfolio-one.html"><i class="fa fa-angle-right"></i>One Column Portfolio<i class="fa fa-circle"></i></a></li>
                    <li><a href="portfolio-two.html"><i class="fa fa-angle-right"></i>Two Column Portfolio<i class="fa fa-circle"></i></a></li>
                </ul>
            </li>
            <li>
                <a class="has-submenu" href="#"><i class="fa fa-files-o"></i>Pages<i class="fa fa-plus"></i></a>
                <ul class="submenu">
                    <li><a href="page-charts.html"><i class="fa fa-angle-right"></i>Charts & Pies<i class="fa fa-circle"></i></a></li>
                    <li><a href="page-error.html"><i class="fa fa-angle-right"></i>404 Page<i class="fa fa-circle"></i></a></li>
                    <li><a href="page-soon.html"><i class="fa fa-angle-right"></i>Soon Page<i class="fa fa-circle"></i></a></li>
                    <li><a href="page-updates.html"><i class="fa fa-angle-right"></i>Updates Page<i class="fa fa-circle"></i></a></li>
                    <li><a href="page-timeline.html"><i class="fa fa-angle-right"></i>Timeline Page<i class="fa fa-circle"></i></a></li>
                    <li><a href="page-videos.html"><i class="fa fa-angle-right"></i>Video Page<i class="fa fa-circle"></i></a></li>
                    <li><a href="index2.html"><i class="fa fa-angle-right"></i>Clasic Homepage<i class="fa fa-circle"></i></a></li>
                </ul>
            </li>
            <li>
                <a class="has-submenu" href="#"><i class="fa fa-mobile"></i>App Specific<i class="fa fa-plus"></i></a>
                <ul class="submenu">
                    <li><a href="pageapp-login.html"><i class="fa fa-angle-right"></i>Login<i class="fa fa-circle"></i></a></li>
                    <li><a href="pageapp-singup.html"><i class="fa fa-angle-right"></i>Signup<i class="fa fa-circle"></i></a></li>
                    <li><a href="pageapp-coverpage.html"><i class="fa fa-angle-right"></i>Coverpage<i class="fa fa-circle"></i></a></li>
                    <li><a href="pageapp-userlist.html"><i class="fa fa-angle-right"></i>Userlist<i class="fa fa-circle"></i></a></li>
                    <li><a href="pageapp-calendar.html"><i class="fa fa-angle-right"></i>Calendar<i class="fa fa-circle"></i></a></li>
                    <li><a href="pageapp-activity.html"><i class="fa fa-angle-right"></i>Activity Feed<i class="fa fa-circle"></i></a></li>
                    <li><a href="pageapp-chat.html"><i class="fa fa-angle-right"></i>Chat Bubbles<i class="fa fa-circle"></i></a></li>
                    <li><a href="pageapp-share.html"><i class="fa fa-angle-right"></i>Share Boxes<i class="fa fa-circle"></i></a></li>
                </ul>
            </li>
            <li><a href="contact.html"><i class="fa fa-envelope-o"></i>Contact<i class="fa fa-circle"></i></a></li>
            <li><a class="close-menu" href="#"><i class="fa fa-times"></i>Close<i class="fa fa-circle"></i></a></li>
        </ul>
        <div class="header justify-content-between">
            <a href="{{route('landing')}}/{{$usaha->slug}}/" class="header-logo"><i class="head">{{$usaha->nama}}</i> </a>
            <a href="#" class="header-navigation show-navigation"><i class="fa fa-navicon"></i></a>
            <a href="{{route('landing')}}/{{$usaha->slug}}/keranjang" class="header-navigation"><i class="fa fa-shopping-basket"></i></a>
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

        </script>
    </body>
</html>
