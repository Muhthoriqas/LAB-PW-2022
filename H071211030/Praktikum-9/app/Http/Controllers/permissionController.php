<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\permission;
use Illuminate\Support\Facades\DB;

class permissionController extends Controller
{
    public function showPermission(){
        $data = permission::paginate(10);
        return view('permission')->with(compact('data'));
    }

    public function savePermissionUseEloquent(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'status'=>'required'
        ]);
        
        $permission = new permission;
        $permission->name = $request->name;
        $permission->description = $request->description;
        $permission->status = $request->status;

        $permission->save();

        return redirect()->to('permission')->send()->with('success', 'Data berhasil di tambahkan!');
    }

    public function savePermissionUseQueryBuilder(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'status'=>'required'
        ]);
        
        $query = DB::table('permissions')->insert([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'status'=>$request->input('status')
        ]);

        if($query){
            return redirect()->to('permission')->send()->with('success', 'Data berhasil di tambahkan!');
        } 
    }

    public function editPermissionUseEloquent(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'status'=>'required'
        ]);
        
        $permssion = permssion::find($id);
        $permssion->name = $request->name;
        $permssion->description = $request->description;
        $permssion->status = $request->status;

        $category->save();

        return redirect()->to('permission')->send()->with('success', 'Data berhasil di edit!');
    }

    public function editPermissionUseQueryBuilder(Request $request, $id){
        
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'status'=>'required'
        ]);

        $query = DB::table('permissions')->where('id', $id)->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'status'=>$request->input('status')
        ]);
        if($query){
            return redirect()->to('permission')->send()->with('success', 'Data berhasil di edit!');
        }
    }

    public function deletePermissionUseEloquent($id){
        $permission = permission::where('id',$id)->delete();
        return redirect()->to('permission')->send()->with('success', 'Data berhasil di hapus!');
    }

    public function deletePermissionUseQueryBuilder($id){
        $permission = DB::table('permissions')->where('id','=', $id)->delete();
        return redirect()->to('permission')->send()->with('success', 'Data berhasil di hapus!');
    }
}
