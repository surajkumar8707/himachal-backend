@extends('super_admin.layouts.app')


@section('content')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header">
            <h4 class="card-title">Setting</h4>
        </div>
        <div class="card-body">
            <form class="mb-5" action="{{ route('admin.app.setting.update') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="app_name">App Name:</label>
                            <input type="text" name="app_name" class="form-control" placeholder="Enter App Name" value="{{ old('app_name', $settings?->app_name ?? '') }}" />
                            @error('app_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email', $settings?->email ?? '') }}" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="whatsapp">WhatsApp:</label>
                            <input type="text" name="whatsapp" class="form-control" placeholder="Enter WhatsApp Number" value="{{ old('whatsapp', $settings?->whatsapp ?? '') }}" />
                            @error('whatsapp')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="contact">Contact:</label>
                            <input type="text" name="contact" class="form-control" placeholder="Enter Contact Number" value="{{ old('contact', $settings?->contact ?? '') }}" />
                            @error('contact')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="header_image">Header Image URL:</label>
                            <input type="file" name="header_image" class="form-control" placeholder="Enter Header Image URL" />
                            @error('header_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <div class="my-2">
                                @if(!empty($settings?->header_image))
                                    <div class="">
                                        <img width="200" height="100" src="{{ asset('public/'.$settings->header_image) }}" alt="">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>

</div>
@endsection

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
                    <div class="card-body">
                        <div class="container">
                            {{-- <h2>Social Media Links</h2> --}}

                            <ul class="list-group">
                                @if($socialMediaLinks)
                                    <li class="list-group-item"><strong class="ml-5">YouTube:</strong> <a href="{{ $socialMediaLinks?->youTube }}">{{ $socialMediaLinks?->youTube }}</a></li>
                                    <li class="list-group-item"><strong class="ml-5">Instagram:</strong> <a href="{{ $socialMediaLinks?->instagram }}">{{ $socialMediaLinks?->instagram }}</a></li>
                                    <li class="list-group-item"><strong class="ml-5">Facebook:</strong> <a href="{{ $socialMediaLinks?->facebook }}">{{ $socialMediaLinks?->facebook }}</a></li>
                                    <li class="list-group-item"><strong class="ml-5">LinkedIn:</strong> <a href="{{ $socialMediaLinks?->linkedin }}">{{ $socialMediaLinks?->linkedin }}</a></li>
                                @else
                                <li class="list-group-item"><strong>YouTube:</strong> {{ $socialMediaLinks?->youTube }}</li>
                                <li class="list-group-item"><strong>Instagram:</strong> {{ $socialMediaLinks?->instagram }}</li>
                                <li class="list-group-item"><strong>Facebook:</strong> {{ $socialMediaLinks?->facebook }}</li>
                                <li class="list-group-item"><strong>LinkedIn:</strong> {{ $socialMediaLinks?->linkedin }}</li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
</div>
@endsection
