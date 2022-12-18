<?php

namespace App\Http\Controllers;

use App\Models\library;
use App\Http\Requests\StorelibraryRequest;
use App\Http\Requests\UpdatelibraryRequest;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
     * @param  \App\Http\Requests\StorelibraryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorelibraryRequest $request)
    {
        //
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
    public function edit(library $library)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatelibraryRequest  $request
     * @param  \App\Models\library  $library
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatelibraryRequest $request, library $library)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\library  $library
     * @return \Illuminate\Http\Response
     */
    public function destroy(library $library)
    {
        //
    }
}
