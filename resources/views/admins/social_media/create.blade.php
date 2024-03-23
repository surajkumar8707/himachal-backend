@extends('admins.layouts.app')


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4"> --}}
        {{-- <h1 class="h3 mb-0 text-gray-800">Change Password</h1> --}}
        <div class="row px-5">
            <div class="col-6">
                <span class="text-bold text-lg">Social Media Links</span>
            </div>
            {{-- <div class="col-6 text-right">
                @if($socialMediaLinks)
                    <a href="{{ route('admin.social.media.create') }}" class="btn btn-primary">Edit</a>
                @else
                    <a href="{{ route('admin.social.media.create') }}" class="btn btn-success">Add</a>
                @endif
            </div> --}}
        </div>
    {{-- </div> --}}

    <div class="card shadow mb-4">
        <div class="card-body">
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
@endsection
