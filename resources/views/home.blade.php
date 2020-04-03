<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Home</title>
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset("assets/limitless/global_assets/css/icons/icomoon/styles.css")}}" rel="stylesheet" type="text/css">
	<link href="{{asset("assets/limitless/asset/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css">
	<link href="{{asset("assets/limitless/asset/css/bootstrap_limitless.min.css")}}" rel="stylesheet" type="text/css">
	<link href="{{asset("assets/limitless/asset/css/layout.min.css")}}" rel="stylesheet" type="text/css">
	<link href="{{asset("assets/limitless/asset/css/components.min.css")}}" rel="stylesheet" type="text/css">
	<link href="{{asset("assets/limitless/asset/css/colors.min.css")}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset("assets/limitless/global_assets/js/main/jquery.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/main/bootstrap.bundle.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/loaders/blockui.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/ui/ripple.min.js")}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset("assets/limitless/global_assets/js/plugins/visualization/d3/d3.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/visualization/d3/d3_tooltip.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/forms/styling/switchery.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/ui/moment/moment.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/pickers/daterangepicker.js")}}"></script>

	<script src="{{asset("assets/limitless/asset/js/app.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/demo_pages/dashboard.js")}}"></script>
	<!-- /theme JS files -->
    

</head>
<body>

	<!-- Main navbar -->
	@include('layouts.navbar')
	<!-- /main navbar -->


	<!-- Page header -->
	@include('layouts.header')
	<!-- /page header -->
		

	<!-- Page content -->
	<div class="page-content pt-0">

		<!-- Main sidebar -->
		@include('layouts.sidebar')
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">
						 @yield('seccion')
			</div>
		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
		
</body>
</html>
