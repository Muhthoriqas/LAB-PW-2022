<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\member;

class memberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 5;
        if (strlen($katakunci)) {
            $data = member::where('member', 'like', "%$katakunci%")
            ->orWhere('nama', 'like', "%$katakunci%")
            ->orWhere('alamat', 'like', "%$katakunci%")
            ->paginate($jumlahbaris);
        } else {
            $data = member::orderBy('member', 'desc')->paginate($jumlahbaris);
        }
        return view('member.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('member', $request->member);
        Session::flash('nama', $request->nama);
        Session::flash('alamat', $request->alamat);

        $request->validate([
            'member' => 'required|string|unique:member,member',
            'nama' => 'required',
            'alamat' => 'required'
        ],[
            'member.required' => 'ID Member harus diisi',
            'member.numeric' => 'ID Member harus berupa angka',
            'member.unique' => 'ID Member sudah ada',
            'nama.required' => 'Nama harus diisi',
            'alamat.required' => 'Alamat harus diisi'
        ]);
        $data = [
            'member' => $request->member,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ];
        member::create($data);
        return redirect()->to('/')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = member::where('member', $id)->first();
        return view('member.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required'
        ],[
            'nama.required' => 'Nama harus diisi',
            'alamat.required' => 'Alamat harus diisi'
        ]);
        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
        ];
        member::where('member', $id)->update($data);
        return redirect()->to('/')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        member::where('member', $id)->delete();
        return redirect()->to('/')->with('success', 'Data berhasil dihapus');
    }
}
