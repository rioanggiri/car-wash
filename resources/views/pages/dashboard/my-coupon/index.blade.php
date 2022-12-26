@extends('layouts.dashboard')

@section('my-coupon', 'active')
@section('content')
<h1 class="section-header">
    <div>My Coupons</div>
</h1>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <thead>
                            <tr>
                                <th class="text-center">
                                    No.
                                </th>
                                <th>Nama Pelanggan</th>
                                <th>No HP</th>
                                <th>Tipe Mobil</th>
                                <th>Warna Mobil</th>
                                <th>No. Polisi</th>
                                <th>Jumlah Kupon</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $no=>$item)
                            <tr>
                                <td class="text-center">
                                    {{ $no+1 }}
                                </td>
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
                                    @if ($item->coupon == 8)
                                    GRATIS CUCI
                                    @elseif($item->coupon == 0)
                                    -
                                    @else
                                    $item->coupon
                                    @endif
                                </td>
                                <td>
                                    {{ $item->coupon == 8 ? 'Selamat Anda Dapat Gratis Cuci' : 'Ayo Cuci Lagi di Sevensya Auto Car Wash !' }}
                                </td>
                                <td>
                                    <a href="{{ route('dashboard.my-coupon.show', $item->id) }}" class="btn btn-secondary btn-sm mr-1">Show</a>
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
