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
                    <h4 class="m-0 font-weight-bold text-primary">Bills </h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.bills.list') }}" class="btn btn-primary">Back </i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div>
                <ul>
                    <li>ID: {{ $booking->id }}</li>
                    <li>Customer Name : {{ $booking->cus_name }}</li>
                    <li>Customer Email : {{ $booking->email }}</li>
                    <li>Customer Aadhar : {{ $booking->aadhar }}</li>
                    <li>Customer Pan : {{ $booking->pan }}</li>
                    <li>Customer Contact : {{ $booking->contact1 }}</li>
                    <li>Customer Contact : {{ $booking->contact2 }}</li>
                    <li>Customer Age : {{ $booking->age }}</li>
                    <li>Create Date : {{ date('d M Y', strtotime($booking->created_at)) }}</li>
                </ul>
                <a href="{{ route('admin.bills.list') }}" class="btn btn-primary">Back </i></a>
            </div>
        </div>
    </div>

</div>
@endsection

@push('script')
<script>
</script>
@endpush
