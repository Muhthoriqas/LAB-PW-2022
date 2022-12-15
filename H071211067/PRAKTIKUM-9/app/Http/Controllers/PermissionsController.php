<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\permissions;

class PermissionsController extends Controller
{
    public function index()
    {
        $permissions = Permissions::paginate(10);
        return view('Permissions.index')->with('permissions', $permissions);
    }
 
    
    public function create()
    {
        return view('Permissions.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Permissions::create($input);
        return redirect('permissions')->with('flash_message', 'Permissions Addedd!');  
    }
    
    public function show($id)
    {
        $permissions = Permissions::find($id);
        return view('Permissions.show')->with('permissions', $permissions);
    }
 
    
    public function edit($id)
    {
        $permissions = Permissions::find($id);
        return view('Permissions.edit')->with('permissions', $permissions);
    }
 
  
    public function update(Request $request, $id)
    {
        $permissions = Permissions::find($id);
        $input = $request->all();
        $permissions->update($input);
        return redirect('permissions')->with('flash_message', 'Permissions Updated!');  
    }
 
  
    public function destroy($id)
    {
        Permissions::destroy($id);
        return redirect('permissions')->with('flash_message', 'Permissions deleted!');  
    }
}
