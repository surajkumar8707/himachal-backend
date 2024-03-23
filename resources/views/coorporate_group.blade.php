@extends('layouts.app')

@section('content')
    <!-- Page Header Section -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-4 text-white text-uppercase">Corporate Group</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Corporate Group</p>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header Section -->

    <!-- Corporate Group Content Section -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center mb-5">
                        <h2 class="text-primary text-uppercase">Corporate Group Packages</h2>
                        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla et justo nec justo sagittis consectetur ac vitae nulla.</p>
                    </div>
                    <div class="card mb-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Corporate Retreat Package</h5>
                            <p class="card-text">Ideal for team-building and strategic planning, our Corporate Retreat Package offers a tranquil escape in nature's embrace. Enjoy luxurious accommodations, tailored activities, and gourmet dining options.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                    <div class="card mb-4 shadow">
                        <div class="card-body">
                            <h5 class="card-title">Executive Conference Package</h5>
                            <p class="card-text">Host your next executive conference in style with our Executive Conference Package. State-of-the-art facilities, impeccable service, and customizable meeting spaces ensure a productive and seamless event.</p>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                    <!-- Add more corporate group packages as needed -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Corporate Group Content Section -->

    <!-- Testimonials Section -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-primary text-uppercase">Client Testimonials</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce lobortis lorem at nisi malesuada, nec posuere nisi tristique."</p>
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text"><small class="text-muted">Company ABC</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <p class="card-text">"Integer id velit a ipsum aliquam dapibus. Sed in dolor sit amet nisi maximus volutpat."</p>
                            <h5 class="card-title">Jane Smith</h5>
                            <p class="card-text"><small class="text-muted">Company XYZ</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <p class="card-text">"Vestibulum tempus turpis in mi tempus, sed vehicula velit feugiat. Nullam quis libero sed tortor dictum condimentum."</p>
                            <h5 class="card-title">Mark Johnson</h5>
                            <p class="card-text"><small class="text-muted">Company 123</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials Section -->

    <!-- Contact Form Section -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-primary text-uppercase">Contact Us</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-white p-4 shadow">
                        <form action="#" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Form Section -->
@endsection
