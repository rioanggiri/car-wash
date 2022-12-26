<?php

namespace App\Http\Controllers;

use App\Http\Requests\CouponRequest;
use App\Models\Coupon;
use App\Models\User;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Coupon::with(['user'])->get();
        return view('pages.dashboard.coupon.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $users = User::where('roles', "USER")->get();
        return view('pages.dashboard.coupon.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CouponRequest $request, Coupon $coupon)
    {
        $data = $request->validated();

        $coupon->create($data);

        return redirect()->route('dashboard.coupon.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        $items = Coupon::with(['user'])->where('id', $coupon->id)->get();
        return view('pages.dashboard.coupon.show', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        return view('pages.dashboard.coupon.edit', [
            'item' => $coupon
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CouponRequest $request, Coupon $coupon)
    {
        $data = $request->validated();

        $coupon->update($data);

        return redirect()->route('dashboard.coupon.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addCoupon(Request $request, $id)
    {
        $request->validate([
            'coupon' => ['integer']
        ]);

        Coupon::where('id', $id)->update([
            'coupon' => $request->coupon
        ]);

        return redirect()->route('dashboard.coupon.index');
    }

    public function rekapData(Request $request)
    {
        $tanggal_awal = date('d-m-Y', strtotime($request->tanggal_awal));
        $tanggal_akhir = date('d-m-Y', strtotime($request->tanggal_akhir));
        //ddd($tanggal_awal);
        $awal = $request->tanggal_awal;
        $akhir = $request->tanggal_akhir;
        $title = "Hasil Laporan";
        $title1 = "Tanggal : $tanggal_awal Sampai Tanggal : $tanggal_akhir";
        $items = Coupon::with('user')->where([
            ['wash_date', '>=', $awal],
            ['wash_date', '<=', $akhir],
        ])->get();
        //$items = Coupon::with(['user'])->get();
        return view('pages.dashboard.coupon.cetak', compact('title', 'title1', 'items'));
    }
}
