<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Seller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
        $Slr = seller::all();
        $Ctr = category::all();
        $prdct = product::with('seller', 'category')->get();
        return view('product', [
            "data" => product::orderBy('updated_at', 'desc')->paginate(10)

        ], compact('Slr', 'Ctr', 'prdct'));
    }




    public function add()
    {
        return view('product');
    }

    public function store(Request $request)
    {
        $product = new product();
        $product->name = $request->input('name');
        $product->seller_id = $request->input('seller_id');
        $product->category_id = $request->input('category_id');
        $product->price = $request->input('price');
        $product->status = $request->input('status');
        $product->save();
        return redirect()->back()->with('succes', 'Berhasil Menambahkan Data');
    }

    public function edit($id)
    {

        $data = product::find($id);
        $Slr = seller::all();
        $Ctr = category::all();
        $prdct = product::with('seller', 'category')->get();
        return view('edit.editProduct',  compact('data', 'Slr', 'Ctr', 'prdct'));
    }

    public function update(Request $request, $id)
    {
        $data = product::find($id);
        $data->update($request->all());

        return redirect()->intended('/product')
        ->with('success', 'Berhasil Mengupdate Data');
    }

    public function delete($id)
    {
        $data = product::find($id);
        $data->delete();
        return redirect()->back();
    }

}
