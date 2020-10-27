<!DOCTYPE html>
<html lang="en">
<head>
	<title>Masuk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	@include('layouts.favicon')
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('auth/css/main.css') }}">
<!--===============================================================================================-->
	<link href="{{ asset('main/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">

</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
        <form method="POST" action="{{ route('login') }}" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
        @csrf
					<span class="login100-form-title">
						Otentikasi
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Harap masukkan nama pengguna/ email/ no. telpon">
						<input id="username" class="input100 form-control @error('username') is-invalid @enderror" type="text" name="username" placeholder="{{ __('Nama Pengguna/ Email/ No Handphone') }}" value="{{ old('username') }}" required autofocus>
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
					</div>

          <div class="wrap-input100 validate-input m-b-16" data-validate="Harap masukkan kata sandi">
						<input id="password" class="input100 form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="{{ __('Kata Sandi') }}" required autofocus>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
					</div>

					<!-- <div class="text-right p-t-13 p-b-23">
						<span class="txt1">
							Lupa
						</span>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Nama pengguna / kata sandi') }}
                </a>
            @endif
            <span class="txt1">
							?
						</span>
					</div> -->

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
						    {{ __('Masuk') }}
						</button>
					</div>

					<div class="flex-col-c p-t-140 p-b-40">
						<span class="txt1 p-b-9">
							Belum punya akun?
						</span>

						<a href="{{ route('register') }}" class="txt3">
							Daftar Sekarang
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>


<!--===============================================================================================-->
	<script src="{{ asset('auth/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('auth/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('auth/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('auth/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('auth/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('auth/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('auth/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('auth/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('auth/js/main.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('main/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>
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
</body>
</html>
