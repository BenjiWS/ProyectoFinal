<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/cool/login_css/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/cool/login_css/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/cool/login_css/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/cool/login_css/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/cool/login_css/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/cool/login_css/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/cool/login_css/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/cool/login_css/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/cool/login_css/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/cool/login_css/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/cool/login_css/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('assets/cool/login_css/images/bg-01.jpg');">
			<div class="wrap-login100">
                <form class="login100-form validate-form"  method="POST" action="{{ route('login') }}"">
                    @csrf
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
                            <div class="form-group">
                                <div class="wrap-input100 validate-input" data-validate="Enter username">
                                    <input class="input100" id="username" placeholder="Username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" autocomplete="off">                            
                                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <input class="input100"  placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">                                   
                                    <span class="focus-input100" data-placeholder="&#xf191;"></span> 
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="contact100-form-checkbox">
                                <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                <label class="label-checkbox100" for="ckb1">
                                    Remember me
                                </label>
                            </div>
        
                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn" type="submit" style="
                                text-align: center;"> {{ __('Login') }}</button>
                            </div>
        
                            <div class="text-center p-t-50">
                                <a class="txt1" href="#">
                                    Forgot Password?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="assets/cool/login_css/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/cool/login_css/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/cool/login_css/vendor/bootstrap/js/popper.js"></script>
	<script src="assets/cool/login_css/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/cool/login_css/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/cool/login_css/vendor/daterangepicker/moment.min.js"></script>
	<script src="assets/cool/login_css/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/cool/login_css/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/cool/login_css/js/main.js"></script>

</body>
</html>
