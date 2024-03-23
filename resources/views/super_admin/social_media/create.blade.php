@extends('super_admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h4 class="card-title">Social Media Links</h4>
                </div>
                <div class="col-sm-6">
                    @if($socialMediaLinks)
                        <a href="{{ route('admin.social.media.create') }}" class="btn btn-primary">Edit</a>
                    @else
                        <a href="{{ route('admin.social.media.create') }}" class="btn btn-success">Add</a>
                    @endif
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="container-fluid">

                <div class="card">
                    {{-- <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="card-title">Social Media Links</h4>
                            </div>
                            <div class="col-sm-6">
                                @if($socialMediaLinks)
                                    <a href="{{ route('admin.social.media.create') }}" class="btn btn-primary">Edit</a>
                                @else
                                    <a href="{{ route('admin.social.media.create') }}" class="btn btn-success">Add</a>
                                @endif
                            </div>
                        </div>
                    </div> --}}
                    <div class="card-body">
                        {{-- <div class="container">

                        </div> --}}
                        <form action="{{ route('admin.social.media.storeOrUpdate') }}" method="post">
                            @csrf

                            <div class="form-group">
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="youTube">YouTube:</label>
                                <input class="form-control" type="url" placeholder="Enter youTube link" name="youTube" value="{{ old('youTube', $socialMediaLinks->youTube ?? '') }}" />
                                @error('youTube')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="instagram">Instagram:</label>
                                <input class="form-control" type="url" placeholder="Enter instagram link" name="instagram" value="{{ old('instagram', $socialMediaLinks->instagram ?? '') }}" />
                                @error('instagram')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="facebook">Facebook:</label>
                                <input class="form-control" type="url" placeholder="Enter facebook link" name="facebook" value="{{ old('facebook', $socialMediaLinks->facebook ?? '') }}" />
                                @error('facebook')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="linkedin">LinkedIn:</label>
                                <input class="form-control" type="url" placeholder="Enter linkedin link" name="linkedin" value="{{ old('linkedin', $socialMediaLinks->linkedin ?? '') }}" />
                                @error('linkedin')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button class="btn btn-primary" type="submit">Save</button>
                            <a href="{{ route('admin.social.media.show') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
</div>
@endsection
