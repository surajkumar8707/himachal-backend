<!DOCTYPE html> <!--demo-->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head id="Head1">
    <link rel="canonical" href="#" lang="en" />
    <meta name="google-site-verification" content="ABbmA74E7dibyrcRq7uZgaO3ckpZprS2L_69gd1I2OA" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="Cache-Control" content="Public" />
    <title>
        {{ getSettings()->app_name }} | @yield('title')
    </title>
    <link href="{{ public_asset('assets/frontend/css/site.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet" type="text/css"/>
    {{-- <link href="{{ public_asset('css/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css"/> --}}
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="{{ public_asset('assets/frontend/images/favicon1.ico') }}" />

    @stack('styles')
</head>

<body>
    @include('layouts.header')
    @yield('content')

    {{-- <div class="modal" id="myModal303" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
        <div class="modal-dialog" role="document">
            <div class="modal-content"></div>
        </div>
    </div> --}}
    <style>
        .resturant_name_box p {
            color: #fff;
            padding: 0 15px;
            font-size: 16px;
            line-height: 28px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/ui/1.11.0/jquery-ui.min.js" type="text/javascript"></script>
    <script src="{{ public_asset('assets/frontend/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ public_asset('assets/frontend/js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src='{{ public_asset('assets/frontend/js/bootstrap-datepicker.js') }}'></script>
    </script>

    <div id="cookieNotice" class="light display-right">
        {{-- <div id="closeIcon"></div>
        <div class="content-wrap msg-wrap">
            <h4 class="modal-title">PRIVACY AND COOKIES POLICY</h4>
            <p></p>
            <button type="button" class="btn-primary" onclick="acceptCookieConsent();">Accept</button>
        </div> --}}
    </div>
    <a class="mobile_booking_engine" href="javascript:void(0)">BOOK NOW</a>
    <div id="mobilebooking"></div>

    @include('layouts.footer')
    <div id="stop" class="scrollTop"> <span><a href=""><i class="fa fa-angle-up"></i></a></span>
    </div>

    <script src='{{ public_asset('assets/frontend/js/lightbox.min.js') }}'></script>
    <script src='{{ public_asset('assets/frontend/js/custom.js') }}'></script>
    <script src='{{ public_asset('assets/frontend/js/validations.js') }}'></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js' async></script>
    {{-- </form> --}}
</body>

</html>
