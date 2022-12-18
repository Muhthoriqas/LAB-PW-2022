<?php

namespace App\Http\Controllers;

use App\Models\SellerPermission;
use App\Models\Seller;
use App\Models\Permission;
use Illuminate\Http\Request;

class SellerPermissionController extends Controller
{
    
    public function index()
    {
        $Slr = seller::all();
        $Perm = permission::all();
        $slrPerm = sellerPermission::with('seller', 'permission')->get();
        return view('sellerPermission', [
            "data" => sellerPermission::orderBy('updated_at', 'desc')->paginate(5)
        ], compact('Slr', 'Perm', 'slrPerm'));
    }


    public function add()
    {
        return view('sellerPermission');
    }

    public function store(Request $request)
    {
        $sellerPerm = new sellerPermission();
        $sellerPerm->seller_id = $request->input('seller_id');
        $sellerPerm->permission_id = $request->input('permission_id');
        $sellerPerm->save();
        return redirect()->back()->with('success', 'Berhasil Menambahkan Data');
    }

    public function edit($id)
    {

        $data = sellerPermission::find($id);
        $Slr = seller::all();
        $Perm = permission::all();
        $slrPerm = sellerPermission::with('seller', 'permission')->get();
        return view('edit.editSellerPermission', compact('data', 'Slr', 'Perm', 'slrPerm'));
    }

    public function update(Request $request, $id)
    {
        $data = sellerPermission::find($id);
        $data->update($request->all());

        return redirect()->intended('/sellerPermission')
        ->with('success', 'Berhasil Mengupdate Data');
    }

    public function delete($id)
    {
        $data = sellerPermission::find($id);
        $data->delete();
        return redirect()->back();
    }

}
