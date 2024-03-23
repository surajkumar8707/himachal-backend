@extends('layouts.app')

@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
            <h3 class="display-4 text-white text-uppercase">School Group Packages</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">School Group Packages</p>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- School Group Packages Start -->
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="text-primary text-uppercase">Explore our School Group Packages</h2>
        <p class="lead">Immerse your students in educational and adventurous experiences with our meticulously crafted school group packages.</p>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Package Image">
                <div class="card-body">
                    <h5 class="card-title">Outdoor Learning Camp</h5>
                    <p class="card-text">Engage your students in an immersive outdoor learning camp where they participate in team-building exercises, nature exploration, and environmental awareness programs under the guidance of experienced educators.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Package Image">
                <div class="card-body">
                    <h5 class="card-title">Cultural Heritage Tours</h5>
                    <p class="card-text">Embark on an enriching journey through historical sites, museums, and cultural landmarks to provide your students with a deeper understanding of our rich heritage and traditions.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Package Image">
                <div class="card-body">
                    <h5 class="card-title">Adventure Expeditions</h5>
                    <p class="card-text">Ignite the spirit of adventure in your students with thrilling expeditions that include activities like trekking, camping, rock climbing, and wildlife exploration, all aimed at fostering leadership and resilience.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- School Group Packages End -->

@endsection
