@extends('layouts.app')

@section('title', 'Terma and Codition')

@section('content')
    {{-- public\assets\images\about-us.jpg --}}

    <section class="career_banner_image">
        <img src="{{ public_asset('assets/images/Terms.jpg') }}" class="img-responsive" alt="Royal Orchid Hotels About us">
    </section>

    <div class="container-fluid about_new" style="margin: 20px !important;">
        <div class="container px-5 m-5">
            <br><br><br>
            <div class="container">
                <h2 class="text-left">Booking Policy:</h2>
                <ul>
                    <li>All bookings are subject to availability.</li>
                    <li>Guests must provide valid identification and payment details at the time of booking.</li>
                    <li>Advance payment or credit card guarantee may be required to confirm reservations.</li>
                </ul>

                <h2 class="text-left">Check-in and Check-out:</h2>
                <ul>
                    <li>Check-in time is 1:00 Pm, and check-out time is 11:00 PM.</li>
                    <li>Early check-in and late check-out are subject to availability and may incur additional charges.</li>
                </ul>

                <h2 class="text-left">Cancellation Policy:</h2>
                <ul>
                    <li>Cancellation policies vary depending on the rate and room type booked. Guests are advised to check
                        the cancellation policy at the time of booking.</li>
                    <li>Late cancellations or no-shows may result in charges equivalent to one night's stay.</li>
                </ul>

                <h2 class="text-left">Guest Responsibility:</h2>
                <ul>
                    <li>Guests are responsible for any damages caused to the hotel property during their stay.</li>
                    <li>Smoking is strictly prohibited in designated non-smoking areas. A cleaning fee may apply for smoking
                        in non-smoking rooms.</li>
                    <li>Pets are not allowed unless specified in advance and subject to additional charges.</li>
                </ul>

                <h2 class="text-left">Payment Terms:</h2>
                <ul>
                    <li>Payment must be settled upon check-in, unless otherwise specified.</li>
                    <li>We accept cash, credit cards, and other approved methods of payment.</li>
                </ul>

                <h2 class="text-left">Liability:</h2>
                <ul>
                    <li>The hotel shall not be liable for any loss, damage, or injury sustained by guests during their stay,
                        including but not limited to theft, accidents, or natural disasters.</li>
                    <li>Guests are advised to secure their belongings and valuables at all times.</li>
                </ul>

                <h2 class="text-left">Privacy Policy:</h2>
                <ul>
                    <li>We are committed to protecting the privacy of our guests' personal information. Please refer to our
                        Privacy Policy for details on how we collect, use, and safeguard your data.</li>
                </ul>

                <h2 class="text-left">Miscellaneous:</h2>
                <ul>
                    <li>The hotel reserves the right to refuse service to anyone.</li>
                    <li>The management reserves the right to amend these terms and conditions without prior notice.</li>
                </ul>

                <br><br><br>
            </div>
        </div>
    </div>
@endsection
