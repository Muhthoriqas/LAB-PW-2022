<?php

namespace App\Http\Controllers;

use App\Models\matakuliah_user;
use App\Http\Requests\Storematakuliah_userRequest;
use App\Http\Requests\Updatematakuliah_userRequest;

class MatakuliahUserController extends Controller
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
     * @param  \App\Http\Requests\Storematakuliah_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storematakuliah_userRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\matakuliah_user  $matakuliah_user
     * @return \Illuminate\Http\Response
     */
    public function show(matakuliah_user $matakuliah_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\matakuliah_user  $matakuliah_user
     * @return \Illuminate\Http\Response
     */
    public function edit(matakuliah_user $matakuliah_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatematakuliah_userRequest  $request
     * @param  \App\Models\matakuliah_user  $matakuliah_user
     * @return \Illuminate\Http\Response
     */
    public function update(Updatematakuliah_userRequest $request, matakuliah_user $matakuliah_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\matakuliah_user  $matakuliah_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(matakuliah_user $matakuliah_user)
    {
        //
    }
}
