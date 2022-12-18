<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelasMatakuliah;
use Illuminate\Support\Facades\DB;

class KelasMatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = KelasMatakuliah::with('matakuliah', 'kelas');
        // $data1 = DB::table('matakuliahs')->get();
        // $data2 = DB::table('kelas')->get();
        // return view('kelas')->with(compact('data', 'data1', 'data2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KelasMatakuliah  $kelasMatakuliah
     * @return \Illuminate\Http\Response
     */
    public function show(KelasMatakuliah $kelasMatakuliah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KelasMatakuliah  $kelasMatakuliah
     * @return \Illuminate\Http\Response
     */
    public function edit(KelasMatakuliah $kelasMatakuliah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KelasMatakuliah  $kelasMatakuliah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KelasMatakuliah $kelasMatakuliah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KelasMatakuliah  $kelasMatakuliah
     * @return \Illuminate\Http\Response
     */
    public function destroy(KelasMatakuliah $kelasMatakuliah)
    {
        //
    }
}
