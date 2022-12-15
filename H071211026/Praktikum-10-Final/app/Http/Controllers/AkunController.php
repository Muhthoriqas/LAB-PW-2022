<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        return view('login');
    }

    public function login(Request $request){
        if(Auth::attempt($request->only('username', 'password'))){
            $request->session()->regenerate(); 
            return redirect()->intended('/dashboard');
        }
        return back()->with('fail', 'Login Failed!');
    }

    public function dashboard(Akun $user){
        return view('dashboard');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dosen()
    {
        $dosen = DB::table('akuns')->where('index', '=', 1)->get();
        $mhs = DB::table('akuns')->where('index', '=', 2)->get();
        return view('akun', compact('dosen', 'mhs'));
    }
    
    public function detaildosen($id){
        $details = Akun::find($id);
        return view('dosen', compact('details'));
    }
    public function detailmhs($id){
        $details = Akun::find($id);
        return view('mahasiswa', compact('details'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambahdosen(Request $request)
    {
        Akun::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password),   
            'index' => 1
        ]);
        return redirect('/akun');
    }
    
    public function tambahmhs(Request $request)
    {
        Akun::create([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password),   
            'index' => 2
        ]);
        return redirect('/akun');
    }
    
    public function updatedosen(Request $request, $id)
    {
        $data = Akun::find($id);
        $data->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);
        return redirect('/akun');
    }

    public function updatemhs(Request $request, $id)
    {
        $data = Akun::find($id);
        $data->update([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ]);
        return redirect('/akun');
    }
    
    public function deletedosen(Request $request, $id)
    {
        $data = Akun::find($id);
        $data->delete();
        return redirect('/akun');
    }

    public function deletemhs(Request $request, $id)
    {
        $data = Akun::find($id);
        $data->delete();
        return redirect('/akun');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    public function show(Akun $akun)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akun  $akun
     * @return \Illuminate\Http\Response
     */
    
}
