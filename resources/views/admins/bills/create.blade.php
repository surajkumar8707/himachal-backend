@extends('admins.layouts.app')
@section('title', 'Executive user')

@section('content')
{{-- <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Executive users</h1>
    </div>

</div> --}}

<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Executive users</h1> --}}
    <!-- Content Row -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-8">
                    <h4 class="m-0 font-weight-bold text-primary">Create Bill</h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.bills.list') }}" class="btn btn-primary">Back <i class="fa fa-user"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="text-right">

            </div>

            <form action="{{ route('admin.bills.store') }}" method="POST">
                @csrf
                <!-- Executive User -->
                <div class="form-group">
                    <label for="user_id">Select Executive</label>
                    {{-- <input type="text" class="form-control" id="cus_name" name="cus_name" value="{{ old('cus_name') }}" placeholder="Enter customer name"> --}}
                    <select name="user_id" id="user_id" class="form-control">
                        <option value="" selected disabled> Select Executive user </option>
                        @forelse ($users as $user)
                            <option value="{{ $user->id }}"> {{ $user->name }} </option>
                        @empty
                        @endforelse
                    </select>
                    @error('user_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Customer Name -->
                <div class="form-group">
                    <label for="cus_name">Customer Name</label>
                    <input type="text" class="form-control" id="cus_name" name="cus_name" value="{{ old('cus_name') }}" placeholder="Enter customer name">
                    @error('cus_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Father Name -->
                <div class="form-group">
                    <label for="cus_father">Father Name</label>
                    <input type="text" class="form-control" id="cus_father" name="cus_father" value="{{ old('cus_father') }}" placeholder="Enter father's name">
                    @error('cus_father')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Mother Name -->
                <div class="form-group">
                    <label for="cus_mother">Mother Name</label>
                    <input type="text" class="form-control" id="cus_mother" name="cus_mother" value="{{ old('cus_mother') }}" placeholder="Enter mother's name">
                    @error('cus_mother')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Husband Name -->
                <div class="form-group">
                    <label for="cus_husband">Husband Name</label>
                    <input type="text" class="form-control" id="cus_husband" name="cus_husband" value="{{ old('cus_husband') }}" placeholder="Enter husband's name">
                    @error('cus_husband')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Address -->
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}" placeholder="Enter address">
                    @error('address')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Aadhar -->
                <div class="form-group">
                    <label for="aadhar">Aadhar</label>
                    <input type="number" class="form-control" id="aadhar" name="aadhar" value="{{ old('aadhar') }}" placeholder="Enter Aadhar number">
                    @error('aadhar')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- PAN -->
                <div class="form-group">
                    <label for="pan">PAN</label>
                    <input type="text" class="form-control" id="pan" name="pan" value="{{ old('pan') }}" placeholder="Enter PAN number">
                    @error('pan')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Contact 1 -->
                <div class="form-group">
                    <label for="contact1">Contact 1</label>
                    <input type="text" class="form-control" id="contact1" name="contact1" value="{{ old('contact1') }}" placeholder="Enter contact number 1">
                    @error('contact1')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Contact 2 -->
                <div class="form-group">
                    <label for="contact2">Contact 2</label>
                    <input type="text" class="form-control" id="contact2" name="contact2" value="{{ old('contact2') }}" placeholder="Enter contact number 2">
                    @error('contact2')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter email">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Age -->
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" value="{{ old('age') }}" placeholder="Enter age">
                    @error('age')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Plot Number -->
                <div class="form-group">
                    <label for="plot_number">Plot Number</label>
                    <select class="form-control" id="plot_number" name="plot_id" placeholder="Select plot number">
                        <option value="" selected disabled>Select Plot</option>
                        @foreach($plots as $plot)
                            <option value="{{ $plot->id }}" {{ old('plot_id') == $plot->id ? 'selected' : '' }}>
                                {{ $plot->plot_number }}
                            </option>
                        @endforeach
                    </select>
                    @error('plot_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Advance Amount -->
                <div class="form-group">
                    <label for="advance_amount">Advance Amount</label>
                    <input type="number" class="form-control" id="advance_amount" name="advance_amount" value="{{ old('advance_amount') }}" placeholder="Enter advance amount">
                    @error('advance_amount')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Total Amount -->
                <div class="form-group">
                    <label for="total_amount">Total Amount</label>
                    <input type="number" class="form-control" id="total_amount" name="total_amount" value="{{ old('total_amount') }}" placeholder="Enter total amount">
                    @error('total_amount')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create Booking</button>
            </form>

        </div>
    </div>

</div>
@endsection

@push('script')

@endpush
