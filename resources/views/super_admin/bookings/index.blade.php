@extends('super_admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Bill</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('super-admin.executive.users.create') }}" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
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
                    <h2>Bills</h2>

                    <div class="table-responsive">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Plot </th>
                                    <th>Admin </th>
                                    <th>Executive</th>
                                    <th>Customer Name</th>
                                    <th>Customer Email</th>
                                    <th>Father</th>
                                    <th>Mother</th>
                                    <th>Husband</th>
                                    <th>Address</th>
                                    <th>Aadhar</th>
                                    <th>Pan</th>
                                    <th>Phone</th>
                                    <th>Alternative Phone</th>
                                    <th>Age</th>
                                    <th>Advance Payment</th>
                                    <th>Total Amount</th>
                                    <th>Bill Generated</th>
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
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
@endsection

@push('scripts')
<script>
$(function () {

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('super-admin.bill.index') }}",
        columns: [
            {data: 'sno', name: 'sno' , orderable: true, searchable: false},
            {data: 'plot', name: 'plot' , orderable: true, searchable: true},
            {data: 'admin', name: 'admin' , orderable: true, searchable: true},
            {data: 'executive', name: 'executive', orderable: false, searchable: false},
            {data: 'cus_name', name: 'cus_name', orderable: true, searchable: true},
            {data: 'email', name: 'email', orderable: true, searchable: true},
            {data: 'cus_father', name: 'cus_father', orderable: true, searchable: true},
            {data: 'cus_mother', name: 'cus_mother', orderable: true, searchable: true},
            {data: 'cus_husband', name: 'cus_husband', orderable: true, searchable: true},
            {data: 'address', name: 'address', orderable: true, searchable: true},
            {data: 'aadhar', name: 'aadhar', orderable: true, searchable: true},
            {data: 'pan', name: 'pan', orderable: true, searchable: true},
            {data: 'contact1', name: 'contact1', orderable: true, searchable: true},
            {data: 'contact2', name: 'contact2', orderable: true, searchable: true},
            {data: 'age', name: 'age', orderable: true, searchable: true},
            {data: 'advance_amount', name: 'advance_amount', orderable: true, searchable: true},
            {data: 'total_amount', name: 'total_amount', orderable: true, searchable: true},
            {data: 'bill_generated', name: 'bill_generated', orderable: false, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

});
</script>
@endpush
