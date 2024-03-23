@extends('super_admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Plots</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('super-admin.plots.create') }}" class="btn btn-primary">Create Plot</a>
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
                    <h2>Plots</h2>
                    {{-- <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Plot Number</th>
                                <th>Size</th>
                                <th>Type</th>
                                <th>Advance Payment</th>
                                <th>Total Amount</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($plots as $plot)
                                <tr>
                                    <td>{{ $plot->id }}</td>
                                    <td>{{ $plot->plot_number }}</td>
                                    <td>{{ $plot->size }}</td>
                                    <td>{{ $plot->type }}</td>
                                    <td>{{ $plot->advance_payment }}</td>
                                    <td>{{ $plot->total_amount }}</td>
                                    <td>
                                        <a href="{{ route('super-admin.plots.show', $plot->id) }}" class="btn btn-info">Show</a>
                                        <a href="{{ route('super-admin.plots.edit', $plot->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('super-admin.plots.destroy', $plot->id) }}" method="POST" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <th class="text-center small bg-light" colspan="7">
                                        No data available in the table
                                    </th>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="text-right plot-pagination-container">
                        {{ $plots->links() }} <!-- Add this line to display pagination links -->
                    </div> --}}

                    <div class="table-responsive">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>ID</th>
                                    <th>Plot Number</th>
                                    <th>Size</th>
                                    <th>Type</th>
                                    <th>Date of Plot</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
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

@push('scripts')
<script>
$(function () {

    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('super-admin.plots.index') }}",
        columns: [
            {data: 'sno', name: 'sno' , orderable: true, searchable: false},
            {data: 'id', name: 'id' , orderable: true, searchable: true},
            {data: 'plot_number', name: 'plot_number' , orderable: true, searchable: true},
            {data: 'size', name: 'size' , orderable: true, searchable: false},
            {data: 'type', name: 'type' , orderable: true, searchable: false},
            {data: 'created_at', name: 'created_at' , orderable: true, searchable: true},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

});
</script>
@endpush
