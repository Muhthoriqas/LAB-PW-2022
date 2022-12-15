<?php

namespace App\Http\Controllers;

use App\Models\permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('permission', [
            "data" =>permission::orderBy('update_at', 'desc')->paginate(5)
        ]);
    }

    public function add(){
        return view('permission');
    }

    public function store(Request $request)
    {
            $permission = new permission();
            $permission->name = $request->input('name');
            $permission->description = $request->input('description');
            $permission->session_status = $request->input('status');
            $permission->save();
            return redirect()->back->with('status', 'berhasil menambahkan data');
    }   

    public function edit($id){
        $singleData = permission::find($id);
        return view ('/permission/edit/{id}', compact('singleData'));
    }

    public function update (Request $request, $id){
        $singleData = permission::find($id);
        $singleData->update($request->all());

        return redirect()->intended('/permission');
    }

    public function delete ($id){
        $singleData = permission::find($id);
        $singleData->delete();
        return redirect()->back();
    }
}
