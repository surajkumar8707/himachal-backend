@extends('super_admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title">Payments</h4>
                    </div>
                    <div class="col-6 text-right"></div>
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
                                        <th>Booking Detail</th>
                                        <th>Amount</th>
                                        <th>Pyamend ID</th>
                                        <th>Order ID</th>
                                        <th>Currency</th>
                                        <th>Room Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($payments as $key => $payment)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                Name :<strong> {{ $payment->booking->name }}</strong><br>
                                                Email :<strong> {{ $payment->booking->email }}</strong><br>
                                                Phone :<strong> {{ $payment->booking->phone }}</strong><br>
                                                Date :<strong> {{ $payment->booking->date }}</strong><br>
                                                Rooms :<strong> {{ $payment->booking->rooms }}</strong><br>
                                                Visitors :<strong> {{ $payment->booking->visitors }}</strong><br>
                                            </td>
                                            <td>{{ $payment->amount }}</td>
                                            <td>{{ $payment->payment_id }}</td>
                                            <td>{{ $payment->order_id }}</td>
                                            <td>{{ $payment->currency }}</td>

                                            <td>{{ $payment->booking->roomType->name }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th class="text-center" colspan="10">No packages available in the table</th>
                                        </tr>
                                    @endforelse
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

            // Your JavaScript code

            $('.checkbox').change(function() {
                var paymentsTypeId = $(this).attr('data-payments-type-id');
                var url = $(this).data('url');
                var status = $(this).prop('checked') ? 1 : 0;

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        status: status
                    },
                    success: function(response) {
                        // Handle success, if needed
                    },
                    error: function(xhr, status, error) {
                        // Handle error, if needed
                    }
                });
            });

        });
    </script>
@endpush
