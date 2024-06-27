@php
    $settings = getSettings();
    $social_media_link = getSocialMediaLink();
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $settings->app_name }}::Administrative Panel</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ public_asset('assets/super_admin/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ public_asset('assets/super_admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ public_asset('assets/super_admin/css/custom.css') }}">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <style>
        /* Slider Container */
        .slider-container {
            display: inline-block;
            position: relative;
            width: 48px;
            height: 30px;
        }

        /* Checkbox Input */
        .checkbox {
            display: none;
        }

        /* Slider Background */
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0px;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            border-radius: 20px;
            transition: background-color 0.4s;
        }

        /* Slider Button */
        .slider::before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            border-radius: 50%;
            transition: transform 0.4s;
        }

        /* Checked State */
        .checkbox:checked+.slider {
            background-color: #2196F3;
        }

        /* Checked State Button Position */
        .checkbox:checked+.slider::before {
            transform: translateX(26px);
        }

        /* Additional Styles for Responsiveness */
        @media (max-width: 480px) {
            .slider-container {
                width: 40px;
                height: 24px;
            }

            .slider {
                border-radius: 12px;
            }

            .slider::before {
                height: 20px;
                width: 20px;
                left: 2px;
                bottom: 2px;
            }
        }
    </style>
    @stack('style')

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
                <img src="{{ public_asset('assets/super_admin/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{ $settings->app_name }}</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                @include('super_admin.layouts.leftsiderbar')
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

            <strong>Copyright &copy; {{ date('Y') }} {{ $settings->app_name }} All rights reserved.
        </footer>

    </div>
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{ public_asset('assets/super_admin/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>
        const APP_URL = "{{ config('app.url') }}";
        const BASE_URL = "{{ url('') }}";

        class FileSizeValidator {
            constructor(fileInputSelector, maxSize) {
                this.fileInput = $(fileInputSelector);
                this.maxSize = maxSize;
                this.bindEvents();
            }

            bindEvents() {
                const _this = this;
                this.fileInput.change(function() {
                    _this.validateFileSize(this);
                });
            }

            validateFileSize(input) {
                const fileSize = input.files[0].size;
                if (fileSize > this.maxSize) {
                    alert(`File size exceeds ${this.maxSize / (1024 * 1024)}MB limit.`);
                    // Optionally clear the file input to prevent submission
                    // $(input).val('');
                }
            }
        }

        $(".selectImgToRender").change(function(e) {
            var $input = $(this); // Store the input element in a variable
            var $input_id = "#" + $(this).attr('id');

            var fileSize = $input[0].files[0].size; // File size in bytes
            var maxSize = $input.data('max-size'); // Maximum size allowed from data-max-size attribute

            if (fileSize > maxSize) {
                toastr.error('File size exceeds 2MB limit.', 'Error!')
                $input.addClass('is-invalid');
                $input.removeClass('is-valid');
                event.preventDefault(); // Prevent form submission
                return false;
            } else {
                $input.removeClass('is-invalid');
                $input.addClass('is-valid');
            }
            var $existingImage = $input.next("img"); // Check if an image already exists after the input

            // If an image exists, remove it
            if ($existingImage.length) {
                $existingImage.remove();
            }

            $.each(e.target.files, function(index, file) {
                var reader = new FileReader();
                reader.onload = function(event) {
                    $('.imgRenderContainer').attr('src', event.target
                        .result).parent().show().addClass('my-3'); // Set the src attribute of the image
                };
                reader.readAsDataURL(file);
            });
        });
    </script>

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

    @stack('script')

    @include('super_admin.layouts.alert-message')
</body>

</html>
