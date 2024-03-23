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
                        <h2>Plot Details</h2>
                        <ul>
                            <li>ID: {{ $plot->id }}</li>
                            <li>Plot Number: {{ $plot->plot_number }}</li>
                            <li>Size: {{ $plot->size }}</li>
                            <li>Type: {{ $plot->type }}</li>
                            {{-- <li>Advance Payment: {{ $plot->advance_payment }}</li>
                            <li>Total Amount: {{ $plot->total_amount }}</li> --}}
                        </ul>
                        <a href="{{ route('super-admin.plots.index') }}" class="btn btn-secondary">Back to Plots</a>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    @endsection
