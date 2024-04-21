@extends('super_admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="card-title">User Contacts</h4>
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
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Customer Details</th>
                                        <th>Request Date</th>
                                        <th>Total Room</th>
                                        <th>Total Visitors</th>
                                        <th>Rom Type</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $key => $booking)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <p class="p-0 m-0"><strong>{{ $booking->name }}</strong></p>
                                            <p class="p-0 m-0">{{ $booking->email }}</p>
                                            <p class="p-0 m-0">{{ $booking->phone }}</p>
                                        </td>
                                        <td>{{ date('M d, Y', strtotime($booking->date)) }}</td>
                                        <td>{{ $booking->rooms }}</td>
                                        <td>{{ $booking->visitors }}</td>
                                        <td>{{ $booking->roomType->name.' - ('. $booking->roomType->season_rate .' rps)' }}</td>
                                    </tr>
                                    @endforeach
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

@push('style')
<!-- CSS files for DataTables -->
<link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endpush

@push('script')
<!-- JavaScript files for DataTables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>

<!-- Initialize DataTables -->
<script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
</script>
@endpush
