<?php

namespace App\Http\Controllers;

use App\Models\seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seller', [
            "data" =>seller::orderBy('update_at', 'desc')->paginate(5)
        ]);
    }

    public function add(){
        return view('seller');
    }

    public function store(Request $request)
    {
            $seller = new seller();
            $seller->name = $request->input('name');
            $seller->address = $request->input('address');
            $seller->gender = $request->input('gender');
            $seller->noHp = $request->input('noHp');
            $seller->status = $request->input('status');
            $seller->save();
            return redirect()->back->with('status', 'berhasil menambahkan data');
    }   

    public function edit($id){
        $singleData = seller::find($id);
        return view ('seller/edit/{id}', compact('singleData'));
    }

    public function update (Request $request, $id){
        $singleData = seller::find($id);
        $singleData->update($request->all());

        return redirect()->intended('/seller');
    }

    public function delete ($id){
        $singleData = seller::find($id);
        $singleData->delete();
        return redirect()->back();
    }
}
