{{-- @dd('From footer', $settings, $social_media_link); --}}
<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="{{ route('home') }}" class="navbar-brand">
                {{-- <h1 class="text-primary"><span class="text-white">TRAVEL</span>ER</h1> --}}
                <h1 class="text-primary">{{ $settings->app_name }}</h1>
            </a>
            <p>Sed ipsum clita tempor ipsum ipsum amet sit ipsum lorem amet labore rebum lorem ipsum dolor. No sed vero lorem dolor dolor</p>
            <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Follow Us</h6>
            <div class="d-flex justify-content-start">
                <a class="btn btn-outline-primary btn-square mr-2" href="{{ $social_media_link->youTube }}"><i class="fab fa-youtube"></i></a>
                <a class="btn btn-outline-primary btn-square mr-2" href="{{ $social_media_link->twitter }}"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary btn-square mr-2" href="{{ $social_media_link->facebook }}"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary btn-square mr-2" href="{{ $social_media_link->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-primary btn-square" href="{{ $social_media_link->instagram }}"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white-50 mb-2" href="{{ route('about') }}"><i class="fa fa-angle-right mr-2"></i>About</a>
                <a class="text-white-50 mb-2" href="{{ route('jungle.safari') }}"><i class="fa fa-angle-right mr-2"></i>Jungle Safari</a>
                <a class="text-white-50 mb-2" href="{{ route('canter.ride') }}"><i class="fa fa-angle-right mr-2"></i>Canter Ride</a>
                <a class="text-white-50 mb-2" href="{{ route('resorts') }}"><i class="fa fa-angle-right mr-2"></i>Resorts</a>
                <a class="text-white-50 mb-2" href="{{ route('school.group') }}"><i class="fa fa-angle-right mr-2"></i>School Group</a>
                <a class="text-white-50 mb-2" href="{{ route('destination.wedding') }}"><i class="fa fa-angle-right mr-2"></i>Destination Wedding</a>
                <a class="text-white-50" href="{{ route('coorporate.group') }}"><i class="fa fa-angle-right mr-2"></i>Corporate Group</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Usefull Links</h5>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white-50 mb-2" href="{{ route('about') }}"><i class="fa fa-angle-right mr-2"></i>About</a>
                <a class="text-white-50 mb-2" href="{{ route('contact') }}"><i class="fa fa-angle-right mr-2"></i>Contact</a>
                <a class="text-white-50 mb-2" href="{{ route('privacy.policy') }}"><i class="fa fa-angle-right mr-2"></i>Privacy Policy</a>
                <a class="text-white-50 mb-2" href="{{ route('term.condition') }}"><i class="fa fa-angle-right mr-2"></i>Term Condition</a>
                <a class="text-white-50 mb-2" href="{{ route('resorts') }}"><i class="fa fa-angle-right mr-2"></i>Resorts</a>
                <a class="text-white-50 mb-2" href="{{ route('school.group') }}"><i class="fa fa-angle-right mr-2"></i>School Group</a>
                <a class="text-white-50 mb-2" href="{{ route('destination.wedding') }}"><i class="fa fa-angle-right mr-2"></i>Destination Wedding</a>
                <a class="text-white-50" href="{{ route('coorporate.group') }}"><i class="fa fa-angle-right mr-2"></i>Coorporate Group</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contact Us</h5>
            <p><i class="fa fa-map-marker-alt mr-2"></i>{{ $settings->address }}</p>
            <p><i class="fa fa-phone-alt mr-2"></i>{{ $settings->contact }}</p>
            <p><i class="fa fa-envelope mr-2"></i>{{ $settings->email }}</p>
            <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Newsletter</h6>
            <div class="w-100">
                <div class="input-group">
                    <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Your Email">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-3">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white-50">Copyright &copy; <a href="#">Gaurav Tiwari</a>. All Rights Reserved.</a>
            </p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
            <p class="m-0 text-white-50">Designed by <a href="javascript:;">Gaurav Tiwari</a>
            </p>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('public/assets/frontend/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('public/assets/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/assets/frontend/lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('public/assets/frontend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('public/assets/frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Contact Javascript File -->
<script src="{{ asset('public/assets/frontend/mail/jqBootstrapValidation.min.js') }}"></script>
<script src="{{ asset('public/assets/frontend/mail/contact.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('public/assets/frontend/js/main.js') }}"></script>
