<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-signin-client_id" content="438813564258-cdl5dne36849c6ng0cle0qe4kk0a2ad8.apps.googleusercontent.com">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{asset('login/images/img-01.png')}}" alt="IMG">
				</div>

				<form class="login100-form validate-form">
					<center>
						<img src="{{asset('foto/logo.png')}}" style="width: 100px;">
					</center>
					<span class="login100-form-title">
						WANA SMART
					</span>

					

				<div id="g_id_onload"
		             data-client_id="438813564258-cdl5dne36849c6ng0cle0qe4kk0a2ad8.apps.googleusercontent.com"
		             data-login_uri="{{url('dologin')}}"
		             data-_token="{{ csrf_token() }}">
		        </div>
		        <center>
		        <div class="g_id_signin"
		             data-type="standard"
		             data-size="large"
		             data-theme="outline"
		             data-text="sign_in_with"
		             data-shape="pill"
		             data-logo_alignment="left">
		        </div>
		        <center>
		        	<small>
					<p class="mb-4">Silahkan gunakan akun Google anda untuk login ke aplikasi.</p>
					</small>
				</center>
					
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{asset('login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
	<script src="https://accounts.google.com/gsi/client" async defer></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('login/vendor/tilt/tilt.jquery.min.js')}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>