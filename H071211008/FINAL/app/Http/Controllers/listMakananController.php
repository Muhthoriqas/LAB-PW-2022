<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class listMakananController extends Controller
{
    public function index(){
        return view('...\user\listMakanan');
    }
}