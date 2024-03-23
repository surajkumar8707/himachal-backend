@extends('super_admin.layouts.app')


@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1>{{ $user->name }}'s Profile</h1>
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
                        <form method="POST" action="{{ route('admin.update.profile') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}">
                            </div>

                            <div class="form-group">
                                <label for="county">County</label>
                                <input type="text" class="form-control" id="county" name="county" value="{{ $user->county }}">
                            </div>

                            <div class="form-group">
                                <label for="state">State</label>
                                <input type="text" class="form-control" id="state" name="state" value="{{ $user->state }}">
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <input type="text" class="form-control" id="city" name="city" value="{{ $user->city }}">
                            </div>

                            <div class="form-group">
                                <label for="zipcode">Zipcode</label>
                                <input type="text" class="form-control" id="zipcode" name="zipcode" value="{{ $user->zipcode }}">
                            </div>

                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="file" class="form-control-file" id="photo" name="photo">

                                @if ($user->photo)
                                    <div class="mb-3">
                                        {{-- <img width="200" src="{{ asset('storage/' . $user->photo) }}" alt="{{ $user->name }}'s Photo"> --}}
                                        <img src="{{ asset($user->photo) }}" alt="Uploaded Image">
                                    </div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
</div>
@endsection
