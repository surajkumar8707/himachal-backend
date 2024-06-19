@extends('layouts.app')

@section('title', 'Room Types')

@section('content')
    {{-- <section class="career_banner_image">
        <img src="{{ public_asset('assets/images/room-type.webp') }}" class="img-fluid" alt="Room Type">
    </section> --}}

    <div class="container mt-5">
        <h1 class="text-center mb-5">Room Types</h1>
        <div class="row justify-content-center">
            @foreach ($rooms as $room)
                <a href="javascript:;" title="{{ $room['name'] }}">
                    <div class="col-lg-4 col-md-6 my5">
                        <div class="card shadow-sm">
                            <img class="w-100 img-thumbnail" src="{{ public_asset($room['image']) }}" class="card-img-top"
                                alt="{{ $room['name'] }}">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $room['name'] }}</h5>
                                <p class="card-text text-center">Season Rate: ${{ $room['season_rate'] }}</p>
                                <div class="text-center">
                                    <a href="{{ route('booking', ['room' => base64_encode($room['id'])]) }}" class="btn btn-primary">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
