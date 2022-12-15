<?php

namespace App\Http\Controllers;

use App\Models\Sellers_Permissions;
use Illuminate\Http\Request;

class SellersPermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seller_permission = Sellers_Permissions::paginate(10);
        // $product = Products::get();
        print_r($seller_permission); //tis' called debugging kek var dump
        return view('sellerPermission.index')->with('seller_permission', $seller_permission);
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
     * @param  \App\Models\Sellers_Permissions  $sellers_Permissions
     * @return \Illuminate\Http\Response
     */
    public function show(Sellers_Permissions $sellers_Permissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sellers_Permissions  $sellers_Permissions
     * @return \Illuminate\Http\Response
     */
    public function edit(Sellers_Permissions $sellers_Permissions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sellers_Permissions  $sellers_Permissions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sellers_Permissions $sellers_Permissions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sellers_Permissions  $sellers_Permissions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sellers_Permissions $sellers_Permissions)
    {
        //
    }
}
