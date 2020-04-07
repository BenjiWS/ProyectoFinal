<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Cliente Sistema</title>
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

	<script src="{{asset("assets/limitless/global_assets/js/plugins/forms/styling/uniform.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/forms/styling/switchery.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/demo_pages/form_checkboxes_radios.js")}}"></script>
	<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<link href="{{asset("assets/limitless/style_user.css")}}" rel="stylesheet" media="all">

	<!--Notification -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

	<script src="{{asset("assets/limitless/global_assets/js/plugins/forms/validation/validate.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/forms/inputs/touchspin.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/forms/selects/select2.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/forms/styling/switch.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/forms/styling/switchery.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/forms/styling/uniform.min.js")}}"></script>

	<script src="{{asset("assets/limitless/global_assets/js/demo_pages/form_validation.js")}}"></script>

	<script src="{{asset("assets/limitless/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/extensions/jquery_ui/widgets.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/extensions/jquery_ui/effects.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/extensions/mousewheel.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/extensions/jquery_ui/globalize/globalize.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/extensions/jquery_ui/globalize/cultures/globalize.culture.de-DE.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/extensions/jquery_ui/globalize/cultures/globalize.culture.ja-JP.js")}}"></script>

	<script src="{{asset("assets/limitless/global_assets/js/demo_pages/jqueryui_forms.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/plugins/forms/selects/select2.min.js")}}"></script>
	<script src="{{asset("assets/limitless/global_assets/js/demo_pages/form_select2.js")}}"></script>
    <style>
		.dataTables_info
		{
			padding: 20px !important;
		}
		.dataTables_paginate
		{
			padding: 20px !important;
		}
	</style>

</head>
</head>
<body>



	<!-- Main navbar -->
	@include('ViewClienteSistema.vistas.navbar')
	<!-- /main navbar -->


	<!-- Page header -->
	@include('ViewClienteSistema.vistas.header')
	<!-- /page header -->
		

	<!-- Page content -->
	<div class="page-content pt-0">

		<!-- Main sidebar -->
		@include('ViewClienteSistema.vistas.sidebar')
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