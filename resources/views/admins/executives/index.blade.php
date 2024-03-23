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
                    <h4 class="m-0 font-weight-bold text-primary">Executive users</h4>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ route('admin.executive-users.create') }}" class="btn btn-primary">Add Executive <i class="fa fa-user"></i></a>
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
@endsection

@push('script')
<script>
$(function () {

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.executive-users.index') }}",
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
            url: '{{ route("admin.executive.change.status") }}', // Change this to the actual route in your Laravel application
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
