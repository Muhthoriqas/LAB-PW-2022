<?php

namespace App\Http\Controllers;

use App\Models\kelas_user;
use App\Http\Requests\Storekelas_userRequest;
use App\Http\Requests\Updatekelas_userRequest;

class KelasUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storekelas_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storekelas_userRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kelas_user  $kelas_user
     * @return \Illuminate\Http\Response
     */
    public function show(kelas_user $kelas_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kelas_user  $kelas_user
     * @return \Illuminate\Http\Response
     */
    public function edit(kelas_user $kelas_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatekelas_userRequest  $request
     * @param  \App\Models\kelas_user  $kelas_user
     * @return \Illuminate\Http\Response
     */
    public function update(Updatekelas_userRequest $request, kelas_user $kelas_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kelas_user  $kelas_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelas_user $kelas_user)
    {
        //
    }
}
