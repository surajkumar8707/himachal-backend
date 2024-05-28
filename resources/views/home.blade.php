@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <style>
        form.shadow {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175);
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        a.mobile_booking_engine {
            display: none;
        }
    </style>
    <div class="carousel_top">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class= "carousel-inner ">
                @foreach ($home_page_carousel as $carousel)
                    <div class= "item @if($loop->iteration==1) active @endif">
                        <a href="javascript:;">
                            <img onclick="javascript:;" src="{{ public_asset($carousel->image) }}" alt="{{ $carousel->title }}">
                        </a>
                    </div>
                @endforeach
                {{-- <div class= "item active ">
                    <a href="javascript:;">
                        <img onclick="javascript:;"
                            src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/01/6e/30/outdoor-pool.jpg?w=700&h=-1&s=1 size"
                            alt="100-hotel-banner">
                    </a>
                </div>
                <div class= "item">
                    <img src="https://carouselhotel.com/wp-content/uploads/2023/09/29-Carousel-29.jpg" alt="Spring-Banner">
                </div>
                <div class="item">
                    <img src="https://aw-d.tripcdn.com/images/0221e12000b9ze3w96137_R_600_400_R5.webp" alt="Hampi">
                </div>
                <div class= "item">
                    <a href="">
                        <img onclick="javascript:;"
                            src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/01/6e/30/outdoor-pool.jpg?w=700&h=-1&s=1"
                            alt="Open now">
                    </a>
                </div>
                <div class="item">
                    <a href=" ">
                        <img onclick="javascript:;"
                            src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/01/6e/30/outdoor-pool.jpg?w=700&h=-1&s=1"
                            alt="Sun-sand-banner">
                    </a>
                </div>
                <div class= "item">
                    <a href="#">
                        <img onclick="https://www.royalorchidhotels.com/regenta-kabini-springs-resort/overview"
                            src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/01/6e/30/outdoor-pool.jpg?w=700&h=-1&s=1"
                            alt="Kabini">
                    </a>
                </div>
                <div class= "item">
                    <a href="#">
                        <img onclick="location='#'"
                            src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/01/6e/30/outdoor-pool.jpg?w=700&h=-1&s=1"
                            alt="metropole">
                    </a>
                </div>
                <div class= "item">
                    <a href="#">
                        <img onclick="location='#'"
                            src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/01/6e/30/outdoor-pool.jpg?w=700&h=-1&s=1"
                            alt="Driving Holidays">
                    </a>
                </div> --}}
            </div>
            <div class="carousel-arrows"> <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <img src="{{ public_asset('assets/frontend/images/arrow_left.png') }}"
                        alt="{{ getSettings()->app_name }}">
                </a> <a class="right carousel-control" href="#myCarousel" data-slide="next"> <img
                        src="{{ public_asset('assets/frontend/images/arrow_right.png') }}"
                        alt="{{ getSettings()->app_name }}">
                </a> </div>
        </div>
    </div>

    <div class="container-fluid" id="belowSliderContent">
        <form class="shadow m30 form-inline" action="{{ route('submit.booking') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" placeholder="Enter name" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" placeholder="Enter email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" placeholder="Enter phone" name="phone" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" placeholder="Enter date" name="date" id="date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="rooms">Number of Rooms</label>
                <input type="number" placeholder="Enter rooms" name="rooms" id="rooms" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="visitors">Number of Visitors</label>
                <input type="number" placeholder="Enter visitors" name="visitors" id="visitors" class="form-control"
                    required>
            </div>
            <div class="form-group mb-4">
                <label for="room_type_id">Room Type Categories</label>
                <select name="room_type_id" id="room_type_id" class="form-control" required>
                    <option value="">-- Select room type category --</option>
                    @forelse ($rooms as $room)
                        <option value="{{ $room->id }}">
                            {{ $room->name . ' - (' . $room->season_rate . ')' }}</option>
                    @empty
                    @endforelse
                </select>
                {{-- <input type="number" name="visitors" id="visitors" class="form-control" required> --}}
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Book Now</button>
            </div>
        </form>
        <div class="container">
            <br><br>
            <div class="row">
                <h1 class="ash1" style="text-transform: inherit;">Distinctly Warm Indian Hospitality </h1>
                <span class="Business-Hotels" style="font-size:14px;display:block;margin:10px 0px;"> Business
                    Hotels | Holiday Destinations | Wildlife Parks | Wedding Destinations | Religious Sites |
                    Historic Sites </span>
                <p class="text-center"> Stay, dine and celebrate at 100+ hotels across 65+ locations in India &
                    Abroad. Discover hotels that have a soul, a reflection of our distinctly warm, Indian
                    Hospitality. </p>
            </div>
        </div>
    </div>
@endsection
