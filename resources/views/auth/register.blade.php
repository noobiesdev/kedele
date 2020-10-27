<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daftar</title>
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
        <form method="POST" action="{{ route('register') }}" class="login100-form validate-form p-l-55 p-r-55 p-t-178" autocomplete="off">
        @csrf
					<span class="login100-form-title">
						Pendaftaran
					</span>

					<div class="validate-input m-b-16" data-validate="Harap pilih salah satu">
						<input id="level-produsen" class="@error('level') is-invalid @enderror" type="radio" name="role" placeholder="{{ __('Produsen') }}" value="produsen" checked>
						<label for="level-produsen">{{ __('Saya memiliki usaha olahan kedelai') }}</label><br>
						<input id="level-konsumen" class="@error('level') is-invalid @enderror" type="radio" name="role" placeholder="{{ __('Konsumen') }}" value="konsumen">
						<label for="level-konsumen">{{ __('Saya ingin membeli produk') }}</label>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Harap masukkan nama pengguna">
						<input id="nama" class="input100 form-control @error('nama') is-invalid @enderror" type="text" name="nama" placeholder="{{ __('Nama Lengkap') }}" value="{{ old('nama') }}" required autofocus>
            @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Harap masukkan nama pengguna">
						<input id="username" class="input100 form-control @error('username') is-invalid @enderror" type="text" name="username" placeholder="{{ __('Nama Pengguna') }}" value="{{ old('username') }}" required autofocus>
            @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Harap masukkan email">
						<input id="email" class="input100 form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="{{ __('Email') }}" value="{{ old('email') }}" required autofocus>
						@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Harap masukkan  no. handphone">
						<input id="no_hp" class="input100 form-control @error('no_hp') is-invalid @enderror" type="text" name="no_hp" placeholder="{{ __('No Handphone') }}" value="{{ old('no_hp') }}" required autofocus>
						@error('no_hp')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Harap masukkan kata sandi">
						<input id="password" class="input100 form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="{{ __('Kata Sandi') }}" required autocomplete="new-password">
						@error('password')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Konfirmasi kata sandi">
						<input id="password-confirmation" class="input100 form-control @error('password') is-invalid @enderror" type="password" name="password_confirmation" placeholder="{{ __('Konfirmasi kata sandi') }}" required autocomplete="new-password"s>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
						    {{ __('Daftar') }}
						</button>
					</div>

					<div class="flex-col-c p-t-70 p-b-40">
						<span class="txt1 p-b-9">
							Sudah punya akun?
						</span>

						<a href="{{ route('login') }}" class="txt3">
							Masuk Sekarang
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
