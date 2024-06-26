<style>
    header {
        min-height: 55px;
        position: relative;
        top: 0;
        left: 0;
        color: #fff;
        width: 100%;
        z-index: 99999;
        padding: 0;
        background: #c40b0b;
    }
</style>
<header>
    <nav class="navbar top-bar navbar-default">
        <div class="container-fluid">
            <div class="visible-xs col-xs-12 no-padding mobile-nav">
                <div class="col-xs-8 no-padding">
                    <a href='{{ route('home') }}'>
                        <h3>{{ getSettings()->app_name }}</h3>
                    </a>
                </div>
                <div class="col-xs-4 p0-sm">
                    <a href="tel:+91 8041276667" target="_blank" class="phone_icon_mob" style="display: none;">
                        <i class="fas fa-phone" data-fa-transform="rotate-30"></i>
                    </a>
                    <p class="text-right"> <i class="fa fa-bars property_menu_bar"></i> </p>
                </div>
            </div>
            <div class="navbar-header hidden-xs">
                <div class="col-md-12 log hidden-xs">
                    <a href='./'>
                    </a>
                </div>
                <div id="google_translate_element" style="margin: 0 0 0 12px;"></div>
            </div>
            <ul class="menu"> <a href="#" class="close_btn">X</a>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('room.type') }}">Room Type</a></li>
                <li><a href="{{ route('booking') }}">Booking</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                {{-- <li class="mob_hide">
                    <a href="javascript:void(0);" id="opmenu" data-toggle="modal" data-target="#menuBox">Destinations </a>
                </li>
                <li id="opmen_mobile"> <a class="findhotel_link" href="javascript:void(0);">Destinations</a>
                    <div class='sidebar-1'> </div>
                </li>
                <li id="opmen_mobileInt"> <a class="findhotel_Intlink" href="javascript:void(0);">International</a>
                    <div class='sidebar-2'> </div>
                </li> --}}
                <li><a href='contact-us'>Contact</a></li>
                <div class="navbar-header mobile_view_social">
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="fab fa-instagram"></i></a>
                </div>
            </ul>
        </div>
    </nav>
</header>
