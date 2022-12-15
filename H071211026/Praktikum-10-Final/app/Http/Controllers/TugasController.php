<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Tugas;
use App\Models\File;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $kelas = Kelas::find($id);
        // dd($kelas);
        $data = Tugas::where('kelas_id', '=', $id)->orderBy('created_at')->get();
        $input = DB::table('kelas')->where('id', '=', $id)->get();
        return view('tugas', compact('data', 'kelas', 'input'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahtugas(Request $request)
    {
        Tugas::create($request->all());
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadfile(Request $request, $id)
    {
        // $file = Tugas::find($id);
        // $tugas = new Tugas;
        // $tugas->nama = $file->nama;
        // $tugas->kelas_id = $file->kelas_id;
        // if($file = $request->file('file')){
        //     $name = $file->getClientOriginalName();
        //     if($file->move('files', $name)){
        //         $tugas->file = $name;
        //     }
        // }
        // $tugas->save();
        // return redirect()->back();

        $file = Tugas::find($id);
        $tugas = new File;
        // $tugas->nama = $file->nama;
        $tugas->tugas_id = $file->id;
        if($file = $request->file('file')){
            $name = $file->getClientOriginalName();
            if($file->move('files', $name)){
                $tugas->file = $name;
            }
        }
        $tugas->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function show(Tugas $tugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function edit(Tugas $tugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tugas $tugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tugas $tugas)
    {
        //
    }
}
