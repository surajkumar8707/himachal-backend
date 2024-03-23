@extends('admins.layouts.app')


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
