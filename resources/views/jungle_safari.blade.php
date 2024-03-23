@extends('layouts.app')

@section('content')

<!-- Page Header -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">Jungle Safari</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Jungle Safari</p>
            </div>
        </div>
    </div>
</div>
<!-- End Page Header -->

<!-- Main Content -->
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <h2 class="text-primary mb-4">Discover the Untamed Wilderness</h2>
            <p>Embark on an exhilarating journey through the heart of the jungle with our expert guides. Our jungle safari tours offer a unique opportunity to immerse yourself in the wonders of nature and witness the diverse wildlife and stunning landscapes of some of the world's most pristine wilderness areas.</p>
            <h3 class="text-primary mt-5 mb-4">Highlights of Our Jungle Safari Tours</h3>
            <ul>
                <li>Guided tours led by experienced naturalists and wildlife experts</li>
                <li>Opportunities to spot rare and endangered species in their natural habitat</li>
                <li>Comfortable accommodations in eco-friendly lodges and campsites</li>
                <li>Customizable itineraries to suit your interests and schedule</li>
                <li>Optional activities such as birdwatching, nature walks, and cultural experiences</li>
            </ul>
            <h3 class="text-primary mt-5 mb-4">Our Safari Packages</h3>
            <p>Choose from a variety of safari packages tailored to suit different preferences and interests:</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Classic Safari</h5>
                            <p class="card-text">Ideal for wildlife enthusiasts and first-time visitors, this package offers an immersive safari experience with guided tours, comfortable accommodations, and exciting activities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Photography Safari</h5>
                            <p class="card-text">Designed for photography enthusiasts, this package provides exclusive opportunities to capture stunning images of wildlife and landscapes under the guidance of professional photographers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <h3 class="text-primary mt-5 mb-4">Book Your Adventure</h3>
            <p>Ready to embark on your jungle safari adventure? Book your tour now and prepare for an unforgettable experience in the heart of nature.</p>
        </div>
        <div class="col-lg-4">
            <div class="bg-light p-4">
                <h4 class="text-primary mb-4">Book Your Jungle Safari</h4>
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="destination">Destination</label>
                        <select class="form-control" id="destination" name="destination">
                            <option value="1">Amazon Rainforest</option>
                            <option value="2">Sundarbans Mangrove Forest</option>
                            <option value="3">Maasai Mara National Reserve</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Select Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="form-group">
                        <label for="participants">Number of Participants</label>
                        <input type="number" class="form-control" id="participants" name="participants" min="1">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Book Now</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Main Content -->

@endsection
