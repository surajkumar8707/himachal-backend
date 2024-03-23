<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Green Home::Administrative Panel</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ public_asset('assets/super_admin/plugins/fontawesome-free/css/all.min.css') }}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{ public_asset('assets/super_admin/css/adminlte.min.css') }}">
		<link rel="stylesheet" href="{{ public_asset('assets/super_admin/css/custom.css') }}">
		<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
        <style>
            .show-message {
                position: absolute;
                z-index: 999;
                width: 50%;
                right: 2px;
                top: 20%;
                opacity: 0.8;
            }
            .switch {
                position: relative;
                display: inline-block;
                width: 30px;
                height: 17px;
                }

                .switch input {
                opacity: 0;
                width: 0;
                height: 0;
                }

                .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                -webkit-transition: .4s;
                transition: .4s;
                }

                .slider:before {
                position: absolute;
                content: "";
                height: 13px;
                width: 13px;
                left: 4px;
                bottom: 2px;
                background-color: white;
                -webkit-transition: .4s;
                transition: .4s;
                }

                input:checked + .slider {
                background-color: #2196F3;
                }

                input:focus + .slider {
                box-shadow: 0 0 1px #2196F3;
                }

                input:checked + .slider:before {
                -webkit-transform: translateX(13px);
                -ms-transform: translateX(13px);
                transform: translateX(13px);
                }

                /* Rounded sliders */
                .slider.round {
                border-radius: 17px;
                }

                .slider.round:before {
                border-radius: 50%;
                }
        </style>
        @stack('css')

	</head>
	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
			@include('super_admin.layouts.header')
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<!-- Brand Logo -->
				<a href="#" class="brand-link">
					<img src="{{ public_asset('assets/super_admin/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light">Green Home</span>
				</a>
				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user (optional) -->
					@include("super_admin.layouts.leftsiderbar")
					<!-- /.sidebar-menu -->
				</div>
				<!-- /.sidebar -->
         	</aside>

            {{-- <div class="show-message flash-message mt-2">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if (Session::has($msg))
                        <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
                            {{ Session::pull($msg) }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                @endforeach
            </div> --}}
			<!-- Content Wrapper. Contains page content -->
			@yield('content')
			<!-- /.content-wrapper -->
			<footer class="main-footer">

				<strong>Copyright &copy; 2014-2022 AmazingShop All rights reserved.
			</footer>

		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="{{ public_asset('assets/super_admin/plugins/jquery/jquery.min.js') }}"></script>

        {{-- toaster --}}
		<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

		<!-- jquery-validate -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

		<!-- jquery-validate -->
		<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

		<!-- Bootstrap 4 -->
		<script src="{{ public_asset('assets/super_admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

		<!-- AdminLTE App -->
		<script src="{{ public_asset('assets/super_admin/js/adminlte.min.js') }}"></script>

		{{-- datatable --}}
		<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

		<!-- AdminLTE for demo purposes -->
		<script src="{{ public_asset('assets/super_admin/js/demo.js') }}"></script>
        @stack('scripts')

        @include("super_admin.layouts.alert-message")
	</body>
</html>
