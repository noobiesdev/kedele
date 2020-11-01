<!DOCTYPE html>
<html dir="ltr" lang="en-US">
  <head>
    <!-- Document Meta-->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- IE Compatibility Meta-->
    <meta name="author" content="zytheme"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <meta name="description" content="Multi-purpose Business html5 landing page"/>
    @include('layouts.favicon')
    <!--  Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&amp;display=swap%7CMontserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" type="text/css"/>
    <!-- Stylesheets-->
    <link href="{{ asset('assets/css/vendor.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet"/>
    <!-- include includes/_googleTagHead.pug-->
    <!--
    Document Title
    =============================================
    -->
    <meta name="description" content="Kedele.me adalah platform marketing untuk produk olahan kedelai, juga sebagai sarana penghubung produsen dengan supplier">
    <meta name="keywords" content="tanaman, pertanian, perkebunan, ">
    <meta name="author" content="Startup Agroindustri Unej">
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
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#feature">Features</a></li>
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#video">Video</a></li>
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" data-scroll="scrollTo" href="#testimonials">Testimonials</a></li>
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
        <div class="bg-section"><img src="{{ asset('assets/images/background/bg-5.jpg') }}" alt="background"/></div>
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
                  <h1 class="hero-headline">Make The Best Landing <Br> in The Market</h1>
                  <div class="hero-bio">We are LeData agency, our strategists will help you set an objective and choose your tools, <Br> developing a plan that is custom built for your business.</div>
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
                <div class="feature-icon"><i class="flaticon-command"></i></div>
                <div class="feature-content">
                  <h3>Ultra Responsive</h3>
                  <p>This should be used to tell a story and let your users know more about your service. How can you benefit them?</p>
                </div>
              </div>
              <!-- .feature-panel end  -->
            </div>
            <!-- .col-md-12 end  -->
            <!-- Panel #2  -->
            <div class="col-12 col-md-12 col-lg-4 ">
              <div class="feature-panel active">
                <div class="feature-icon"><i class="flaticon-controls-1"></i></div>
                <div class="feature-content">
                  <h3>Unlimited Features</h3>
                  <p>This should be used to tell a story and let your users know more about your service. How can you benefit them?</p>
                </div>
              </div>
              <!-- .feature-panel end  -->
            </div>
            <!-- .col-md-12 end  -->
            <!-- Panel #3  -->
            <div class="col-12 col-md-12 col-lg-4 ">
              <div class="feature-panel">
                <div class="feature-icon"><i class="flaticon-diamond"></i></div>
                <div class="feature-content">
                  <h3>Creative Design</h3>
                  <p>This should be used to tell a story and let your users know more about your service. How can you benefit them?</p>
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
      <!-- Video Section-->
      <section class="video-section bg-light-primary" id="video">
        <div class="container">
          <div class="row clearfix">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
              <div class="heading heading-1 text-center">
                <h2 class="heading-title">
                   Don't miss our new awesome <br/>Services promo video</h2>
                <p class="heading-desc">This should be used to tell a story and let your users know a little more about your product or service. How can you benefit them?</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
              <div class="video">
                <div class="bg-section"><img src="{{ asset('assets/images/background/bg-9.jpg') }}" alt="background"/></div><a class="btn-video popup-video" href="https://www.youtube.com/watch?v=7e90gBu4pas"><i class="fas fa-play"></i></a>
              </div>
              <div class="connect"><span>Working everyday to get our customers' trust. </span>
                <div class="connect-link"><a href="index.html"> <span>get started now</span><i class="icon-right-arrow"></i></a></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="services features features-2 bg-pink" id="services">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="service-card">
                <div class="service-card-top">
                  <div class="bg-section"><img src="{{ asset('assets/images/background/bg-card.png') }}" alt="background"/></div>
                </div>
                <div class="service-card-middle">
                  <div class="service-card-bg">
                    <div class="bg-section"><img class="img-fluid" src="{{ asset('assets/images/background/bg-10.jpg') }}" alt="vector"/></div>
                  </div>
                </div>
                <div class="service-card-bottom">
                  <div class="bg-section"><img src="{{ asset('assets/images/background/bg-card.png') }}" alt="background"/></div>
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
                  <h2 class="heading-title">Your most exciting landing page will be LeData template</h2>
                  <p class="heading-desc">This should be used to tell a story and let your users know a little more about your product or service</p>
                </div>
                <ul class="list-unstyled service-list">
                  <li>
                    <div class="feature-panel">
                      <div class="feature-icon"><i class="flaticon-layers-1"></i></div>
                      <div class="feature-content">
                        <h3>Easy Customization</h3>
                        <p>This should be used to tell a story and let your users know more about your service. How can you benefit them?</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="feature-panel">
                      <div class="feature-icon"><i class="flaticon-radar"></i></div>
                      <div class="feature-content">
                        <h3>Supper Support</h3>
                        <p>This should be used to tell a story and let your users know more about your service. How can you benefit them?</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Start Testimonials-->
      <section class="testimonials bg-light-primary" id="testimonials">
        <div class="container">
          <div class="row clearfix">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
              <div class="heading heading-1 text-center">
                <h2 class="heading-title">
                   What people will talk about us<br/>after Using our services</h2>
                <p class="heading-desc">This should be used to tell a story and let your users know a little more about your product or service. How can you benefit them?</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
              <div class="owl-carousel carousel-dots carousel-navs" data-slide="3" data-slide-res="1" data-autoplay="false" data-nav="true" data-dots="true" data-space="30" data-loop="true" data-speed="800" data-center="true">
                <!--  Testimonial #1   -->
                <div class="testimonial-panel">
                  <div class="testimonial-body">
                    <div class="testimonial-icon"><span class="icon-left-quotes-sign"></span></div>
                    <div class="testimonial-author">
                      <div class="testimonial-img"><img src="{{ asset('assets/images/testimonials/avatar-1.png') }}" alt="avatar author"/></div>
                      <p><span>Mark Joe</span> Digital Inc</p>
                    </div>
                    <p>" This should be used to tell a story and include any testimonials you might have about your product or service for your clients "</p>
                  </div>
                </div>
                <!--  Testimonial #2 -->
                <div class="testimonial-panel">
                  <div class="testimonial-body">
                    <div class="testimonial-icon"><span class="icon-left-quotes-sign"></span></div>
                    <div class="testimonial-author">
                      <div class="testimonial-img"><img src="{{ asset('assets/images/testimonials/avatar-2.png') }}" alt="author"/></div>
                      <p><span>Leila Domniuc</span> Google Inc</p>
                    </div>
                    <p>" This should be used to tell a story and include any testimonials you might have about your product or service for your clients "</p>
                  </div>
                </div>
                <!--  Testimonial #3 -->
                <div class="testimonial-panel">
                  <div class="testimonial-body">
                    <div class="testimonial-icon"><span class="icon-left-quotes-sign"></span></div>
                    <div class="testimonial-author">
                      <div class="testimonial-img"><img src="{{ asset('assets/images/testimonials/avatar-3.png') }}" alt="author"/></div>
                      <p><span>Vera Duncan</span> Envato Inc</p>
                    </div>
                    <p>" This should be used to tell a story and include any testimonials you might have about your product or service for your clients "</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End .container  -->
      </section>
      <!-- End #testimonials -->
      <!--
      CTA #1
      =============================================
      -->
      <section class="cta text-center bg-overlay bg-overlay-dark" id="cta">
        <div class="bg-section"><img src="{{ asset('assets/images/background/bg-11.jpg') }}" alt="background"/></div>
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-8 offset-lg-2 text-center">
              <h3>Whatever the challenge, we Deliver a solution.</h3>
              <p>Bengal. Birman. American shorthair tabby russian blue. Turkish angora leopard yet malkin and ocicat cougar, cougar manx. Cornish rex cougar but bombay, cheetah.</p>
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
                      <li> <a href="mailto:support@pupuknaraku.com">support@pupuknaraku.com</a></li>
                      <li> <a href="tel:+62 822-4547-93495">+62 822-4547-9349</a></li>
                    </ul>
                  </div>
                  <ul class="list-unstyled navigation">
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Video </a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Testimonials</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <hr/>
        </div>
        <!--
        Copyrights
        =============================================
        -->
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-12 text--center">
              <div class="footer-copyright"><span>2020 &copy; <a href="http://themeforest.net/user/zytheme/portfolio?ref=zytheme">zytheme</a>. All rights reserved.</span>
                <div class="footer-social">
                  <ul class="list-unstyled">
                    <li> <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                    <li> <a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                    <li> <a href="javascript:void(0)"><i class="fab fa-dribbble"></i></a></li>
                    <li> <a href="javascript:void(0)"><i class="fab fa-behance"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End .container  -->
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
  </body>
</html>
