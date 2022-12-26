@extends('layouts.dashboard')

@section('content')
<h1 class="section-header">
    <div>Edit User</div>
</h1>
<div class="row">
    <div class="col-12 col-md-12 col-lg-7">
        <div class="card">
            <div class="card-header">
                <h4><a href="{{ route('dashboard.user.index') }}" class="btn btn-icon icon-left btn-primary mt-3"><i class="fas fa-chevron-left"></i> Back</a></h4>
            </div>
            <div class="card-body">
                <form action="{{ route('dashboard.user.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="form-group col-md-12 col-12">
                            <label for="name">Nama</label>
                            <input class="form-control" type="text" name="name" value="{{ old('name', $item->name) }}" id="name">
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
                            <input class="form-control" type="email" name="email" value="{{ old('email', $item->email) }}" id="email">
                        </div>
                        @if ($item instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $item->hasVerifiedEmail())
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
                    <div class="row">
                        <div class="form-group col-md-12 col-12">
                            <label>Roles</label>
                            <select class="form-control" name="roles">
                                <option value="{{ $item->roles }}">{{ $item->roles }}</option>
                                <option disabled>-------</option>
                                <option value="ADMIN">ADMIN</option>
                                <option value="USER">USER</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
