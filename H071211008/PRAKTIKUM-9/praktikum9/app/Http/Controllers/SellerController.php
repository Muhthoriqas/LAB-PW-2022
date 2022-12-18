<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index(){
        $data = Seller::paginate(10);
        return view('seller', compact('data'));
    }

    public function tambahseller(){
        return view('tambahdata');
    }

    public function insertdataseller(Request $request){
        Seller::create($request->all());
        return redirect()->route('seller')->with('succes', 'Data berhasil ditambahkan');
    }

    public function tampilkandataseller($id){
        $data = Seller::find($id);
        return view('tampildata', compact('data'));
    }

    public function updatedataseller(Request $request, $id){
        $data = Seller::find($id);
        $data->update($request->all());

        return redirect()->route('seller')->with('success', 'Data berhasil diupdate');
    }

    public function deleteseller($id){
        $data = Seller::find($id);
        $data->delete();
        return redirect()->route('seller')->with('success', 'Data berhasil dihapus');
    }
}
