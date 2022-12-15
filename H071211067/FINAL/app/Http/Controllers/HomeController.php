<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\coupon;
use App\Models\computer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userType=Auth::user()->name;
        if($userType=="Lev"){
            $countCate = DB::table('categories')->where('category_status', 1)->count();
            $countCoupon = DB::table('coupons')->where('coupon_status', 1)->count();
            $countComputer = DB::table('computers')->where('computer_status', 1)->count();
            $countUser = DB::table('users')->count();

            return view('BackEnd.Home.index', compact('countCate', 'countCoupon', 'countComputer', 'countUser'));
        }else{
            
            
            $categories = Category::where('category_status',1)->get();
            $computers = computer::where('computer_status',1)->get();
            return view('FrontEnd.content.home', compact('categories','computers'));
        }

    }


}
