<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
  public function index(){
    $data = Mahasiswa::all();
    return view('index', ["data" => $data]);
  }

  public function store(Request $request){
    $nim = $request->nim;
    $nama = $request->nama;
    $alamat = $request->alamat;
    $fakultas = $request->fakultas;

    Mahasiswa::create(["nim"=>$nim, "nama"=>$nama, "alamat"=>$alamat, "fakultas"=>$fakultas]);
    return redirect("/");
  }

  public function edit($id){
    $data = Mahasiswa::where("id", $id)->get();
    $data = $data[0];
    return view("edit", ["data" => $data]);
  }

  public function update(Request $request, $id){
    $nim = $request->nim;
    $nama = $request->nama;
    $alamat = $request->alamat;
    $fakultas = $request->fakultas;

    Mahasiswa::where("id", $id)->update(["nim" => $nim, "nama" => $nama, "alamat" => $alamat, "fakultas" => $fakultas]);

    $data = Mahasiswa::all();
    return redirect("/");
  }

  public function delete($id){
    Mahasiswa::destroy($id);
    return redirect("/");
  }
} 