@extends('layouts.app')

@section('title', 'Booking')

@push('styles')
    <style>
        /* public/css/booking.css */

        .booking-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
        }

        .booking-card input[type="text"],
        .booking-card input[type="email"],
        .booking-card input[type="tel"],
        .booking-card input[type="date"],
        .booking-card input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-sizing: border-box;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .booking-card input[type="text"]:focus,
        .booking-card input[type="email"]:focus,
        .booking-card input[type="tel"]:focus,
        .booking-card input[type="date"]:focus,
        .booking-card input[type="number"]:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .booking-card button[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .booking-card button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
@endpush

@section('content')
    <section class="career_banner_image">
        <img src="{{ public_asset('assets/images/booking.jpeg') }}" class="img-responsive" alt="Booking">
    </section>

    <h1 class="text-center mt-5">Booking</h1>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-12 mx-auto">
                <div class="card booking-card">
                    <div class="card-body">
                        <form action="{{ route('submit.booking') }}" method="POST">
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
                                <input type="number" placeholder="Enter visitors" name="visitors" id="visitors" class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="room_type_id">Room Type Categories</label>
                                <select name="room_type_id" id="room_type_id" class="form-control" required>
                                    <option value="">-- Select room type category --</option>
                                    @forelse ($rooms as $room)
                                        <option @selected($id == $room->id) value="{{ $room->id }}">{{ $room->name.' - ('.$room->season_rate.')' }}</option>
                                    @empty
                                    @endforelse
                                </select>
                                {{-- <input type="number" name="visitors" id="visitors" class="form-control" required> --}}
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
