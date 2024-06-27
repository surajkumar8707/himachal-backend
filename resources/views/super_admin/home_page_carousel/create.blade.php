@extends('super_admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title">Create Home Page Carousel</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a class="btn btn-primary" href="{{ route('admin.home-page-carousel.index') }}">List</a>
                                <a class="btn btn-info" href="{{ route('admin.home-page-carousel.display.order') }}">Display Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.home-page-carousel.store') }}" method="POST" id="carouselForm"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-2">
                                <label for="title">Enter Title</label>
                                <input type="text" name="title" id="title"
                                    class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}"
                                    placeholder="title">
                                @error('image')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mb-2">
                                <label for="title">Select Image</label>
                                <input type="file" name="image" id="image" accept="image/*"
                                    class="form-control selectImgToRender @error('image') is-invalid @enderror"
                                    data-max-size="2097152">
                                @error('image')
                                    <span class="small text-danger">{{ $message }}</span>
                                @enderror
                                <div style="display: none;">
                                    <img class="w-25 imgRenderContainer" alt="">
                                </div>
                            </div>

                            <div class="form-group">
                                Status <br>
                                <div class="slider-container">
                                    <input type="checkbox" class="checkbox" checked name="status" id="status">
                                    <label for="status" class="slider"></label>
                                </div>
                                @error('status')
                                    <span class="small error text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mt-3 mb-0">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('admin.home-page-carousel.index') }}"
                                    class="btn btn-outline-secondary">Cancel</a>
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

@push('script')
    <script>
        $(document).ready(function() {
            $('#carouselForm').submit(function(event) {
                var fileSize = $('#image')[0].files[0].size; // File size in bytes
                var maxSize = $('#image').data(
                'max-size'); // Maximum size allowed from data-max-size attribute

                if (fileSize > maxSize) {
                    toastr.error('File size exceeds 2MB limit.', 'Error!')
                    event.preventDefault(); // Prevent form submission
                }
            });
        });
    </script>
@endpush
