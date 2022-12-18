<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sellers;

class SellersController extends Controller
{
    public function index()
    {
        $sellers = sellers::paginate(10);
        return view ('sellers.index')->with('sellers', $sellers);
    }
 
    
    public function create()
    {
        return view('sellers.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        sellers::create($input);
        return redirect('sellers')->with('flash_message', 'sellers Addedd!');  
    }
 
    
    public function show($id)
    {
        $sellers = sellers::find($id);
        return view('sellers.show')->with('sellers', $sellers);
    }
 
    
    public function edit($id)
    {
        $sellers = sellers::find($id);
        return view('sellers.edit')->with('sellers', $sellers);
    }
 
  
    public function update(Request $request, $id)
    {
        $sellers = sellers::find($id);
        $input = $request->all();
        $sellers->update($input);
        return redirect('sellers')->with('flash_message', 'sellers Updated!');  
    }
 
  
    public function destroy($id)
    {
        sellers::destroy($id);
        return redirect('sellers')->with('flash_message', 'sellers deleted!');  
    }
}
