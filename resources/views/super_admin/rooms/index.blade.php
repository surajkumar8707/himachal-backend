@extends('super_admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <h4 class="card-title">Room Type</h4>
                    </div>
                    <div class="col-6 text-right"><a class="btn btn-primary"
                            href="{{ route('admin.room.type.create') }}">Add</a></div>
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
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Duration</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($rooms as $key => $room)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $room->name }}</td>
                                            <td>{{ $room->season_rate }}</td>
                                            <td>
                                                <a href="{{ public_asset($room->image) }}">
                                                    <img src="{{ public_asset($room->image) }}" alt="{{ $room->name }}"
                                                        width="50">
                                                </a>
                                            </td>
                                            <td>
                                                <div class="slider-container">
                                                    <input data-url="{{ route('admin.room.type.update.status', $room->id) }}" id="checkbox-{{ $room->id }}"
                                                        @if ($room->status == 1) checked @endif type="checkbox"
                                                        class="checkbox">
                                                    <label for="checkbox-{{ $room->id }}" class="slider"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.room.type.show', $room->id) }}"><i
                                                        class="fas fa-fw fa-eye"></i></a>
                                                <a href="{{ route('admin.room.type.edit', $room->id) }}"><i
                                                        class="fas fa-fw fa-pencil-alt"></i></a>
                                                <a href="{{ route('admin.room.type.delete', $room->id) }}"><i
                                                        class="fas fa-fw fa-trash-alt"></i></a>
                                            </td>
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
                var roomTypeId = $(this).attr('data-room-type-id');
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
