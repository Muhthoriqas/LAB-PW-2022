<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    function index(){
        $index = students::all();
        return view('')
    }
}
