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
                    <div class="col-6 text-right"><a class="btn btn-secondary"
                            href="{{ route('admin.room.type.list') }}">Back</a></div>
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
                        <form action="{{ route('admin.room.type.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" class="form-control"
                                    value="{{ old('name') }}" placeholder="Enter Room Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="season_rate">Season Rate</label>
                                <input type="number" min="0" id="season_rate" name="season_rate"
                                    class="form-control" value="{{ old('season_rate') }}"
                                    placeholder="Enter Room Season Rate">
                                @error('season_rate')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="image">Upload Image</label>
                                <input type="file" accept="image/png,image/jpeg,image/jpg," id="image" name="image"
                                    class="form-control" placeholder="Enter Room image" onchange="previewImage(event)">
                                <img id="imagePreview" src="#" alt="Preview"
                                    style="display: none; max-width: 200px; max-height: 200px;" class="my-2">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-1">
                                    <label for="status">Status </label>
                                </div>

                                <div class="col-md-3">
                                    <div class="slider-container">
                                        <input type="checkbox" checked name="status" value="1" id="checkbox"
                                            class="checkbox">
                                        <label for="checkbox" class="slider"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="save-buttons mt-3">
                                <button class="btn btn-success mr-2">Save</button>
                                <a href="{{ route('admin.room.type.list') }}" class="btn btn-danger">Cancel</a>
                            </div>

                        </form>
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
