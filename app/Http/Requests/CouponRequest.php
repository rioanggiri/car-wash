<?php

namespace App\Http\Requests;

use App\Models\Coupon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CouponRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'users_id' => 'required|integer|unique:coupons,id',
            'wash_date' => 'required',
            'phone' => 'required|string',
            'address' => 'required|string',
            'car' => 'required|string',
            'car_color' => 'required|string',
            'no_polisi' => 'required|string',
        ];
    }
}
