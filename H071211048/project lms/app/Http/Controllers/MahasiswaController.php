<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Mahasiswa::where('nim', 'LIKE','%'.$request->search. '%')
            ->orWhere('tahun_masuk', 'LIKE','%'.$request->search. '%')
            ->paginate(10);
        }else{
            $data = Mahasiswa::paginate(5);;
        // return view('mahasiswa',compact('data'));
        }
        // $data = Mahasiswa::paginate(10);
        return view('mahasiswa',compact('data'));
    }

    public function tambahDataMahasiswa (){
        return view('create/tambahMahasiswa');
    }

    public function insertData (Request $request){ 
        $data = Mahasiswa::create($request->all());
        if($request -> hasFile ('foto')){
            $request -> file ('foto') -> move ('fotoMahasiswa/', $request ->file ('foto')-> getClientOriginalName());
            $data -> foto = $request ->file ('foto')->getClientOriginalName();
            $data -> save();
        }
        return redirect()->route('mahasiswa')->with('success', 'data berhasil ditambahkan');
    }

    public function tampilkanData($id){
        $data=Mahasiswa::find($id);
        return view('edit/editMahasiswa', compact('data'));
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
