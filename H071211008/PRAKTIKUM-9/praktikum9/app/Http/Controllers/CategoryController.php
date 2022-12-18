<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data = Category::paginate(10);
        return view('category', compact('data'));
    }

    public function tambahcategory(){
        return view('tambahdata');
    }

    public function insertdatacategory(Request $request){
        Category::create($request->all());
        return redirect()->route('category')->with('succes', 'Data berhasil ditambahkan');
    }

    public function tampilkandatacategory($id){
        $data = Category::find($id);
        return view('tampildata', compact('data'));
    }

    public function updatedatacategory(Request $request, $id){
        $data = Category::find($id);
        $data->update($request->all());

        return redirect()->route('category')->with('success', 'Data berhasil diupdate');
    }

    public function deletecategory($id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->route('category')->with('success', 'Data berhasil dihapus');
    }
}
