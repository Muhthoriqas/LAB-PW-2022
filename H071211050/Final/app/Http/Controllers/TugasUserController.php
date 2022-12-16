<?php

namespace App\Http\Controllers;

use App\Models\tugas_user;
use App\Http\Requests\Storetugas_userRequest;
use App\Http\Requests\Updatetugas_userRequest;

class TugasUserController extends Controller
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
     * @param  \App\Http\Requests\Storetugas_userRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetugas_userRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tugas_user  $tugas_user
     * @return \Illuminate\Http\Response
     */
    public function show(tugas_user $tugas_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tugas_user  $tugas_user
     * @return \Illuminate\Http\Response
     */
    public function edit(tugas_user $tugas_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetugas_userRequest  $request
     * @param  \App\Models\tugas_user  $tugas_user
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetugas_userRequest $request, tugas_user $tugas_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tugas_user  $tugas_user
     * @return \Illuminate\Http\Response
     */
    public function destroy(tugas_user $tugas_user)
    {
        //
    }
}
