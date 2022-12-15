<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sellers_permissions;
use App\Models\sellers;
use App\Models\permissions;


class sellers_permissionsController extends Controller
{
    public function index()
    {
        $sellers = sellers::all();
        $permissions = Permissions::all();
        $sellers_permissions = sellers_permissions::paginate(10);
        return view ('sellers_permissions.index')->with('sellers_permissions', $sellers_permissions)->with('sellers', $sellers)->with('permissions', $permissions);
    }
 
    
    public function create()
    {
        $sellers = sellers::all();
        $permissions = Permissions::all();
        return view('sellers_permissions.create')->with('sellers', $sellers)->with('permissions', $permissions);
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        sellers_permissions::create($input);
        return redirect('sellers_permissions')->with('flash_message', 'sellers_permissions Addedd!');  
    }
 
    
    public function show($id)
    {
        $sellers_permissions = sellers_permissions::find($id);
        $sellers = sellers::all();
        $permissions = Permissions::all();
        return view('sellers_permissions.show')->with('sellers_permissions', $sellers_permissions)->with('sellers', $sellers)->with('permissions', $permissions);
    }
 
    
    public function edit($id)
    {
        $sellers_permissions = sellers_permissions::find($id);
        $sellers = sellers::all();
        $permissions = Permissions::all();
        return view('sellers_permissions.edit')->with('sellers_permissions', $sellers_permissions)->with('sellers', $sellers)->with('permissions', $permissions);
    }
 
  
    public function update(Request $request, $id)
    {
        $sellers_permissions = sellers_permissions::find($id);
        $input = $request->all();
        $sellers_permissions->update($input);
        return redirect('sellers_permissions')->with('flash_message', 'sellers_permissions Updated!');  
    }
 
  
    public function destroy($id)
    {
        sellers_permissions::destroy($id);
        return redirect('sellers_permissions')->with('flash_message', 'sellers_permissions deleted!');  
    }
}
