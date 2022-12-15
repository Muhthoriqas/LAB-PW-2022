<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use Illuminate\Http\Request;

class couponController extends Controller
{
    public function index()
    {
        return view('BackEnd.coupon.addCoupon');
    }

    public function save( Request $request)
    {
        $coupon = new Coupon();
        $coupon->coupon_code = $request->coupon_code;
        $coupon->coupon_type = $request->coupon_type;
        $coupon->coupon_value = $request->coupon_value;
        $coupon->cart_min_value = $request->cart_min_value;
        $coupon->expired_on = $request->expired_on;
        $coupon->coupon_status = $request->coupon_status;
        $coupon->added_on = $request->added_on;
        $coupon->save();

        return back()->with('message', 'Coupon Added Successfully');
    }

    public function manage()
    {
        $coupons = Coupon::all();
        return view('BackEnd.coupon.manageCoupon', compact('coupons'));
    }

    public function active($coupon_id)
    {
        $coupons = Coupon::find($coupon_id);
        $coupons->coupon_status = 1;
        $coupons->save();
        return back();
    }

    public function inactive($coupon_id)
    {
        $coupons = Coupon::find($coupon_id);
        $coupons->coupon_status = 0;
        $coupons->save();
        return back();
    }

    public function delete($coupon_id)
    {
        $coupons = Coupon::find($coupon_id);
        $coupons->delete();
        return back()->with('message', 'Coupon Deleted Successfully');
    }

    public function update (Request $request)
    {
        $coupons = Coupon::find($request->coupon_id);
        $coupons->coupon_code = $request->coupon_code;
        $coupons->coupon_type = $request->coupon_type;
        $coupons->coupon_value = $request->coupon_value;
        $coupons->cart_min_value = $request->cart_min_value;
        $coupons->expired_on = $request->expired_on;
        $coupons->coupon_status = $request->coupon_status;
        $coupons->added_on = $request->added_on;
        $coupons->save();

        return redirect('/coupon/manage')->with('message', 'Coupon Updated Successfully');
    }
    
}