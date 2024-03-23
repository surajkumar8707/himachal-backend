@extends('layouts.app')

@section('content')
    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class=" text-white text-uppercase">{{ $package->name }}</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{ route('home') }}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Package Details</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Package Details Content Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid mb-4" src="{{ public_asset($package->images) }}" alt="Package Image">
            </div>
            <div class="col-lg-6">
                <h2>{{ $package->name }}</h2>
                <p>{{ $package->description }}</p>
                <p><strong>Price:</strong> ${{ $package->price }}</p>
                <p><strong>Duration:</strong> {{ $package->duration }} days</p>
                <p><strong>Itinerary:</strong></p>
                <ul>
                    @foreach (explode(PHP_EOL, $package->itinerary) as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ul>
                <!-- Add more details as needed -->
            </div>
        </div>
    </div>
    <!-- Package Details Content End -->
@endsection
