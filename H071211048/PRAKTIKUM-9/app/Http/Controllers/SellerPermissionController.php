<?php

namespace App\Http\Controllers;

use App\Models\permission;
use App\Models\seller_permission;
use App\Models\seller;
use App\Models\permissions;
use Illuminate\Http\Request;

class SellerPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seller = seller::all();
        $permission = permission::all();
        $seller_permission = seller_permission::with('seller', 'permission')->get();
        return view('product', [
            "data" =>seller_permission::orderBy('update_at', 'desc')->paginate(5)
        ], compact('seller','permission', 'seller_permission'));
    }

    public function add(){
        return view('seller_permissions');
    }

    public function store(Request $request)
    {
            $seller_permission = new seller_permission();
            $seller_permission->seller_id = $request->input('seller_id');
            $seller_permission->permission_id = $request->input('permission_id');
            $seller_permission->save();
            return redirect()->back->with('status', 'berhasil menambahkan data');
    }   

    public function edit($id){
        $singleData = seller_permission::find($id);
        $seller= seller::all();
        $permission = permission::all();
        $seller_permission = seller_permission::with('seller', 'permission')->get();
        return view ('/sellerPermission/edit/{id}', compact('singleData', 'seller', 'permission', 'seller_permission'));
    }

    public function update (Request $request, $id){
        $singleData = seller_permission::find($id);
        $singleData->update($request->all());

        return redirect()->intended('/seller_permission');
    }

    public function delete ($id){
        $singleData = seller_permission::find($id);
        $singleData->delete();
        return redirect()->back();
    }
}
