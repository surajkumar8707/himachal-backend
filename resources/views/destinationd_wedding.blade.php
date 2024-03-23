@extends('layouts.app')

@section('content')

<!-- Header Section -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h1 class="display-4 text-white text-uppercase">Destination Wedding</h1>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Destination Wedding</p>
            </div>
        </div>
    </div>
</div>
<!-- End Header Section -->

<!-- Introduction Section -->
<section class="container py-5">
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <h2 class="mb-4">Crafting Your Dream Wedding Experience</h2>
            <p class="lead">Welcome to our world of bespoke destination weddings, where your dreams meet meticulous planning and execution. At Traveler, we specialize in curating unforgettable wedding experiences tailored to your unique desires.</p>
        </div>
    </div>
</section>
<!-- End Introduction Section -->

<!-- Destination Options Section -->
<section class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="img/destination1.jpg" class="img-fluid rounded" alt="Destination Wedding">
            </div>
            <div class="col-md-6">
                <h2 class="mb-4">Choose Your Dream Destination</h2>
                <p>With our destination wedding packages, you have the freedom to select from a myriad of enchanting locations around the globe. Whether it's a sun-kissed beach, a historic castle, or a luxurious resort, we offer an array of breathtaking venues to host your special day.</p>
                <p>Embark on a journey to discover the perfect backdrop for your love story.</p>
                <a href="#" class="btn btn-primary">Explore Destinations</a>
            </div>
        </div>
    </div>
</section>
<!-- End Destination Options Section -->

<!-- Services Section -->
<section class="container py-5">
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <h2 class="mb-4">Our Tailored Services</h2>
            <p class="lead">From concept to execution, our dedicated team is committed to bringing your wedding vision to life with precision and elegance. Discover the comprehensive suite of services we offer to ensure a seamless and unforgettable celebration.</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="card mb-4 shadow">
                <img src="img/service1.jpg" class="card-img-top" alt="Venue Selection">
                <div class="card-body">
                    <h3 class="card-title">Venue Selection</h3>
                    <p class="card-text">Choose from an array of stunning venues that reflect your style and personality, ensuring the perfect backdrop for your special day.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow">
                <img src="img/service2.jpg" class="card-img-top" alt="Event Planning">
                <div class="card-body">
                    <h3 class="card-title">Event Planning</h3>
                    <p class="card-text">Our seasoned event planners will meticulously coordinate every detail of your wedding, ensuring a flawless and stress-free experience for you and your guests.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4 shadow">
                <img src="img/service3.jpg" class="card-img-top" alt="Travel Arrangements">
                <div class="card-body">
                    <h3 class="card-title">Travel Arrangements</h3>
                    <p class="card-text">Leave the travel logistics to us as we handle everything from flights and accommodations to transportation and excursion planning for you and your guests.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Services Section -->

<!-- Testimonials Section -->
<section class="container-fluid bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h2 class="mb-4">Client Testimonials</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="testimonial text-center">
                            <p class="mb-4">"Our destination wedding exceeded all expectations, thanks to the impeccable planning and execution by the Traveler team. From the breathtaking venue to the seamless coordination, every aspect of our special day was flawless."</p>
                            <h4 class="font-weight-bold">John & Emily</h4>
                            <p class="text-muted">Newlyweds</p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial text-center">
                            <p class="mb-4">"We couldn't be happier with our decision to choose Traveler for our destination wedding. The attention to detail, professionalism, and personalized service truly made our wedding day unforgettable. Thank you for making our dreams come true!"</p>
                            <h4 class="font-weight-bold">Michael & Sarah</h4>
                            <p class="text-muted">Newlyweds</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Testimonials Section -->

<!-- Call to Action Section -->
<section class="container-fluid bg-primary py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h2 class="text-white mb-4">Ready to Plan Your Dream Wedding?</h2>
                <p class="lead text-white mb-4">Contact us today to start planning the destination wedding of your dreams!</p>
                <a href="{{ route('contact') }}" class="btn btn-outline-light btn-lg">Get in Touch</a>
            </div>
        </div>
    </div>
</section>
<!-- End Call to Action Section -->

@endsection
