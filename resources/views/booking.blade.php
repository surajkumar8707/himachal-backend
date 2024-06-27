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
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
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
                        <form id="orderForm" action="{{ route('create.order') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" placeholder="Enter name" name="name" id="name"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Enter email" name="email" id="email"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" placeholder="Enter phone" name="phone" id="phone"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="date" placeholder="Enter date" name="date" id="date"
                                    class="form-control minDate" required>
                            </div>
                            <div class="form-group">
                                <label for="rooms">Number of Rooms</label>
                                <input type="number" placeholder="Enter rooms" name="rooms" id="rooms"
                                    class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="visitors">Number of Visitors</label>
                                <input type="number" placeholder="Enter visitors" name="visitors" id="visitors"
                                    class="form-control" required>
                            </div>
                            <div class="form-group mb-4">
                                <label for="room_type_id">Room Type Categories</label>
                                <select name="room_type_id" id="room_type_id" class="form-control" required>
                                    <option value="">-- Select room type category --</option>
                                    @forelse ($rooms as $room)
                                        <option data-amount="{{ $room->season_rate }}" data-room_name="{{ $room->name }}" @selected($id == $room->id) value="{{ $room->id }}">
                                            {{ $room->name . ' - (' . $room->season_rate . ')' }}</option>
                                    @empty
                                    @endforelse
                                </select>
                                {{-- <input type="number" name="visitors" id="visitors" class="form-control" required> --}}
                            </div>
                            <br>
                            <button id="create-order" type="submit" class="btn btn-primary btn-block">Submit</button>
                            <div id="button-disable-spinner" style="display: none;">
                                <button class="btn btn-primary btn-block" type="button" disabled>
                                    <span role="status">Loading...</span>
                                    <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                </button>
                            </div>
                        </form>

                        <form id="paymentForm" action="{{ route('submit.booking') }}" method="POST">
                            @csrf
                            <input type="hidden" name="razorpay_name" id="razorpay_name">
                            <input type="hidden" name="razorpay_amount" id="razorpay_amount">
                            <input type="hidden" name="razorpay_email" id="razorpay_email">
                            <input type="hidden" name="razorpay_phone" id="razorpay_phone">
                            <input type="hidden" name="razorpay_date" id="razorpay_date">
                            <input type="hidden" name="razorpay_rooms" id="razorpay_rooms">
                            <input type="hidden" name="razorpay_visitors" id="razorpay_visitors">
                            <input type="hidden" name="razorpay_room_name" id="razorpay_room_name">
                            <input type="hidden" name="razorpay_room_id" id="razorpay_room_id">
                            <input type="hidden" name="razorpay_payment_id" id="razorpay_payment_id">
                            <input type="hidden" name="razorpay_order_id" id="razorpay_order_id">
                            <input type="hidden" name="razorpay_signature" id="razorpay_signature">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.getElementById('orderForm').onsubmit = async function(e) {
            e.preventDefault();

            const button = document.getElementById("create-order");
            const button_disable_spinner = document.getElementById("button-disable-spinner");

            // Disable the button
            button.style.display = "none";
            button_disable_spinner.style.display = "block";

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const date = document.getElementById('date').value;
            const rooms = document.getElementById('rooms').value;
            const visitors = document.getElementById('visitors').value;

            // console.log(name,email,phone,date,rooms, visitors);

            const selectedRoom = document.getElementById('room_type_id').selectedOptions[0];
            const amount = selectedRoom.getAttribute('data-amount');
            const room_name = selectedRoom.getAttribute('data-room_name');
            const room_id = selectedRoom.getAttribute('value');

            const response = await fetch('{{ route("create.order") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    name,
                    email,
                    phone,
                    date,
                    rooms,
                    visitors,
                    amount,
                    room_name
                })
            });

            const data = await response.json();

            const options = {
                "key": "{{ env('RAZORPAY_KEY') }}",
                "amount": data.amount,
                "currency": "INR",
                "name": room_name,
                "description": room_name,
                "order_id": data.id,
                "handler": function(response) {
                    console.log(response);
                    // return false;
                    // document.getElementById('pay_amount').value = amount;
                    // document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                    // document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
                    // document.getElementById('razorpay_signature').value = response.razorpay_signature;
                    document.getElementById('razorpay_name').value = name;
                    document.getElementById('razorpay_email').value = email;
                    document.getElementById('razorpay_phone').value = phone;
                    document.getElementById('razorpay_date').value = date;
                    document.getElementById('razorpay_rooms').value = rooms;
                    document.getElementById('razorpay_visitors').value = visitors;
                    document.getElementById('razorpay_amount').value = amount;
                    document.getElementById('razorpay_room_name').value = room_name;
                    document.getElementById('razorpay_room_id').value = room_id;
                    document.getElementById('razorpay_payment_id').value = response.razorpay_payment_id;
                    document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
                    document.getElementById('razorpay_signature').value = response.razorpay_signature;
                    document.getElementById('paymentForm').submit();
                },
                "prefill": {
                    "name": name,
                    "email": email,
                    "contact": phone
                },
                "notes": {
                    "address": "Razorpay Corporate Office"
                },
                "theme": {
                    "color": "#F37254"
                }
            };
            const rzp1 = new Razorpay(options);
            rzp1.open();
        }
    </script>
@endpush
