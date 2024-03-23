@extends('admins.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title">Add Tour Packages</h4>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="{{ route('admin.tour.package.list') }}">Package List</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="container">
                <form action="{{ route('admin.tour.package.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="images">Images:</label>
                        <input type="file" class="form-control-file" id="images" name="images">
                    </div>
                    <div class="form-group">
                        <label for="persons">Persons:</label>
                        <input type="number" class="form-control" id="persons" name="persons">
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="number" step="0.01" class="form-control" id="price" name="price">
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration:</label>
                        <input type="text" class="form-control" id="duration" name="duration">
                    </div>
                    <div class="form-group">
                        <label for="itinerary">Itinerary:</label>
                        <textarea class="form-control" id="itinerary" name="itinerary" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="accommodations">Accommodations:</label>
                        <textarea class="form-control" id="accommodations" name="accommodations" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="meals">Meals:</label>
                        <textarea class="form-control" id="meals" name="meals" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="transportation">Transportation:</label>
                        <textarea class="form-control" id="transportation" name="transportation" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="tour_guides">Tour Guides:</label>
                        <textarea class="form-control" id="tour_guides" name="tour_guides" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" id="status" name="status">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
