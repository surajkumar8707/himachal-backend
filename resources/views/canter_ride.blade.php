@extends('layouts.app')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h2 class="display-4 text-white text-uppercase">Unforgettable Canter Ride Experience</h2>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Canter Ride</p>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Canter Ride Information Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="mb-4">Experience the Thrill of Canter Ride</h3>
                <p>Embark on an exhilarating journey through the heart of nature with our exclusive Canter Ride experience. </p>

                <h4 class="mt-5 mb-3">Discover Nature's Beauty</h4>
                <p>Our Canter Ride takes you deep into the heart of wilderness, where you'll encounter the awe-inspiring beauty of nature at its finest. Traverse through lush forests, rugged terrains, and breathtaking landscapes as you immerse yourself in the sights and sounds of the wild.</p>

                <h4 class="mt-5 mb-3">Spot Majestic Wildlife</h4>
                <p>Be prepared to witness the wonders of the animal kingdom as you embark on your Canter Ride adventure. From graceful deer to majestic elephants, our experienced guides will help you spot a diverse array of wildlife in their natural habitat.</p>

                <h4 class="mt-5 mb-3">Expert Guidance</h4>
                <p>Rest assured, you're in safe hands with our team of experienced guides who accompany you throughout the journey. They'll share their in-depth knowledge of the region's flora and fauna, ensuring an educational and enriching experience for all.</p>

                <h4 class="mt-5 mb-3">Comfort and Convenience</h4>
                <p>Sit back, relax, and enjoy the ride in our comfortable Canter vehicles equipped with spacious seating and open-air views. Whether you're a wildlife enthusiast, nature lover, or adventure seeker, our Canter Ride promises an unforgettable experience for everyone.</p>

                <h4 class="mt-5 mb-3">Book Your Adventure</h4>
                <p>Ready to embark on your Canter Ride adventure? Book your experience today and prepare for an unforgettable journey into the heart of nature.</p>
            </div>
            <div class="col-lg-4">
                <!-- Image Placeholder -->
                <img src="https://via.placeholder.com/400" alt="Canter Ride Image" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!-- Canter Ride Information End -->

@endsection
