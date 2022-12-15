<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\product;
use App\Models\seller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('category', [
            "data" =>product::orderBy('update_at', 'desc')->paginate(5)
        ]);
    }

    public function add(){
        return view('category');
    }

    public function store(Request $request)
    {
            $category = new category();
            $category->name = $request->input('name');
            $category->status = $request->input('status');
            $category->save();
            return redirect()->back->with('status', 'berhasil menambahkan data');
    }   

    public function edit($id){
        $singleData = product::find($id);
        return view ('category/edit/{id}', compact('singleData'));
    }

    public function update (Request $request, $id){
        $singleData = product::find($id);
        $singleData->update($request->all());

        return redirect()->intended('/category');
    }

    public function delete ($id){
        $singleData = product::find($id);
        $singleData->delete();
        return redirect()->back();
    }

}
