<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index(){
        $data = Permission::paginate(10);
        return view('permission', compact('data'));
    }

    public function tambahpermission(){
        return view('tambahdata');
    }

    public function insertdatapermission(Request $request){
        Permission::create($request->all());
        return redirect()->route('permission')->with('succes', 'Data berhasil ditambahkan');
    }

    public function tampilkandatapermission($id){
        $data = Permission::find($id);
        return view('tampildata', compact('data'));
    }

    public function updatedatapermission(Request $request, $id){
        $data = Permission::find($id);
        $data->update($request->all());

        return redirect()->route('permission')->with('success', 'Data berhasil diupdate');
    }

    public function deletepermission($id){
        $data = Permission::find($id);
        $data->delete();
        return redirect()->route('permission')->with('success', 'Data berhasil dihapus');
    }
}
