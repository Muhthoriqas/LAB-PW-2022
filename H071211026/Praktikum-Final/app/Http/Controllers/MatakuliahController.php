<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function matakuliah()
    {
        $matakuliah = Matakuliah::all();
        return view('matakuliah', compact('matakuliah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambahmatakuliah(Request $request)
    {
        Matakuliah::create($request->all());
        return redirect('/matakuliah');
    }

    public function updatematakuliah(Request $request, $id)
    {
        $data = Matakuliah::find($id);
        $data->update($request->all());
        return redirect('/matakuliah');
    }

    public function deletematakuliah(Request $request, $id)
    {
        $data = Matakuliah::find($id);
        $data->delete();
        return redirect('/matakuliah');
    }

    // public function detailmatakuliah($id){
    //     $details = Matakuliah::find($id);
    //     // return view('kelas', compact('details'));
    //     return redirect('/kelas');
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function show(Matakuliah $matakuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(Matakuliah $matakuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Matakuliah  $matakuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matakuliah $matakuliah)
    {
        //
    }
}
