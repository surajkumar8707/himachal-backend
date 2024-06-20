@extends('layouts.app')

@section('title', 'About Page')

@section('content')
    {{-- public\assets\images\about-us.jpg --}}

    <section class="career_banner_image">
        <img src="{{ public_asset('assets/images/about-us.jpg') }}" class="img-responsive" alt="Royal Orchid Hotels About us">
    </section>

    <div class="container-fluid about_new">
        <div class="container px-5 mx-5">
            <div class="container">
                <h1 class="ash1"> <span itemprop="name">About Us</span> </h1>
                <p>
                    Welcome to Hotel Trehan, a distinguished hospitality brand located in the heart of Himachal, India. With
                    a
                    rich legacy spanning over two decades, we are dedicated to offering unparalleled experiences to our
                    guests.
                    Established in 2024, our brand has become synonymous with excellence and innovation in the hospitality
                    industry.
                </p>
                <br>
                <p>
                    At Hotel Trehan, we cater to both business and leisure travelers seeking refined comfort, exquisite
                    cuisine,
                    and authentic Indian hospitality. Our diverse portfolio includes luxurious hotels, elegant resorts, and
                    charming inns, ensuring that every guest discovers their perfect retreat. Whether you're exploring the
                    vibrant city of Himachal, embarking on a cultural journey, or seeking tranquility amidst nature, our
                    properties provide an unmatched blend of comfort and convenience.
                </p>

                <br>

                <p>
                    Situated in the historic city of Himachal, our hotel embodies the essence of Indian hospitality, blending
                    modern amenities with traditional charm. Our passionate team is committed to delivering exceptional
                    guest
                    experiences, guided by our core values of integrity, excellence, and personalized service.
                </p>

                <br>

                <p>
                    Experience the warmth and hospitality of Hotel Trehan, where every stay is a memorable journey.
                </p>
            </div>
        </div>
    </div>
@endsection
