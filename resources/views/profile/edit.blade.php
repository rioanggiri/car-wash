@extends('layouts.dashboard')

@section('content')
<h1 class="section-header">
    <div>Profile</div>
</h1>
<h2 class="section-title mt-0">Hi, {{ Auth()->user()->name }}!</h2>
<p class="section-lead">
    Change information about yourself on this page.
</p>
<div class="row">
    <div class="col-12 col-md-12 col-lg-7">
        <div class="card">
            <div class="card-header">
                <h4>Edit Profile</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('dashboard.profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="user-item mb-2">
                        @if (Auth::user()->avatar)
                        <img alt="image" src="{{ asset('storage/' . Auth::user()->avatar) }}" width="150px" height="100px" class="user-photo" alt="" style="border-radius: 50%">
                        @else
                        <img alt="image" src="https://ui-avatars.com/api/?name={{ Auth::user()->roles == "ADMIN" ? 'Admin' : 'User' }}" class="img-fluid" width="200">
                        @endif
                        <div class="user-details">
                            <div class="user-name">{{ Auth()->user()->name }}</div>
                            <div class="text-job text-muted">
                                @if (Auth()->user()->roles == 'ADMIN')
                                Admin
                                @else
                                Member
                                @endif</div>
                            <div class="user-cta">
                                <input class="btn btn-danger" name="avatar" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 col-12">
                            <label for="name">Nama</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name', Auth()->user()->name) }}" id="name">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 col-12">
                            <label for="email">Email</label>
                            <input class="form-control" type="email" name="email" value="{{ old('email', Auth()->user()->email) }}" id="email">
                        </div>
                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                            @endif
                        </div>
                        @endif
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Update</button>
                    </div>
                    @if (session('status') === 'profile-updated')
                    Saved.
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-md-12 col-lg-7">
        <div class="card">
            <div class="card-header">
                <h4>Edit Password</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('dashboard.password.update') }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="form-group col-md-12 col-12">
                            <label for="current_password">Current Password</label>
                            <input class="form-control" type="password" name="current_password" id="current_password" autocomplete="current-password">
                            @error('current_password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 col-12">
                            <label for="password">New Password</label>
                            <input class="form-control" type="password" name="password" id="password" autocomplete="new-password">
                            @error('password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12 col-12">
                            <label for="password_confirmation">Confirm Password</label>
                            <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" autocomplete="new-password">
                            @error('password_confirmation')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Update</button>
                    </div>
                    @if (session('status') === 'profile-updated')
                    Saved.
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
