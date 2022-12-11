<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    
    public function index()
    {
        return view('permission', [
            "data" => permission::orderBy('updated_at', 'desc')->paginate(10)

        ]);
    }


    public function add()
    {
        return view('permission');
    }

    public function store(Request $request)
    {
        $permission = new permission();
        $permission->name = $request->input('name');
        $permission->description = $request->input('description');
        $permission->status = $request->input('status');
        $permission->save();
        return redirect()->back()->with('success', 'Berhasil Menambahkan Data');
    }

    public function edit($id)
    {

        $data = permission::find($id);
        return view('edit.editPermission', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = permission::find($id);
        $data->update($request->all());

        return redirect()->intended('/permission')
        ->with('success', 'Berhasil Mengupdate Data');
    }

    public function delete($id)
    {
        $data = permission::find($id);
        $data->delete();
        return redirect()->back();
    }

}
