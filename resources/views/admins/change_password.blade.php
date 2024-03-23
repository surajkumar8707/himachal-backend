@extends('admins.layouts.app')


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Change Password</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.update.password') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="current_password">Enter Current Password</label>
                    <input type="password" placeholder="Enter Current Password" name="current_password" id="current_password" class="form-control @error('current_password') is-invalid @enderror">

                    @error('current_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="new_password">Enter New Password</label>
                    <input type="password" placeholder="Enter New Password" name="new_password" id="new_password" class="form-control @error('new_password') is-invalid @enderror">

                    @error('new_password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="new_password_confirmation">Enter Confirm Password</label>
                    <input type="password" placeholder="Enter Confirm Password" name="new_password_confirmation" id="new_password_confirmation" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary">Update Password</button>
                    <a href="{{ route('admin.change.password') }}" class="btn btn-warning">Cancel</a>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
