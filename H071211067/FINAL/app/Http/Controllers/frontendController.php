<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\computer;

class frontendController extends Controller
{
    public function index(){
        
        $computers = DB::table('computers')
            ->join('categories', 'computers.category_id', '=', 'categories.category_id')
            ->select('computers.*', 'categories.category_name')
            ->where('computer_status',1)
            ->get();

        return view('FrontEnd.content.home', compact('computers'));
    }

    public function show($id) {

        $computers = DB::table('computers')
            ->join('categories', 'computers.category_id', '=', 'categories.category_id')
            ->select('computers.*', 'categories.category_name')
            ->where('computer_status',1)
            ->get();

        $categoryComputer = computer::where('computer_status',1)->get();

        return view('FrontEnd.content.home', compact('computers', 'categoryComputer'));

    }
}