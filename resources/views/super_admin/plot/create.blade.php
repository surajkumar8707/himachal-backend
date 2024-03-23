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
                    <a href="{{ route('super-admin.plots.index') }}" class="btn btn-danger">Back</a>
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
                        <h2>Create Plot</h2>

                        <form action="{{ route('super-admin.plots.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="plot_number">Plot Number</label>
                                <input type="number" class="form-control @error('plot_number') is-invalid @enderror" id="plot_number" name="plot_number">
                                @error('plot_number')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="size">Size</label>
                                <input type="number" class="form-control @error('size') is-invalid @enderror" id="size" name="size">
                                @error('size')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="type">Type</label>
                                <select class="form-control @error('type') is-invalid @enderror" id="type" name="type">
                                    <option value="duplex">Duplex</option>
                                    <option value="plot">Plot</option>
                                    <option value="simplex">Simplex</option>
                                </select>
                                @error('type')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Create Plot</button>
                        </form>

                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    @endsection
