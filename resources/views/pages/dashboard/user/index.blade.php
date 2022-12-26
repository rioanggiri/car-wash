@extends('layouts.dashboard')

@section('user', 'active')
@section('content')
<h1 class="section-header">
    <div> User</div>
</h1>
<div class="row">
    <div class="col-12">
        <div class="card">
            @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body text-sm">
                    <button class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                    {{ session()->get('message') }}
                </div>
            </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    No.
                                </th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $no=>$item)
                            <tr>
                                <td class="text-center">
                                    {{ $no+1 }}
                                </td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    {{ $item->email }}
                                </td>
                                <td>
                                    {{ $item->roles }}
                                </td>
                                <td>
                                    <div class="row text-center">
                                        <a href="{{ route('dashboard.user.edit', $item->id) }}" class="btn btn-success btn-sm mr-2">Edit</a>
                                        <form action="{{ route('dashboard.user.destroy', $item->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                        </form>
                                    </div>
                                    {{-- <a href="{{ route('dashboard.user.destroy', $item->id) }}" class="btn btn-danger btn-sm">Delete</a> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
