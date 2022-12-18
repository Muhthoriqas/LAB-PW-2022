<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seller;
use Illuminate\Support\Facades\DB;


class sellerController extends Controller
{
    public function showSeller(){
        $data = seller::with('permissions','products')->paginate(10);
        $data1 = DB::table('sellers')->get();
        $data2 = DB::table('categorys')->get();
        return view('sellers')
            ->with(compact('data'))
            ->with(compact('data1'))
            ->with(compact('data2'));
    }

    public function saveSellerUseEloquent(Request $request){
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'no_hp'=>'required',
            'status'=>'required',
        ]);
        
        $seller = new seller();
        $seller->name = $request->name;
        $seller->address = $request->address;
        $seller->gender = $request->gender;
        $seller->no_hp = $request->no_hp;
        $seller->status = $request->status;

        $seller->save();

        return redirect()->to('sellers')->send()->with('success', 'Data berhasil di tambahkan!');
    }

    public function saveSellerUseQueryBuilder(Request $request){
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'no_hp'=>'required',
            'status'=>'required'
        ]);
        
        $query = DB::table('sellers')->insert([
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'gender'=>$request->input('gender'),
            'no_hp'=>$request->input('no_hp'),
            'status'=>$request->input('status')
        ]);

        if($query){
            return redirect()->to('sellers')->send()->with('success', 'Data berhasil di tambahkan!');
        } 
    }

    public function editSellerUseEloquent(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'no_hp'=>'required',
            'status'=>'required'
        ]);
        
        $seller = seller::find($id);
        $seller->name = $request->name;
        $seller->address = $request->address;
        $seller->gender = $request->gender;
        $seller->no_hp = $request->no_hp;
        $seller->status = $request->status;

        $seller->save();

        return redirect()->to('sellers')->send()->with('success', 'Data berhasil di edit!');
    }

    public function editSellerUseQueryBuilder(Request $request, $id){
        
        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'gender'=>'required',
            'no_hp'=>'required',
            'status'=>'required'
        ]);

        $query = DB::table('sellers')->where('id', $id)->update([
            'name'=>$request->input('name'),
            'address'=>$request->input('address'),
            'gender'=>$request->input('gender'),
            'no_hp'=>$request->input('no_hp'),
            'status'=>$request->input('status')
        ]);
        if($query){
            return redirect()->to('sellers')->send()->with('success', 'Data berhasil di edit!');
        }
    }

    public function deleteSellerUseEloquent($id){
        $deleted = seller::where('id',$id)->delete();
        return redirect()->to('sellers')->send()->with('success', 'Data berhasil di hapus!');
    }

    public function deleteSellerUseQueryBuilder($id){
        $deleted = DB::table('sellers')->where('id','=', $id)->delete();
        return redirect()->to('sellers')->send()->with('success', 'Data berhasil di hapus!');
    }
}
