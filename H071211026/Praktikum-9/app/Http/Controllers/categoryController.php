<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    public function showCategory(){
        $data = category::paginate(10);
        return view('category')->with(compact('data'));
    }

    public function saveCategoryUseEloquent(Request $request){
        $request->validate([
            'name'=>'required',
            'status'=>'required'
        ]);
        
        $category = new category;
        $category->name = $request->name;
        $category->status = $request->status;

        $category->save();

        return redirect()->to('category')->send()->with('success', 'Data berhasil di tambahkan!');
    }

    public function saveCategoryUseQueryBuilder(Request $request){
        $request->validate([
            'name'=>'required',
            'status'=>'required'
        ]);
        
        $query = DB::table('categorys')->insert([
            'name'=>$request->input('name'),
            'status'=>$request->input('status')
        ]);

        if($query){
            return redirect()->to('category')->send()->with('success', 'Data berhasil di tambahkan!');
        } 
    }

    public function editCategoryUseEloquent(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'status'=>'required'
        ]);
        
        $product = category::find($id);
        $category->name = $request->name;
        $category->starus = $request->status;

        $category->save();

        return redirect()->to('category')->send()->with('success', 'Data berhasil di edit!');
    }

    public function editCategoryUseQueryBuilder(Request $request, $id){
        
        $request->validate([
            'name'=>'required',
            'status'=>'required'
        ]);

        $query = DB::table('categorys')->where('id', $id)->update([
            'name'=>$request->input('name'),
            'status'=>$request->input('status')
        ]);
        if($query){
            return redirect()->to('category')->send()->with('success', 'Data berhasil di edit!');
        }
    }

    public function deleteCategoryUseEloquent($id){
        $category = category::where('id',$id)->delete();
        return redirect()->to('category')->send()->with('success', 'Data berhasil di hapus!');
    }

    public function deleteCategoryUseQueryBuilder($id){
        $deleted = DB::table('categorys')->where('id','=', $id)->delete();
        return redirect()->to('category')->send()->with('success', 'Data berhasil di hapus!');
    }
}
