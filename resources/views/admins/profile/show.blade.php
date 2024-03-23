@extends('admins.layouts.app')


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Change Password</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <h1>{{ $user->name }}'s Profile</h1>



            <div class="row">
                <div class="col-md-6">
                    <!-- Display user information here -->
                    <p><strong>Email:</strong> {{ $user->email }}</p>
                    <p><strong>Phone:</strong> {{ $user->phone }}</p>
                    <p><strong>Address:</strong> {{ $user->address }}</p>
                    <p><strong>County:</strong> {{ $user->county }}</p>
                    <p><strong>State:</strong> {{ $user->state }}</p>
                    <p><strong>City:</strong> {{ $user->city }}</p>
                    <p><strong>Zipcode:</strong> {{ $user->zipcode }}</p>

                    <a href="{{ route('admin.edit.profile') }}" class="btn btn-primary">Edit Profile</a>
                </div>
                <div class="col-md-6">
                    @if ($user->photo)
                        <div class="mb-3">
                            <img src="{{ asset($user->photo) }}" alt="{{ $user->name }}'s Photo">
                            {{-- <img src="{{ asset('storage/' . $user->photo) }}" alt="{{ $user->name }}'s Photo" class="img-fluid"> --}}
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
