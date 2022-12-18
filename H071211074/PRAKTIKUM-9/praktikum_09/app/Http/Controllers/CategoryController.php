<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function index()
    {
        return view('category', [
            "data" => category::orderBy('updated_at', 'desc')->paginate(10)

        ]);
    }


    public function add()
    {
        return view('category');
    }

    public function store(Request $request)
    {
        $category = new category();
        $category->name = $request->input('name');
        $category->status = $request->input('status');
        $category->save();
        return redirect()->back()->with('succes', 'Berhasil Menambahkan Data');
    }

    public function edit($id)
    {

        $data = category::find($id);
        return view('edit.editCategory', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = category::find($id);
        $data->update($request->all());

        return redirect()->intended('/category')
        ->with('success', 'Berhasil Mengupdate Data');
    }

    public function delete($id)
    {
        $data = category::find($id);
        $data->delete();
        return redirect()->back()
        ->with('success', 'Data Berhasil Dihapus');
    }

}
