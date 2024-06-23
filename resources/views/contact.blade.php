@extends('layouts.app')

@section('title', 'Contact Us')
@push('styles')
    <style>
        #all_tabs .tab-content>.tab-pane {
            display: block !important;
            visibility: visible !important;
        }

        .iconss-new {
            margin: 40px 65px;
        }

        .iconss-new a {
            padding: 13px 18px;
            margin-bottom: 0;
            background: #943c90;
            color: #fff !important;
            text-transform: capitalize;
            border-radius: 5px;
        }

        .modal select {
            width: 100%;
            padding: 10px;
        }

        .modal-dialog label.form-check-label {
            font-size: 11px;
            position: relative;
            bottom: 25px;
            margin-left: 18px;
        }

        section.contact_sec.contact-us-cs-sc section.media_section .mediasection_tabcontent .tab-content .tab-pane {
            width: 100%;
        }
    </style>
@endpush
@section('content')
    <section class="career_banner_image">
        <img src="{{ public_asset('assets/images/contact-banner.jpg') }}" class="img-responsive_ img-thumbnail w-100"
            alt="{{ getSettings()->app_name }}" width="100%" height="400px !important">
    </section>
    <section class="contact_sec contact-us-cs-sc">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 co-md-12 col-sm-12 col-xs-12">
                    <h1 class="ash1"><span itemprop="name">Contact Us</span></h1>
                    <section class="media_section">
                        <ul class="nav nav-tabs nav-pills" id="interest_tabs"> <!--top level tabs-->
                            <li class="active"><a href="#media_tab4" data-toggle="tab">Hotel Contact</a></li>
                        </ul>
                        <div class="mediasection_tabcontent">
                            <div class="row">
                                <div class="col-lg-12 co-md-12 col-sm-12 col-xs-12">
                                    <div class="tab-content">
                                        <div id="media_tab1" class="tab-pane">

                                            <div class="box_warp1">
                                                {{-- <h3>Management </h3>
                                                <p><strong>Mr. Gaurav Tiwari</strong><br>
                                                    Director Business Development (South)<br> <span style="line-height: 1.6em;"><i class="fa fa-phone"></i> <a href="tel:+91{{ getSettings()->contact }}">+91
                                                            {{ getSettings()->contact }}</a></span><br> <span
                                                        style="line-height: 1.6em;"><i class="fa fa-envelope"></i> <a
                                                            href="mailto:{{ getSettings()->email }}">{{ getSettings()->email }}</a></span>
                                                </p> --}}
                                            </div>
                                        </div>
                                        <div id="media_tab4" class="tab-pane active">
                                            <div class="col-md-3"></div>

                                            <div id="mes">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="box_warp2">
                                                            <h3>Lucknow</h3>
                                                            <p>
                                                                <b><i class="fa fa-map-marker"></i></b>
                                                                {{ getSettings()->address }}
                                                            </p>
                                                            <p>
                                                                <b><i class="fa fa-mobile"></i> </b>
                                                                <a href="tel:+91 {{ getSettings()->contact }}">
                                                                    {{ getSettings()->contact }} </a>
                                                            </p>
                                                            <p>
                                                                <b><i class="fa fa-phone"></i> </b>
                                                                <a href="tel:+91 {{ getSettings()->contact }}">
                                                                    {{ getSettings()->contact }}
                                                                </a>
                                                            </p>
                                                            <p>
                                                                <b><i class="fa fa-envelope"></i> </b>
                                                                <a href="mailto:{{ getSettings()->email }}">
                                                                    {{ getSettings()->email }}
                                                                </a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <form action="{{ route('save.contact') }}" method="POST">
                                                            @csrf
                                                            <div class="form-group mt1">
                                                                {{-- <label for="name">Name</label> --}}
                                                                <input type="text" required autofocus name="name" id="name" class="form-control @error('name') @enderror" placeholder="Name">
                                                                @error('name')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group mt1">
                                                                {{-- <label for="email">Email</label> --}}
                                                                <input type="email" required name="email" id="email" class="form-control @error('email') @enderror" placeholder="email@example.com">
                                                                @error('email')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group mt1">
                                                                {{-- <label for="name">Name</label> --}}
                                                                <input type="text" required name="subject" id="subject" class="form-control @error('subject') @enderror" placeholder="subject">
                                                                @error('subject')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group mt1">
                                                                {{-- <label for="name">Name</label> --}}
                                                                <input type="text" required name="message" id="message" class="form-control @error('message') @enderror" placeholder="message">
                                                                @error('message')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>

                                                            <div class="form-group mt1">
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection
