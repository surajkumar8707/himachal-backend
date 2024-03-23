@extends('super_admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="card-title">Change Password</h4>
                </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <div class="card">
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
            <!-- /.card -->
        </section>
        <!-- /.content -->
</div>
@endsection
