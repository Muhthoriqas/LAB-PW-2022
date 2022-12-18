<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Matakuliah;
use App\Models\PivotKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $akun = auth()->user()->id;
        $details = Matakuliah::find($id);
        $data1 = PivotKelas::with('kelas')->where('akun_id', '=', $akun)->get();
        $data2 = Kelas::with('matakuliah')->with('akun')->where('matakuliah_id', '=', $id)->get();
        $input = DB::table('matakuliahs')->where('id', '=', $id)->get();
        return view('kelas', compact('data1', 'data2', 'input'));
    }

    public function tambahkelas(Request $request)
    {
        // Kelas::create($request->all());
        // return redirect()->back();

        $kelas = new Kelas;
        $kelas->nama = $request->input('nama');
        $kelas->matakuliah_id = $request->input('matakuliah_id');
        $kelas->save();

        $id = auth()->user()->id;
        // dd(auth()->user());
        $pivot = new PivotKelas;
        $pivot->kelas_id = $kelas->id;
        $pivot->akun_id = $id;
        $pivot->save();
        return redirect()->back();

    }

    public function daftarkelas(Request $request, $id)
    {
        // Kelas::create($request->all());
        // return redirect()->back();

        // $kelas = new Kelas;
        // $kelas->nama = $request->input('nama');
        // $kelas->matakuliah_id = $request->input('matakuliah_id');
        // $kelas->save();

        $akun = auth()->user()->id;
        // dd(auth()->user());
        $pivot = new PivotKelas;
        $pivot->kelas_id = $id;
        $pivot->akun_id = $akun;
        $pivot->save();
        return redirect()->back();

    }

    public function matkul()
    {
        $akun = auth()->user()->id;
        $data1 = PivotKelas::with('kelas')->where('akun_id', '=', $akun)->get();
        // $data2 = Kelas::with('matakuliah')->with('akun')->where('matakuliah_id', '=', $id)->get();
        // $input = DB::table('matakuliahs')->where('id', '=', $id)->get();
        return view('matkul', compact('data1'));
    }

    public function updatekelas(Request $request, $id)
    {
        $data = Kelas::find($id);
        $data->update($request->all());
        return redirect()->back();
    }

    public function deletekelas(Request $request, $id)
    {
        $data = Kelas::find($id);
        $data->delete();
        return redirect()->back();
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        //
    }
}
