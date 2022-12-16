<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tagController extends Controller
{
    public function index(){
        return view('...\admin\tag');
    }
}