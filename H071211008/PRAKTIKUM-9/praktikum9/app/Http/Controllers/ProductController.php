<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Seller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data = Product::paginate(10);
        $category = Category::all();
        $seller = Seller::all();
        return view('product', compact('data', 'seller', 'category'));
    }

    public function tambahproduct(){
        return view('tambahdata');
    }

    public function insertdataproduct(Request $request){
        Product::create($request->all());
        return redirect()->route('product')->with('succes', 'Data berhasil ditambahkan');
    }

    public function tampilkandataproduct($id){
        $data = Product::find($id);
        return view('tampildata', compact('data'));
    }

    public function updatedataproduct(Request $request, $id){
        $data = Product::find($id);
        $data->update($request->all());

        return redirect()->route('product')->with('success', 'Data berhasil diupdate');
    }

    public function deleteproduct($id){
        $data = Product::find($id);
        $data->delete();
        return redirect()->route('product')->with('success', 'Data berhasil dihapus');
    }
}
