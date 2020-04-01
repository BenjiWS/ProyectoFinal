<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    <!-- Fontfaces CSS-->
    <link href="assets/cool/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/cool/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/cool/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/cool/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="assets/cool/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets/cool/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/cool/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="assets/cool/wow/animate.css" rel="stylesheet" media="all">
    <link href="assets/cool/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="assets/cool/slick/slick.css" rel="stylesheet" media="all">
    <link href="assets/cool/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/cool/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/cool/css/theme.css" rel="stylesheet" media="all">

</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="assets/cool/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div> 
                        <div class="login-form">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group">
                                <label for="username">Username</label>
                                    <input id="username" placeholder="Username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required  autofocus>
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                           
                            </div>
                            <div class="form-group">
                                   <label>Password</label>
                                    <input class="au-input au-input--full"   placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <div class="login-checkbox">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                      {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <label style="text-align:right">
                                    @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                   </label>
                                
                            </div>
                                    <button type="submit" class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="
                                    text-align: center;"> {{ __('Login') }}</button>
                          </form>    
                        </div>                                       
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    <!-- Jquery JS-->
    <script src="assets/cool/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="assets/cool/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/cool/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="assets/cool/slick/slick.min.js">
    </script>
    <script src="assets/cool/wow/wow.min.js"></script>
    <script src="assets/cool/animsition/animsition.min.js"></script>
    <script src="assets/cool/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="assets/cool/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/cool/counter-up/jquery.counterup.min.js">
    </script>
    <script src="assets/cool/circle-progress/circle-progress.min.js"></script>
    <script src="assets/cool/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/cool/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/cool/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="assets/cool/js/main.js"></script>

</body>

</html>
<!-- end document-->
