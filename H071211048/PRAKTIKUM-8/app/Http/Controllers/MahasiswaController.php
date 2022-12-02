<?php

namespace App\Http\Controllers;
// use Http\Controllers\Mahasiswa;
use App\Models\Mahasiswa;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){

        $data = Mahasiswa::paginate(10);
        return view('mahasiswa',compact('data'));
    }

    public function tambahDataMahasiswa (){
        return view('tambahData');
    }

    public function insertData (Request $request){
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa')->with('success', 'data berhasil ditambahkan');
    }

    public function tampilkanData($id){
        $data=Mahasiswa::find($id);
        return view('tampilData', compact('data'));
    }

    public function updateData(Request $request, $id){
        $data=Mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa')->with('success', 'data berhasil diupdate');
    }

    public function hapusData($id){
        // $data=Mahasiswa::find($id);
        // $data->delete();
        // return redirect()->route('mahasiswa')->with('success', 'data berhasil dihapus');
        $data =Mahasiswa::find($id);

        if ($data != null) {
            $data->delete();
            return redirect()->route('mahasiswa')->with('sucess','data berhasil dihapus');
        }
    
        return redirect()->route('mahasiswa')->with('sucess','data berhasil dihapus');
            // return redirect()->route('welcome')->with(['sucess'=> 'Wrong ID!!']);
    }
}
