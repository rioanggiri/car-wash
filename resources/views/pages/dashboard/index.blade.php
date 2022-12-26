@extends('layouts.dashboard')

@section('dashboard', 'active')
@section('content')

<h1 class="section-header">
    <div>Dashboard</div>
</h1>
{{-- <div class="row">
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
            <div class="card-icon bg-primary">
                <i class="ion ion-person"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Admin</h4>
                </div>
                <div class="card-body">
                    10
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
            <div class="card-icon bg-danger">
                <i class="ion ion-ios-paper-outline"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>News</h4>
                </div>
                <div class="card-body">
                    42
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
            <div class="card-icon bg-warning">
                <i class="ion ion-paper-airplane"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Reports</h4>
                </div>
                <div class="card-body">
                    1,201
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
            <div class="card-icon bg-success">
                <i class="ion ion-record"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Online Users</h4>
                </div>
                <div class="card-body">
                    47
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="row">
    <div class="col-12 col-sm-6 col-lg-9">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Welcome, {{ Auth()->user()->name }}!</h4>
                <h4 class="mt-2">Don't share your username or email and password to other people.</h4>
            </div>
        </div>
    </div>
</div>
@endsection
