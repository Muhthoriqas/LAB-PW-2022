<?php

namespace App\Http\Controllers;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Dosen::where('nip', 'LIKE','%'.$request->search. '%')->paginate(10);
        }else{
            $data = Dosen::paginate(5);
            // $data = Dosen::paginate(1);
        // return view('mahasiswa',compact('data'));
        }
        // $data = Mahasiswa::paginate(10);
        return view('dosen',compact('data'));
    }

    public function tambahDataDosen (){
        return view('create/tambahDosen');
    }

    public function insertDataDosen (Request $request){
        $data = Dosen::create($request->all());
        if($request -> hasFile ('foto')){
            $request -> file ('foto') -> move ('fotoDosen/', $request ->file ('foto')-> getClientOriginalName());
            $data -> foto = $request ->file ('foto')->getClientOriginalName();
            $data -> save();
        }    
        return redirect()->route('dosen')->with('success', 'data berhasil ditambahkan');
    }

    public function tampilkanDataDosen($id){
        $data=Dosen::find($id);
        return view('edit/editDosen', compact('data'));
    }

    public function updateDataDosen(Request $request, $id){
        $data=Dosen::find($id);
        $data->update($request->all());
        return redirect()->route('dosen')->with('success', 'data berhasil diupdate');
    }

    public function hapusDataDosen($id){
        // $data=Mahasiswa::find($id);
        // $data->delete();
        // return redirect()->route('mahasiswa')->with('success', 'data berhasil dihapus');
        $data =Dosen::find($id);

        if ($data != null) {
            $data->delete();
            return redirect()->route('dosen')->with('sucess','data berhasil dihapus');
        }
    
        return redirect()->route('dosen')->with('sucess','data berhasil dihapus');
            // return redirect()->route('welcome')->with(['sucess'=> 'Wrong ID!!']);
    }
}
