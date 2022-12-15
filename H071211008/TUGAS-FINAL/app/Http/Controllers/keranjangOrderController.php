<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class keranjangOrderController extends Controller
{
    public function index(){
        return view('...\user\keranjangOrder');
    }
}