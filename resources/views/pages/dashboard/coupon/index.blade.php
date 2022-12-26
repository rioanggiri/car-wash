@extends('layouts.dashboard')

@section('coupon', 'active')
@section('content')
<h1 class="section-header">
    <div> Coupons</div>
</h1>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <table border="0">
                    <tr>
                        <td>
                            <a href="{{ route('dashboard.coupon.create') }}" class="btn btn-icon icon-left btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
                        </td>
                        <td style="width: 50px">
                        </td>
                        <form action="{{ route('dashboard.coupon.rekapData') }}" method="post" target="_blank">
                            @csrf
                            <td>
                                <label for="tanggal_awal">Tanggal Awal : </label>
                            </td>
                            <td>
                                <input id="tanggal_awal" type="date" value="{{ old('tanggal_awal') }}" class="form-control" name="tanggal_awal">
                            </td>
                            <td style="width: 20px">
                            </td>
                            <td>
                                <label for="tanggal_akhir">Tanggal Akhir : </label>
                            </td>
                            <td>
                                <input id="tanggal_akhir" type="date" value="{{ old('tanggal_akhir') }}" class="form-control" name="tanggal_akhir">
                            </td>
                            <td style="width: 20px">
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    Rekap Data
                                </button>
                            </td>
                        </form>
                    </tr>
                </table>
            </div>
        </div>
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
                                <th>Tanggal Cuci</th>
                                <th>Nama Pelanggan</th>
                                <th>No HP</th>
                                <th>Tipe Mobil</th>
                                <th>Warna Mobil</th>
                                <th>No. Polisi</th>
                                <th>Kupon yang didapat</th>
                                <th>Tambah Kupon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $no=>$item)
                            <tr>
                                <td class="text-center">
                                    {{ $no+1 }}
                                </td>
                                <td>{{ date('d-m-Y', strtotime($item->wash_date)) }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>
                                    {{ $item->phone }}
                                </td>
                                <td>
                                    {{ $item->car }}
                                </td>
                                <td>
                                    {{ $item->car_color }}
                                </td>
                                <td>
                                    {{ $item->no_polisi }}
                                </td>
                                <td>
                                    {{ $item->coupon == 8 ? 'GRATIS CUCI' : $item->coupon }}
                                </td>
                                <td>
                                    <div class="row">
                                        <form action="{{ route('dashboard.coupon.addcoupon', $item->id) }}" method="post">
                                            @csrf
                                            @method('patch')
                                            <select class="form-control" name="coupon">
                                                <option value="{{ $item->coupon }}">{{ $item->coupon == 8 ? 'GRATIS CUCI' : $item->coupon }}</option>
                                                <option disabled>--------</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">GRATIS CUCI</option>
                                            </select>
                                            <button class="btn btn-primary btn-sm mr-2" type="submit">Tambah Coupon</button>
                                        </form>
                                    </div>
                                </td>
                                <td>
                                    <a href="{{ route('dashboard.coupon.edit', $item->id) }}" class="btn btn-success btn-sm mr-1">Edit</a>
                                    <a href="{{ route('dashboard.coupon.show', $item->id) }}" class="btn btn-secondary btn-sm mr-1">Show</a>
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
