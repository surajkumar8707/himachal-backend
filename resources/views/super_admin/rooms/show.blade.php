@extends('super_admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Room Type Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.room.type.list') }}">Home</a></li>
                            <li class="breadcrumb-item active">Room Type Details</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h5 class="mb-0"><strong>Name:</strong></h5>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0">{{ $room->name }}</p>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h5 class="mb-0"><strong>Season Rate:</strong></h5>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0">{{ $room->season_rate }}</p>
                                </div>
                            </div>



                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h5 class="mb-0"><strong>Status:</strong></h5>
                                </div>
                                <div class="col-sm-9">
                                    <p class="mb-0">{{ $room->status ? 'Active' : 'Inactive' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h5 class="mb-0"><strong>Image:</strong></h5>
                                </div>
                                <div class="col-sm-9">
                                    @if ($room->image)
                                        <img src="{{ public_asset($room->image) }}" alt="Room Image"
                                            class="w-25 img-fluid img-thumbnail rounded">
                                    @else
                                        <p class="mb-0">No Image Available</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <a class="btn btn-success" href="{{ route('admin.room.type.create') }}">Create <i class="fas fa-fw fa-plus"></i></a>
                        <a class="btn btn-primary" href="{{ route('admin.room.type.edit', $room->id) }}">Edit <i class="fas fa-fw fa-pencil-alt"></i></a>
                        <a class="btn btn-danger" href="{{ route('admin.room.type.delete', $room->id) }}">Delete <i class="fas fa-fw fa-trash-alt"></i></a>
                    </div>

                </div>


                <!-- /.card-body -->
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

        function previewImage(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function() {
                var img = document.getElementById('imagePreview');
                img.src = reader.result;
                img.style.display = 'block';
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
@endpush
