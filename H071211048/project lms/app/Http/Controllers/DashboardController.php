<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class DashboardController extends Controller
{
    public function index(){

        $totalMahasiswa = Mahasiswa::count();
        $totalDosen = Dosen::count();

        return view('dashboard', compact('totalMahasiswa', 'totalDosen'));
    }
}
