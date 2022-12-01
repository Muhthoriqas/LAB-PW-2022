<?php

namespace App\Http\Controllers;

use App\Models\library;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illumnate\Http\Response
     */
    public function index()
    {
        $dtmahasiswa = library::paginate(2);
        return view('index', compact('dtmahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insert');
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        library::create([
            'nim' => $request -> nim,
            'nama' => $request -> nama,
            'fakultas' => $request -> fakultas,
            'alamat' => $request -> alamat
        ]);
        return redirect('index') -> with('success', 'Data Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\library  $library
     * @return \Illuminate\Http\Response
     */
    public function show(library $library)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\library  $library
     * @return \Illuminate\Http\Response
     */
    public function edit(library $library, $id)
    {
        $mahasiswa = library::findorfail($id);
        return view('edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mahasiswa = library::findorfail($id);
        $mahasiswa->update($request->all());
        return redirect('index') -> with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $mahasiswa = library::findorfail($id);
        $mahasiswa->delete();
        // return redirect('index') -> with('success', 'Data Updated');

        return back() -> with('info', 'Data Deleted');
    }
}
