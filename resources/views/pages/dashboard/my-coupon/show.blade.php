@extends('layouts.dashboard')

@section('my-coupon', 'active')
@section('content')
<h1 class="section-header">
    <div> My Coupons Details </div>
</h1>
<div class="row">
    <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4><a href="{{ route('dashboard.my-coupon.index') }}" class="btn btn-icon icon-left btn-primary mt-3"><i class="fas fa-chevron-left"></i> Back</a></h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-md" style="border: none">
                        @foreach ($items as $item)
                        <tbody>
                            <tr>
                                <th class="px-6 py-4 text-right">Nama :</th>
                                <td class="px-6 py-4">{{ $item->user->name }}</td>
                            </tr>
                            <tr>
                                <th class="px-6 py-4 text-right">Email :</th>
                                <td class="px-6 py-4">{{ $item->user->email }}</td>
                            </tr>
                            <tr>
                                <th class="px-6 py-4 text-right">Alamat :</th>
                                <td class="px-6 py-4">{{ $item->address }}</td>
                            </tr>
                            <tr>
                                <th class="px-6 py-4 text-right">No. HP :</th>
                                <td class="px-6 py-4">{{ $item->phone }}</td>
                            </tr>
                            <tr>
                                <th class="px-6 py-4 text-right">Mobil :</th>
                                <td class="px-6 py-4">{{ $item->car }}</td>
                            </tr>
                            <tr>
                                <th class="px-6 py-4 text-right">Warna Mobil :</th>
                                <td class="px-6 py-4">{{ $item->car_color }}</td>
                            </tr>
                            <tr>
                                <th class="px-6 py-4 text-right">No Polisi :</th>
                                <td class="px-6 py-4">{{ $item->no_polisi }}</td>
                            </tr>
                            <tr>
                                <th class="px-6 py-4 text-right">Jumlah Kupon :</th>
                                <td class="px-6 py-4">
                                    @if ($item->coupon == 8)
                                    GRATIS CUCI
                                    @elseif($item->coupon == 0)
                                    -
                                    @else
                                    {{ $item->coupon }}
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th class="px-6 py-4 text-right">Status :</th>
                                <td class="px-6 py-4">
                                    @if ($item->amount == 8)
                                    GRATIS CUCI
                                    @else
                                    Ayo Cuci Lagi di Sevensya Auto Car Wash!
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
