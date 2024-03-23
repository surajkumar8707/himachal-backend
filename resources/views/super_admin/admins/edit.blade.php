@extends('super_admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Plots</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('super-admin.admins.index') }}" class="btn btn-danger">Back</a>
                    <a href="{{ route('super-admin.admins.create') }}" class="btn btn-primary">Add +</a>
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
                        <h2>Edit Plot</h2>
                        {{-- <form action="{{ route('super-admin.plots.update', $plot->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="plot_number">Plot Number</label>
                                <input type="text" class="form-control" id="plot_number" name="plot_number" value="{{ $plot->plot_number }}" required>
                            </div>
                            <div class="form-group">
                                <label for="size">Size</label>
                                <input type="number" class="form-control" id="size" name="size" value="{{ $plot->size }}" required>
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select class="form-control" id="type" name="type" required>
                                    <option value="duplex" {{ $plot->type == 'duplex' ? 'selected' : '' }}>Duplex</option>
                                    <option value="plot" {{ $plot->type == 'plot' ? 'selected' : '' }}>Plot</option>
                                    <option value="simplex" {{ $plot->type == 'simplex' ? 'selected' : '' }}>Simplex</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="advance_payment">Advance Payment</label>
                                <input type="number" class="form-control" id="advance_payment" name="advance_payment" value="{{ $plot->advance_payment }}" required>
                            </div>
                            <div class="form-group">
                                <label for="total_amount">Total Amount</label>
                                <input type="number" class="form-control" id="total_amount" name="total_amount" value="{{ $plot->total_amount }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Plot</button>
                            <a href="{{ route('super-admin.plots.index') }}" class="btn btn-warning">Back to Plots</a>
                        </form> --}}
                        {{-- @dd($user) --}}
                        <form method="POST" action="{{ route('super-admin.admins.update', $user->id) }}">
                            @csrf
                            @method('PUT')
                
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
