<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <!-- Document Meta-->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- IE Compatibility Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Kedele.me adalah platform marketing untuk produk olahan kedelai, juga sebagai sarana penghubung produsen dengan supplier">
    <meta name="keywords" content="tanaman, pertanian, perkebunan, kedelai, kedele, universitas jember, kabupaten jember ">
    <meta name="author" content="Startup Agroindustri Unej">
    @include('layouts.favicon')
    <!--  Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&amp;display=swap%7CMontserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" type="text/css"/>
    <!-- Stylesheets-->
    <link href="{{ asset('assets/css/vendor.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet"/>
    <!-- Toast CSS -->
    <link href="{{ asset('main/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">
    <!-- include includes/_googleTagHead.pug-->
    <!--
    Document Title
    =============================================
    -->
    <title>Kedele.Me | Landing - Startup Agroindustri Olahan Kedelai</title>
  </head>
  <body class="body-scroll">
    <!-- include includes/_googleTagbody.pug-->
    <!--
    Document Wrapper
    =============================================
    -->
    <div class="wrapper clearfix" id="wrapper">
      <!--
      Header
      =============================================
      -->
      <header class="header header-transparent header-sticky">
        <nav class="navbar navbar-sticky navbar-expand-lg" id="primary-menu">
          <div class="container"> <a class="logo navbar-brand" href="index.html"><img class="logo logo-dark" src="{{ asset('assets/logo_full.png') }}" alt="Kedele.Me"/><img class="logo logo-light" src="{{ asset('assets/logo_full.png') }}" alt="Kedele.Me"/></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarContent" aria-expanded="false"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarContent">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a class="nav-link" data-scroll="scrollTo" href="#hero">Home</a></li>
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#feature">Fasilitas</a></li>
                <!-- <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#video">Video</a></li> -->
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#services">Layanan</a></li>
                <!-- <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#testimonials">Testimonials</a></li> -->
              </ul>
              <div class="module-container">
                <!--module-btn-->
                <div class="module module-cta">
                  @if (Route::has('login'))
                          @auth
                                <a class="btn btn--white btn--secondary" href="{{url('/home')}}"> <span>Dasbor <i class="icon-right-arrow"></i></span></a></div>
                          @else
                              @if (Route::has('login'))
                                <a class="btn btn--white btn--secondary" href="javascript:void(0)" data-toggle="modal" data-target="#otentikasiUsModal"> <span>Masuk <i class="icon-right-arrow"></i></span></a></div>
                              @endif
                          @endauth
                  @endif
              </div>
              <!-- End Module Container  -->
            </div>
            <!-- End .nav-collapse-->
          </div>
          <!-- End .container-->
        </nav>
        <!-- End .navbar-->
      </header>
      <!-- End Header-->
      <div class="modal fade" id="otentikasiUsModal" tabindex="-1" role="dialog" aria-labelledby="otentikasiUsModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-body p-0">
              <div class="popup-contact-form">
                <div class="heading heading-5">
                  <div class="heading-title">Otentikasi</div>
                </div>
                <div class="contact-body">
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                      <div class="col-12">
                        <div class="form-group">
                          <label for="username">Nama Pengguna/ Email/ No Handphone</label>
                          <input class="form-control @error('username') is-invalid @enderror" type="text" id="username" name="username" required="required"/>
                          @error('username')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label for="password">Kata Sandi</label>
                          <input class="form-control @error('password') is-invalid @enderror" type="password" id="password" name="password" required="required"/>
                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                      </div>
                      <div class="col-12">
                        <button class="btn--block btn btn--secondary mt-20 mb-20"><span>Masuk</span></button>
                      </div>
                      <div class="col-12">
                        <div class="heading-desc text-center">Belum punya akun?</div>
                        <a href="{{ route('register') }}"><strong>Daftar Sekarang</strong></a>
                        <div class="contact-result"></div>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- End .contact-body-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start hero #1-->
      <section class="hero hero-click bg-overlay bg-overlay-dark" id="hero">
        <div class="bg-section"><img src="{{ asset('assets/images/background/bg-kedele.png') }}" alt="background"/></div>
        <div class="divider-shape"><svg xmlns="http://www.w3.org/2000/svg" width="100%" height="139" viewBox="0 0 1920 139" preserveAspectRatio="none">
