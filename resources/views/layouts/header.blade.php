<!-- Topbar Start -->
<div class="container-fluid bg-light pt-3 d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <p><i class="fa fa-envelope mr-2"></i>{{ $settings->email }}</p>
                    <p class="text-body px-3">|</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>{{ $settings->contact }}</p>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-primary px-3" href="{{ $social_media_link->facebook }}">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-primary px-3" href="{{ $social_media_link->twitter }}">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-primary px-3" href="{{ $social_media_link->linkedin }}">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-primary px-3" href="{{ $social_media_link->instagram }}">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-primary pl-3" href="{{ $social_media_link->youTube }}">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
        <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
            <a href="{{ route('home') }}" class="navbar-brand">
                {{-- <h1 class="m-0 text-primary"><span class="text-dark">TRAVEL</span>ER</h1> --}}
                <h1 class="m-0 text-primary">{{ $settings->app_name }}</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('jungle.safari') }}" class="nav-item nav-link {{ request()->is('jungle-safari') ? 'active' : '' }}">Jungle Safari</a>
                    <a href="{{ route('canter.ride') }}" class="nav-item nav-link {{ request()->is('canter-ride') ? 'active' : '' }}">Canter Ride</a>
                    <a href="{{ route('resorts') }}" class="nav-item nav-link {{ request()->is('resorts') ? 'active' : '' }}">Resorts</a>
                    <div class="nav-item dropdown">
                        <a href="{{ route('home') }}" class="nav-link dropdown-toggle {{ request()->is('school-group', 'destination-wedding', 'coorporate-group') ? 'active' : '' }}" data-toggle="dropdown">Group</a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="{{ route('school.group') }}" class="dropdown-item {{ request()->is('school-group') ? 'active' : '' }}">School Group</a>
                            <a href="{{ route('destination.wedding') }}" class="dropdown-item {{ request()->is('destination-wedding') ? 'active' : '' }}">Destination Wedding</a>
                            <a href="{{ route('coorporate.group') }}" class="dropdown-item {{ request()->is('coorporate-group') ? 'active' : '' }}">Corporate Group</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
