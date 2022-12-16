<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listCategoryController extends Controller
{
    public function index(){
        return view('...\user\listCategory');
    }
}