<g transform="translate(0 -0.59)">
<path data-name="Path 429" d="M1920,3.4C1575.885,18,1529.1,84.89,1101.63,84.89c-480,0-480-84.3-960-84.3C89.1.59,42.3,1.6,0,3.4V140H1920Z" transform="translate(0)" fill="rgba(255,255,255,0.3)"/>
<path data-name="Path 430" d="M0,24.31c65.19-5.69,141.84-9.25,237.63-9.25,480,0,480,89.24,960,89.24,384.2,0,460.92-57.16,722.37-80V140H0Z" transform="translate(0)" fill="rgba(255,255,255,0.5)"/>
<path data-name="Path 431" d="M1920,51.76c-301.5,12.49-363.645,53.4-770.37,53.4-480,0-480-57-960-57C116.355,48.17,54.315,49.51,0,51.76V140H1920Z" fill="#fff"/>
</g>
</svg>
        </div>
        <div class="container">
          <div class="hero-cotainer text--center">
            <div class="row">
              <div class="col-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
                <div class="hero-content">
                  <h1 class="hero-headline">Temukan Produk <Br>Olahan Kedelai</h1>
                  <div class="hero-bio">Kedele.me mempermudah penjual produk olahan kedelai menemukan suplai bahan <Br> dan menjual produknya, dan
                    juga mempermudah pelanggan dalam melakukan pembelian produk olahan kedelai.</div>
                  <div class="hero-action text-center"><a class="btn btn--secondary mx-auto" href="{{route('register')}}" > <span>Daftar Sekarang <i class="icon-right-arrow"></i></span></a></div>
                </div>
                <!-- End .hero-content-->
              </div>
            </div>
          </div><a class="scroll-to" href="#feature"><svg xmlns="http://www.w3.org/2000/svg" width="47.7" height="26.26" viewBox="0 0 47.7 26.26">
