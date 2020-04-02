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
    <title>Home</title>

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
        <!-- HEADER MOBILE-->
        @include("layouts/header")
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        @include("layouts/sidebar")
        <!-- END MENU SIDEBAR-->

       

        <!-- PAGE CONTAINER-->
        <div class="page-container">

        <!-- HEADER DESKTOP-->
        @include("layouts/headerD");
        <!-- END HEADER DESKTOP-->
             <div class="main-content" style="padding-top:100px !important">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                             @yield('seccion')
                    </div>
                </div>
             </div>
        </div>
        <!-- END PAGE CONTAINER-->
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