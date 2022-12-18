<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seller_permission;
use Illuminate\Support\Facades\DB;

class sellerPermissionController extends Controller
{
    public function showS_Permission(){
        $data = seller_permission::with('sellers', 'permissions')->paginate(10);
        $data1 = DB::table('sellers')->get();
        $data2 = DB::table('permissions')->get();
        return view('seller_permission')
            ->with(compact('data'))
            ->with(compact('data1'))
            ->with(compact('data2'));
    }

    public function saveS_PermissionUseEloquent(Request $request){
        $request->validate([
            'seller'=>'required',
            'permission'=>'required'
        ]);
        
        $seller_permission = new seller_permission;
        $seller_permission->seller_id = $request->seller;
        $seller_permission->permission_id = $request->permission;

        $seller_permission->save();

        return redirect()->to('seller_permission')->send()->with('success', 'Data berhasil di tambahkan!');
    }

    public function saveS_PermissionUseQueryBuilder(Request $request){
        $request->validate([
            'seller'=>'required',
            'permission'=>'required'
        ]);
        
        $query = DB::table('seller_permissions')->insert([
            'seller_id'=>$request->input('seller'),
            'permission_id'=>$request->input('permission')
        ]);

        if($query){
            return redirect()->to('seller_permission')->send()->with('success', 'Data berhasil di tambahkan!');
        } 
    }

    public function editS_PermissionUseEloquent(Request $request, $id){
        $request->validate([
            'seller'=>'required',
            'permission'=>'required'
        ]);
        
        $seller_permission = seller_permission::find($id);
        $seller_permission->seller_id = $request->seller;
        $seller_permission->permission_id = $request->permission;

        $category->save();

        return redirect()->to('seller_permission')->send()->with('success', 'Data berhasil di edit!');
    }

    public function editS_PermissionUseQueryBuilder(Request $request, $id){
        
        $request->validate([
            'seller'=>'required',
            'permission'=>'required'
        ]);

        $query = DB::table('seller_permissions')->where('id', $id)->update([
            'seller_id'=>$request->input('seller'),
            'permission_id'=>$request->input('permission')
        ]);
        if($query){
            return redirect()->to('seller_permission')->send()->with('success', 'Data berhasil di edit!');
        }
    }

    public function deleteS_PermissionUseEloquent($id){
        $seller_permission = seller_permission::where('id',$id)->delete();
        return redirect()->to('seller_permission')->send()->with('success', 'Data berhasil di hapus!');
    }

    public function deleteS_PermissionUseQueryBuilder($id){
        $seller_permission = DB::table('seller_permissions')->where('id','=', $id)->delete();
        return redirect()->to('seller_permission')->send()->with('success', 'Data berhasil di hapus!');
    }
}
