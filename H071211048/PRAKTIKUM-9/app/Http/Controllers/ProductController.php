<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\seller;
use App\Models\category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seller = seller::all();
        $kategori = category::all();
        $produk = product::with('seller', 'category')->get();
        return view('product', [
            "data" =>product::orderBy('update_at', 'desc')->paginate(5)
        ], compact('seller','kategori', 'produk'));
    }

    public function add(){
        return view('product');
    }

    public function store(Request $request)
    {
            $product = new product();
            $product->name = $request->input('name');
            $product->seller_id = $request->input('seller_id');
            $product->category_id = $request->input('category_id');
            $product->price = $request->input('price');
            $product->name = $request->input('status');
            $product->save();
            return redirect()->back->with('status', 'berhasil menambahkan data');
    }   

    public function edit($id){
        $singleData = product::find($id);
        $seller= seller::all();
        $category = category::all();
        $product = product::with('seller', 'category')->get();
        return view ('/product/edit/{id}', compact('singleData', 'seller', 'category', 'product'));
    }

    public function update (Request $request, $id){
        $singleData = product::find($id);
        $singleData->update($request->all());

        return redirect()->intended('/product');
    }

    public function delete ($id){
        $singleData = product::find($id);
        $singleData->delete();
        return redirect()->back();
    }
}

?>