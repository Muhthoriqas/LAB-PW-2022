<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\categories;
use App\Models\sellers;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function index()
    {
        $categories = Categories::all();
        $sellers = sellers::all();
        $products = products::paginate(10);
        return view ('products.index')->with('products', $products)->with('categories', $categories)->with('sellers', $sellers);
    }
 
    
    public function create()
    {
        $categories = Categories::all();
        $sellers = sellers::all();
        return view('products.create')->with('categories', $categories)->with('sellers', $sellers);;
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        products::create($input);
        return redirect('products')->with('flash_message', 'products Addedd!');  
    }

    public function saveProductUseEloquent(Request $request) {
        $produk = products::create([
            'name' => $request->name,
            'seller_id' => $request->seller_id,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'status' => $request->status,
        ]);
        return redirect('products');
    }

    // public function saveProductUseEloquent(Request $request){
    //     $request->validate([
    //         'name'=>'required',
    //         'seller'=>'required',
    //         'category'=>'required',
    //         'price'=>'required',
    //         'status'=>'required',
    //     ]);
        
    //     $product = new product;
    //     $product->name = $request->name;
    //     $product->seller_id = $request->seller;
    //     $product->category_id = $request->category;
    //     $product->price = $request->price;
    //     $product->status = $request->status;

    //     $product->save();

    //     return redirect()->to('products')->send()->with('success', 'Data mahasiswa berhasil di tambahkan!');
    // }

    public function saveProductUseQueryBuilder(Request $request) {
        DB::table('products')->insert([
            'name' => $request->name,
            'seller_id' => $request->seller_id,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'status' => $request->status,
        ]);
        return redirect('products');
    }

    // public function saveProductUseQueryBuilder(Request $request){
    //     $request->validate([
    //         'name'=>'required',
    //         'seller'=>'required',
    //         'category'=>'required',
    //         'price'=>'required',
    //         'status'=>'required',
    //     ]);
        
    //     $query = DB::table('products')->insert([
    //         'name'=>$request->input('name'),
    //         'seller_id'=>$request->input('seller'),
    //         'category_id'=>$request->input('category'),
    //         'price'=>$request->input('price'),
    //         'status'=>$request->input('status'),
    //     ]);

    //     if($query){
    //         return redirect()->to('products')->send()->with('success', 'Data mahasiswa berhasil di tambahkan!');
    //     } 
    // }

    public function show($id)
    {
        $sellers = sellers::all();
        $categories = Categories::all();
        $products = products::find($id);
        return view('products.show')->with('products', $products)->with('categories', $categories)->with('sellers', $sellers);
    }
 
    
    public function edit($id)
    {
        $sellers = sellers::all();
        $categories = Categories::all();
        $products = products::find($id);
        return view('products.edit')->with('products', $products)->with('categories', $categories)->with('sellers', $sellers);
    }
 
    public function update(Request $request, $id)
    {
        $products = products::find($id);
        $input = $request->all();
        $products->update($input);
        return redirect('products')->with('flash_message', 'products Updated!');  
    }
 
  
    public function destroy($id)
    {
        products::destroy($id);
        return redirect('products')->with('flash_message', 'products deleted!');  
    }
}
