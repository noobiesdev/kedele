<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="HandheldFriendly" content="True">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="msapplication-TileColor
  " content="#667eea">
  <meta name="theme-color" content="#667eea">

  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="description" content="Kedele.me adalah platform marketing untuk produk olahan kedelai, juga sebagai sarana penghubung produsen dengan supplier">
  <meta name="keywords" content="tanaman, pertanian, perkebunan, ">
  <meta name="author" content="Startup Agroindustri Unej">

	<title>Kedele - @yield('title')</title>

	<!-- Data table CSS -->
	<link href="{{ asset('main/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>

	<!-- Toast CSS -->
	<link href="{{ asset('main/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">

	<!-- bootstrap-select CSS -->
	<link href="{{ asset('main/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css"/>

	<!-- switchery CSS -->
	<link href="{{ asset('main/vendors/bower_components/switchery/dist/switchery.min.css') }}" rel="stylesheet" type="text/css"/>

	<!-- vector map CSS -->
	<link href="{{ asset('main/vendors/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css"/>

	<!-- Custom CSS -->
	<link href="{{ asset('main/css/style.css') }}" rel="stylesheet" type="text/css">
  @yield('css')
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-2-active pimary-color-pink">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top" style="background: #27ae60; color: white !important;" >
			<div class="mobile-only-brand pull-left" style="background: #27ae60" >
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="">
							<img class="brand-img" src="" alt="Kedele"/>
							<span class="brand-text">Kedele</span>
						</a>
					</div>
				</div>
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu" style="color: white !important;"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right" style="color: white !important;">
				<ul class="nav navbar-right top-nav pull-right">
          <li class="dropdown alert-drp">
						<a href="#" class="dropdown-toggle" style="color: white !important;" >{{ Auth::user()->nama }}</a>
          </li>
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="" alt="logo-kedele.me" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="{{route('akun')}}"><i class="zmdi zmdi-account"></i><span>Profil</span></a>
							</li>
							<!-- <li>
								<a href="#"><i class="zmdi zmdi-settings"></i><span>Pengaturan</span></a>
							</li> -->
							<li class="divider"></li>
							<li>
								<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form1').submit();"><i class="zmdi zmdi-power"></i><span>Keluar</span></a>
							</li>
              <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<!-- /Top Menu Items -->

		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">

					<!-- User Profile -->
					<li>
						<div class="user-profile text-center">
							<img src="" alt="logo-kedele.me" class="user-auth-img img-circle"/>
							<div class="dropdown mt-5">
							<a href="#" class="dropdown-toggle pr-0 bg-transparent" data-toggle="dropdown">{{ Auth::user()->nama }} <span class="caret"></span></a>
              <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                <li>
  								<a href="{{route('akun')}}"><i class="zmdi zmdi-account"></i><span>Profil</span></a>
  							</li>
  							<!-- <li>
  								<a href="#"><i class="zmdi zmdi-settings"></i><span>Pengaturan</span></a>
  							</li> -->
  							<li class="divider"></li>
  							<li>
  								<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i><span>Keluar</span></a>
  							</li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
  						</ul>
							</div>
						</div>
					</li>

				<li class="navigation-header">
					<span>Utama</span> <i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="active" href="{{route('dashboard')}}" data-toggle="collapse" data-target="#dashboard"><div class="pull-left"><i class="glyphicon glyphicon-home mr-20"></i><span class="right-nav-text">Dasbor</span></div><div class="clearfix"></div></a>
				</li>
        @role('produsen')
        <li>
					<a href="{{route('pembelian.index')}}" data-target="#pembelian"><div class="pull-left"><i class="glyphicon glyphicon-inbox mr-20"></i><span class="right-nav-text">Pembelian</span></div><div class="clearfix"></div></a>
				</li>
        <li>
					<a href="{{route('produksi.index')}}" data-toggle="collapse" data-target="#produksi"><div class="pull-left"><i class="glyphicon glyphicon-cutlery mr-20"></i><span class="right-nav-text">Produksi</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="produksi" class="collapse collapse-level-1">
            <li>
							<a href="{{route('produksi.create')}}">Tambah Produk</a>
						</li>
					</ul>
				</li>
        @endrole

        @role('produsen')
        <li class="navigation-header">
					<span>Kendali laman</span> <i class="zmdi zmdi-more"></i>
				</li>
        <li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#desain"><div class="pull-left"><i class="glyphicon glyphicon-globe mr-20"></i><span class="right-nav-text">Desain</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="desain" class="collapse collapse-level-1">
            <li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#website" class="" aria-expanded="true">Website<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
								<ul id="website" class="collapse-level-2 collapse in" aria-expanded="true" style="">
                  <a href="{{route('website.banner')}}">Banner</a>
                  <a href="{{route('website.lokasi')}}">Lokasi</a>
								</ul>
						</li>
            <li>
							<a href="{{route('website.kontak')}}">Kontak/ Sosial Media</a>
						</li>
					</ul>
				</li>
        <li>
					<a href="{{route('usaha.index')}}" data-target="#kelolaUsaha"><div class="pull-left"><i class="glyphicon glyphicon-briefcase mr-20"></i><span class="right-nav-text">Profil Usaha</span></div><div class="clearfix"></div></a>
				</li>
        <li class="navigation-header">
					<span>Aktivasi dan Pembayaran</span> <i class="zmdi zmdi-more"></i>
				</li>
        <li>
					<a href="###" data-target="#tagihan" style="color:orange; background-color:white"><div class="pull-left"><i class="glyphicon glyphicon-circle-arrow-up mr-20"></i><span class="right-nav-text">Pembayaran</span></div><div class="clearfix"></div></a>
				</li>
        @endrole

				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>Pendukung</span>
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Bantuan</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a class="active" href="{{asset('uploads/Kedele Petunjuk Pengelola.pdf')}}">Petunjuk Penggunaan</a>
						</li>
            <li>
							<a class="active" href="#">Ajukan Pertanyaan</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="documentation.html"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">Dokumentasi</span></div><div class="clearfix"></div></a>
				</li>
			</ul>
		</div>
		<!-- /Left Sidebar Menu -->

        <!-- Main Content -->
		<div class="page-wrapper">
      <div class="container-fluid pt-25">
				@yield('content')
			</div>

			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
            <p>&copy; Copyright {{date('Y')}} PPL-Agro C - Kelompok D Fasilkom UNEJ, All Rights Reserved</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->

		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

	<!-- JavaScript -->

    <!-- jQuery -->
    <script src="{{ asset('main/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('main/vendors/bower_components/jquery/dist/jquery-mask.min.js') }}"></script>
    <!-- <script src="{{ asset('main/vendors/bower_components/filament-tablesaw/dist/dependencies') }}"></script> -->
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('main/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

	<!-- Vector Maps JavaScript -->
    <script src="{{ asset('main/vendors/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('main/vendors/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	  <script src="{{ asset('main/js/vectormap-data.js') }}"></script>

	<!-- Data table JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>

	<!-- Flot Charts JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/Flot/excanvas.min.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/Flot/jquery.flot.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/Flot/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/Flot/jquery.flot.resize.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/Flot/jquery.flot.time.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/Flot/jquery.flot.stack.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/Flot/jquery.flot.crosshair.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
	<script src="{{ asset('main/js/flot-data.js') }}"></script>

	<!-- Slimscroll JavaScript -->
	<script src="{{ asset('main/js/jquery.slimscroll.js') }}"></script>

	<!-- simpleWeather JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/moment/min/moment.min.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }}"></script>
	<script src="{{ asset('main/js/simpleweather-data.js') }}"></script>

	<!-- Progressbar Animation JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/jquery.counterup/jquery.counterup.min.js') }}"></script>

	<!-- Fancy Dropdown JS -->
	<script src="{{ asset('main/js/dropdown-bootstrap-extended.js') }}"></script>

	<!-- Sparkline JavaScript -->
	<script src="{{ asset('main/vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>

	<!-- Owl JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>

	<!-- EChartJS JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/echarts/dist/echarts-en.min.js') }}"></script>
	<script src="{{ asset('main/vendors/echarts-liquidfill.min.js') }}"></script>

	<!-- Toast JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

	<!-- Switchery JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>

	<!-- Bootstrap Select JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

	<!-- Init JavaScript -->
	<script src="{{ asset('main/js/init.js') }}"></script>
	<script src="{{ asset('main/js/dashboard2-data.js') }}"></script>
  <script>
    @if($message = Session::get('success'))
    $(window).on("load",function(){
    	window.setTimeout(function(){
    		$.toast({
    			heading: 'Sukses',
    			text: '{{$message}}',
    			position: 'top-left',
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
    			position: 'top-left',
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
@yield('js')
</body>

</html>
