@extends('layouts.app')

@section('content')
    {{-- public\assets\images\about-us.jpg --}}

    <section class="career_banner_image">
        <img src="{{ public_asset('assets/images/privacy-policy.avif') }}" class="img-responsive"
            alt="Royal Orchid Hotels About us">
    </section>

    <h1>Terms &amp; Conditions</h1>
    <div class="container-fluid about_new" style="">
        <div class="container m-5">
            <br><br><br>
            <div class="container">
                <h2>Information We Collect</h2>
                <p>We may collect personal information from you when you make a reservation, sign up for our newsletter, or
                    interact with us online or in person. This information may include your name, contact details, payment
                    information, and preferences.</p>

                <h2>How We Use Your Information</h2>
                <p>We use your personal information to process reservations, improve our services, and communicate with you
                    about promotions, events, and special offers. We may also use your information for marketing purposes
                    with your consent.</p>

                <h2>Data Security</h2>
                <p>We take appropriate measures to protect your personal information from unauthorized access, disclosure,
                    alteration, or destruction. Our website uses secure encryption technology to safeguard your data during
                    online transactions.</p>

                <h2>Third-Party Disclosure</h2>
                <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your
                    consent, except as required by law or to fulfill your requests.</p>

                <h2>Cookies</h2>
                <p>Our website may use cookies to enhance your browsing experience and track usage patterns. You can adjust
                    your browser settings to refuse cookies or alert you when they are being used.</p>

                <h2>Your Rights</h2>
                <p>You have the right to access, correct, or delete your personal information held by us. If you have any
                    questions or concerns about our Privacy Policy or how we handle your data, please contact us.</p>

                <h2>Changes to This Policy</h2>
                <p>We reserve the right to update or amend this Privacy Policy at any time. Any changes will be posted on
                    our website, and your continued use of our services constitutes acceptance of the revised policy.</p>

                <p>By using our website or services, you consent to the collection and use of your personal information as
                    outlined in this Privacy Policy.</p>

                <br><br>
            </div>
        </div>
    </div>
@endsection
