@extends('super_admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!-- <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="card-title">Home Page Carousel</h4>
                                </div>
                            </div>
                        </div> -->
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="card-title">Home Page Carousel</h4>
                            </div>
                            <div class="col-6 text-right">
                                <a class="btn btn-primary" href="{{ route('admin.home-page-carousel.create') }}">Add</a>
                                <a class="btn btn-info" href="{{ route('admin.home-page-carousel.display.order') }}">Display Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Title</th>
                                        <th>Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($carousels as $key => $carousel)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $carousel->title }}</td>
                                            <td>
                                                <img class="w-50"
                                                    src="{{ public_asset($carousel->image) }}" alt="{{ $carousel->title }}">
                                            </td>
                                            <td>
                                                {{-- <label class="switch">
                                                    <input type="checkbox" name="status"
                                                        @if ($carousel->status == 1) checked @endif>
                                                    <span class="slider round"></span>
                                                </label> --}}
                                                <div class="slider-container">
                                                    <input
                                                        data-url="{{ route('admin.home-page-carousel.update.status', $carousel->id) }}"
                                                        id="checkbox-{{ $carousel->id }}" @checked(($carousel->status == 1)) type="checkbox"
                                                        class="checkbox carousel-change-status">
                                                    <label for="checkbox-{{ $carousel->id }}" class="slider"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.home-page-carousel.edit', $carousel) }}"
                                                    class="text-primary"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                                <form action="{{ route('admin.home-page-carousel.destroy', $carousel) }}"
                                                    method="POST"
                                                    onsubmit="if(confirm('Are you sure want to delete ?') == false){ return false; }">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="text-danger btn"><i
                                                            class="fas fa-fw fa-trash-alt"></i></button>
                                                </form>
                                                {{-- <span class="badge badge-primary">{{ date('D m Y', strtotime($carousel->created_at)) }}</span> --}}
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th class="text-center" colspan="10">No enquiry available in the table</th>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="carousel-pagination">
                                {{ $carousels->links() }}
                            </div>
                        </div>
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
            $('input[type="checkbox"].carousel-change-status').change(function() {
                var $input = $(this);
                var url = $input.data('url');
                var status = $input.is(':checked') ? 1 : 0;

                console.clear();
                console.log(url);
                console.log(status);

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                        'status': status,
                    },
                    beforeSend: function(response) {
                        console.log(response);
                    },
                    complete: function(response) {
                        console.log(response);
                    },
                    success: function(response) {
                        console.log(response);
                        var toastr_type = response.status;

                        toastr[toastr_type](response.message, response.status.charAt(0).toUpperCase() + response.status.slice(1));
                        // if(response.status == 'success') {
                        //     toastr.success(response.message, response.status);
                        // }

                        // if(response.status == 'error') {
                        //     toastr.error(response.message, response.status);
                        // }
                    },
                    error: function(response) {
                        console.log(response);
                    },
                });
            });
        });
    </script>
@endpush
