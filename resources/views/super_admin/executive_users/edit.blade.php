@extends('super_admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Executive</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('super-admin.executive.users') }}" class="btn btn-danger">Back</a>
                    <a href="{{ route('super-admin.executive.users.create') }}" class="btn btn-primary">Add +</a>
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
                        <h2>Edit Executive</h2>
                        <form method="POST" action="{{ route('super-admin.executive.update', $user->id) }}">
                            @csrf
                            <input type="hidden" value="{{ $user->id }}" name="id">
                            {{-- @method('PUT') --}}

                            <div class="form-group">
                                <label for="admin">Select Admin</label>
                                <select name="admin" id="admin" class="form-control" required>
                                    <option value="" disabled>Select Admin</option>
                                    @forelse ($allAdmin as $admin)
                                        <option @if($user->admin == $admin->id) selected @endif value="{{ $admin->id }}">{{ $admin->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Add other fields as needed --}}

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    @endsection
