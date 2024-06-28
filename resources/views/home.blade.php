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
                    <div class= "item @if ($loop->iteration == 1) active @endif">
                        <a href="javascript:;">
                            <img onclick="javascript:;" src="{{ public_asset($carousel->image) }}"
                                alt="{{ $carousel->title }}">
                        </a>
                    </div>
                @endforeach
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
        {{-- <form class="shadow m30 form-inline" action="{{ route('submit.booking') }}" method="POST">
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
                <input type="date" placeholder="Enter date" name="date" id="date" class="form-control minDate" required>
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
                <input type="number" name="visitors" id="visitors" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Book Now</button>
            </div>
        </form> --}}

        <form id="orderForm" class="shadow m30" action="{{ route('create.order') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-4 mt1">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" placeholder="Enter name" name="name" id="name" class="form-control"
                            required>
                    </div>
                </div>
                <div class="col-sm-4 mt1">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" placeholder="Enter email" name="email" id="email" class="form-control"
                            required>
                    </div>
                </div>
                <div class="col-sm-4 mt1">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="tel" placeholder="Enter phone" name="phone" id="phone" class="form-control"
                            required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 mt1">
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" placeholder="Enter date" name="date" id="date"
                            class="form-control minDate" required>
                    </div>
                </div>
                <div class="col-sm-4 mt1">
                    <div class="form-group">
                        <label for="rooms">Number of Rooms</label>
                        <input type="number" placeholder="Enter rooms" name="rooms" id="rooms" class="form-control"
                            required>
                    </div>
                </div>
                <div class="col-sm-4 mt1">
                    <div class="form-group">
                        <label for="visitors">Number of Visitors</label>
                        <input type="number" placeholder="Enter visitors" name="visitors" id="visitors"
                            class="form-control" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 mt1">
                    <div class="form-group">
                        <label for="room_type_id">Room Type Categories</label>
                        <select name="room_type_id" id="room_type_id" class="form-control" required>
                            <option value="">-- Select room type category --</option>
                            @forelse ($rooms as $room)
                                <option data-amount="{{ $room->season_rate }}" data-room_name="{{ $room->name }}"
                                    value="{{ $room->id }}">
                                    {{ $room->name . ' - (' . $room->season_rate . ')' }}</option>
                            @empty
                            @endforelse
                        </select>
                        {{-- <input type="number" name="visitors" id="visitors" class="form-control" required> --}}
                    </div>
                </div>
                <div class="col-sm-4 mt30">
                    <button id="create-order" type="submit" class="btn btn-primary">Submit</button>
                    <div id="button-disable-spinner" style="display: none;">
                        <button class="btn btn-primary" type="button" disabled>
                            <span role="status">Loading...</span>
                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
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

@push('scripts')
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
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

            const response = await fetch('{{ route('create.order') }}', {
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
