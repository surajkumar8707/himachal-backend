@extends('admins.layouts.app')


@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="card-title">Tour Packages</h4>
                </div>
                <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="{{ route('admin.tour.package.create') }}">Add +</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Duration</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tour_packages as $key => $package)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $package->name }}</td>
                                <td>{{ $package->price }}</td>
                                <td>{{ $package->duration }}</td>
                                <td>
                                    <a href="{{ route('admin.tour.package.show', $package->id) }}"><i class="fas fa-fw fa-eye"></i></a>
                                    <a href="{{ route('admin.tour.package.edit', $package->id) }}"><i class="fas fa-fw fa-pencil-alt"></i></a>
                                    <a href="{{ route('admin.tour.package.delete', $package->id) }}"><i class="fas fa-fw fa-trash-alt"></i></a>
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
@endsection
