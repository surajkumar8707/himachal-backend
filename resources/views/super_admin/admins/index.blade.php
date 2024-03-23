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
                    <a href="{{ route('super-admin.admins.create') }}" class="btn btn-primary">Add <i class="fa fa-plus"></i></a>
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
                    <h2>Plots</h2>

                    <div class="table-responsive">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Is Active</th>
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
        ajax: "{{ route('super-admin.admins.index') }}",
        columns: [
            {data: 'sno', name: 'sno' , orderable: true, searchable: false},
            {data: 'name', name: 'name' , orderable: true, searchable: true},
            {data: 'email', name: 'email' , orderable: true, searchable: true},
            {data: 'is_active', name: 'is_active' , orderable: false, searchable: false},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

});

$(document).ready(function () {
    // Use event delegation for dynamically generated elements
    $(document).on('change', '.active-inactive-user', function () {
        var checkbox = $(this);
        var userId = checkbox.data('user_id');
        var status = checkbox.val();

        // Send an AJAX request to update the status
        $.ajax({
            type: 'GET',
            url: '{{ route("super-admin.executive.change.status") }}', // Change this to the actual route in your Laravel application
            data: {
                user_id: userId,
                status: status,
            },
            success: function (response) {
                console.log(response);
                if(response.status == true){
                    toastr.success('Success !',response.message);
                }
                else{
                    toastr.error('Error !',response.message);
                }
                // You can handle the response as needed
            },
            error: function (error) {
                console.error('Error updating user status:', error);
            }
        });
    });
});
</script>
@endpush
