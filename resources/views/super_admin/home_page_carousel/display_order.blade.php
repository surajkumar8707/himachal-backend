@extends('super_admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Home Page Carousel</h1>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h5>Change Display Order of Home Page Carousel</h5>
                            </div>
                            <div class="col-6 text-right">
                                <a class="btn btn-primary" href="{{ route('admin.home-page-carousel.index') }}">List</a>
                                <a class="btn btn-info" href="{{ route('admin.home-page-carousel.create') }}">Create</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id="sortable" class="row">
                            @foreach ($carousels as $carousel)
                                <div data-id="{{ $carousel->id }}" id="item-{{ $carousel->id }}" class="col-md-2 col-sm-4 mb-4 ui-state-default listitemClass">
                                    <div class="card">
                                        <img src="{{ public_asset($carousel->image) }}" class="card-img-top"
                                            alt="{{ $carousel->title }}">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $carousel->title }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <form action="{{ route('admin.home-page-carousel.update.display-order') }}" method="POST">
                            @csrf
                            <input type="hidden" name="item" id="item" value="{{ implode(',', $ids) }}">
                            <button class="btn btn-primary">Save order</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#sortable').sortable({
                axis: 'xy', // Enable vertical sorting only
                cursor: 'move', // Set cursor to move while dragging
                opacity: 0.8, // Set opacity of dragged item
                update: function(event, ui) {
                    var values = [];
                    $('.listitemClass').each(function(index) {
                        values.push($(this).attr("data-id"));
                    });
                    $('#item').val(values);
                    console.log(values);
                }
            });
            $('#sortable').disableSelection();
        });
    </script>
@endpush