<path id="down-chevron" d="M45.221,91.567l-21.371,21.3L2.48,91.567,0,94.055l23.85,23.772L47.7,94.055Z" transform="translate(0 -91.567)" fill="#fff"/>
</svg></a>
        </div>
        <!-- End .container-->
      </section>
      <!-- End #hero   -->
      <!-- Start Feature #1-->
      <section class="features" id="feature">
        <div class="container">
          <div class="row">
            <!-- Panel #1  -->
            <div class="col-12 col-md-12 col-lg-4 ">
              <div class="feature-panel">
                <div class="feature-icon"><img class="logo logo-light" src="{{ asset('assets/images/deliver.png') }}"></img></div>
                <div class="feature-content">
                  <h3>Pembelian</h3>
                  <p>Beli produk olahan kedelai lebih mudah dan cepat dengan Kedele.me</p>
                </div>
              </div>
              <!-- .feature-panel end  -->
            </div>
            <!-- .col-md-12 end  -->
            <!-- Panel #2  -->
            <div class="col-12 col-md-12 col-lg-4 ">
              <div class="feature-panel active">
                <div class="feature-icon"><img class="logo logo-light" src="{{ asset('assets/images/hand.png') }}"></img></div>
                <div class="feature-content">
                  <h3>Dirikan Usaha Anda</h3>
                  <p>Langganan di Kedele.me dan dirikan usaha penjualan anda dengan laman toko pribadi</p>
                </div>
              </div>
              <!-- .feature-panel end  -->
            </div>
            <!-- .col-md-12 end  -->
            <!-- Panel #3  -->
            <div class="col-12 col-md-12 col-lg-4 ">
              <div class="feature-panel">
                <div class="feature-icon"><img class="logo logo-light" src="{{ asset('assets/images/produce.png') }}"></img></div>
                <div class="feature-content">
                  <h3>Suplai Kedelai</h3>
                  <p>Kedele.me bersama petani kedelai menyediakan kemudahan dalam penyetokan bahan suplai kedelai.</p>
                </div>
              </div>
              <!-- .feature-panel end  -->
            </div>
            <!-- .col-md-12 end  -->
          </div>
          <!-- End .row  -->
        </div>
        <!-- End .container  -->
      </section>
      <section class="services features features-2 bg-pink" id="services">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="service-card">
                <div class="service-card-top">
                  <div class="bg-section"><img src="{{ asset('assets/images/bg-greencard.png') }}" alt="background"/></div>
                </div>
                <div class="service-card-middle">
                  <div class="service-card-bg">
                    <div class="bg-section"><img class="img-fluid" src="{{ asset('assets/images/background/sendok-kedelai.jpg') }}" alt="vector"/></div>
                  </div>
                </div>
                <div class="service-card-bottom">
                  <div class="bg-section"><img src="{{ asset('assets/images/bg-greencard.png') }}" alt="background"/></div>
                  <div class="counters">
                    <div class="counting-holder"><span class="counting">25</span>+</div>
                    <p class="counting-desc">Mitra Pengusaha Olahan Kedelai</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="service-content">
                <div class="heading heading-4">
                  <h2 class="heading-title">Dirikan Usaha Produk Olahan Kedelai Anda di Kedele.me</h2>
                  <!-- <p class="heading-desc">Berlangganan Rp. 10.000/bulan</p> -->
                </div>
                <ul class="list-unstyled service-list">
                  <li>
                    <div class="feature-panel">
                      <div class="feature-icon"><img class="logo logo-light" src="{{ asset('assets/images/smart-order.png') }}"></img></div>
                      <div class="feature-content">
                        <h3>Kelola Toko</h3>
                        <p>Kedele.me menyediakan layanan dalam mengelola laman toko dan produk olahan yang dijual</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="feature-panel">
                      <div class="feature-icon"><img class="logo logo-light" src="{{ asset('assets/images/produce.png') }}"></img></div>
                      <div class="feature-content">
                        <h3>Pembelian Suplai</h3>
                        <p>Kedele.me menyesuaikan pembelian suplai pengusaha dengan detail kategori kedelai yang ingin dibeli agar dapat disesuaikan dengan produk yang dijual</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="cta text-center bg-overlay bg-overlay-dark" id="cta">
        <div class="bg-section"><img src="{{ asset('assets/images/background/bg-11.jpg') }}" alt="background"/></div>
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-8 offset-lg-2 text-center">
              <h3>Penjualan dan Pembelian Produk Olahan Kedelai</h3>
              <p>Pengunjung web yang ingin mendirikan usaha penjualan produk olahan kedelai atau ingin membeli produk olahan
                kedelai dapat meng-klik tombol dibawah ini</p>
              <a class="btn btn--secondary mx-auto" href="{{ route('register') }}"> <span>Daftar Sekarang <i class="icon-right-arrow"></i></span></a>
            </div>
            <!-- End .col-md-12-->
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
      <!-- End #cta-->
      <!--
      Footer #1
      =============================================
      -->
      <footer class="footer" id="footer">
        <div class="footer-widgets-container">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="footer-widget"><a class="logo navbar-brand" href="index.html"><img class="logo logo-light" src="{{ asset('assets/logo_full.png') }}" alt="Kedele.Me"/></a>
                  <div class="footer-contact mt-10">
                    <ul class="list-unstyled">
                      <li> <a href="mailto:mailkedele@gmail.com">mailkedele@gmail.com</a></li>
                      <li> <a href="tel:+62 899-9442-993">+62 899-9442-993</a></li>
                    </ul>
                  </div>
                  <ul class="list-unstyled navigation">
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Features</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Video </a></li> -->
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Services</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Testimonials</a></li> -->
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <hr/>
        </div>

      </footer>
    </div>
    <!-- End #wrapper   -->
    <!--
    Footer Scripts
    =============================================
    -->
    <script src="{{ asset('assets/js/vendor/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    <!-- Toast JavaScript -->
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
  </body>
</html>
