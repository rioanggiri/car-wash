@extends('layouts.dashboard')

@section('coupon', 'active')
@section('content')
<h1 class="section-header">
    <div> Coupons</div>
</h1>
<div class="row">
    <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
                <h4><a href="{{ route('dashboard.coupon.index') }}" class="btn btn-icon icon-left btn-primary mt-3"><i class="fas fa-chevron-left"></i> Back</a></h4>
            </div>
            <div class="card-body">
                <form action="{{ route('dashboard.coupon.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="wash_date">Tanggal Cuci</label>
                        <input id="wash_date" type="date" value="{{ old('wash_date') }}" class="form-control" name="wash_date">
                        @error('wash_date')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Pilih Pelanggan</label>
                        <select class="form-control" id="users_id" name="users_id">
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('users_id')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="form-group col-6">
                            <label for="phone">No. HP</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                            @error('phone')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-6">
                            <label for="address">Alamat</label>
                            <textarea class="form-control" id="address" name="address">{{ old('address') }}</textarea>
                            @error('address')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-4">
                            <label for="car" class="d-block">Tipe Mobil</label>
                            <input id="car" type="text" class="form-control" name="car" value="{{ old('car') }}">
                            @error('car')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-4">
                            <label for="car_color" class="d-block">Warna Mobil</label>
                            <input id="car_color" type="text" class="form-control" name="car_color" value="{{ old('car_color') }}">
                            @error('car_color')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group col-4">
                            <label for="no_polisi" class="d-block">No Polisi</label>
                            <input id="no_polisi" type="text" class="form-control" name="no_polisi" value="{{ old('no_polisi') }}">
                            @error('no_polisi')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary btn-sm">
                            Tambah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#users_id').select2();
    });

</script>
@endsection
