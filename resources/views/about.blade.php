@extends('layouts.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">About Us</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">About Us</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- About Us Content Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="text-primary mb-4">Who We Are</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at ante ac dui gravida dignissim vel nec leo. Nulla sit amet viverra elit. Donec congue porta nulla, vitae pretium odio ultrices non.</p>
                <p>Nulla facilisi. Phasellus pretium consectetur nisl at eleifend. Morbi sit amet lorem nec risus vestibulum dapibus. Donec in elit in ipsum cursus auctor.</p>
            </div>
            <div class="col-lg-6">
                <img src="path_to_your_image" alt="About Us Image" class="img-fluid">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6">
                <img src="path_to_your_image" alt="Our Mission Image" class="img-fluid">
            </div>
            <div class="col-lg-6">
                <h2 class="text-primary mb-4">Our Mission</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at ante ac dui gravida dignissim vel nec leo. Nulla sit amet viverra elit. Donec congue porta nulla, vitae pretium odio ultrices non.</p>
                <p>Nulla facilisi. Phasellus pretium consectetur nisl at eleifend. Morbi sit amet lorem nec risus vestibulum dapibus. Donec in elit in ipsum cursus auctor.</p>
            </div>
        </div>
    </div>
    <!-- About Us Content End -->
@endsection
