<?php

namespace App\Http\Controllers;

use App\Models\absen_user;
use App\Http\Requests\Storeabsen_userRequest;
use App\Http\Requests\Updateabsen_userRequest;

class AbsenUserController extends Controller
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
     * @param  \App\Http\Requests\Storeabsen_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeabsen_userRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\absen_user  $absen_user
     * @return \Illuminate\Http\Response
     */
    public function show(absen_user $absen_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\absen_user  $absen_user
     * @return \Illuminate\Http\Response
     */
    public function edit(absen_user $absen_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateabsen_userRequest  $request
     * @param  \App\Models\absen_user  $absen_user
     * @return \Illuminate\Http\Response
     */
    public function update(Updateabsen_userRequest $request, absen_user $absen_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\absen_user  $absen_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(absen_user $absen_user)
    {
        //
    }
}
