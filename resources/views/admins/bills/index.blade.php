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
                    <a href="{{ route('admin.bills.create') }}" class="btn btn-primary">Add Bills <i class="fa fa-user"></i></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="text-right">

            </div>

            <div class="table-responsive">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Customer name</th>
                            <th>Customer Email</th>
                            <th>Customer Aadhar</th>
                            <th>Customer Pan</th>
                            <th>Customer Contact 1</th>
                            <th>Customer Contact 2</th>
                            <th>Customer Age</th>
                            <th>Created Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
@endsection

@push('script')
<script>
$(function () {

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.bills.list') }}",
        columns: [
            {data: 'sno', name: 'sno' , orderable: true, searchable: false},
            {data: 'cus_name', name: 'cus_name' , orderable: true, searchable: true},
            {data: 'email', name: 'email' , orderable: true, searchable: true},
            {data: 'aadhar', name: 'aadhar' , orderable: true, searchable: true},
            {data: 'pan', name: 'pan' , orderable: true, searchable: true},
            {data: 'contact1', name: 'contact1' , orderable: true, searchable: true},
            {data: 'contact2', name: 'contact2' , orderable: true, searchable: true},
            {data: 'age', name: 'age' , orderable: true, searchable: true},
            {data: 'created_at', name: 'created_at' , orderable: true, searchable: true},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

});
</script>
@endpush
