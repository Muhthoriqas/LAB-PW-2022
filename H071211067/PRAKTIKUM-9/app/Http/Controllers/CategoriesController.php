<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\categories;

class CategoriesController extends Controller
{
    public function index()
    { 
        $categories = Categories::paginate(10);
        return view ('Categories.index')->with('categories', $categories);
    }
    
    public function create()
    {
        return view('Categories.create');
    }
 
    public function store(Request $request)
    {
        $input = $request->all();
        Categories::create($input);
        return redirect('categories')->with('flash_message', 'Categories Addedd!');  
    }
 
    
    public function show($id)
    {
        $categories = Categories::find($id);
        return view('Categories.show')->with('categories', $categories);
    }
 
    
    public function edit($id)
    {
        $categories = Categories::find($id);
        return view('Categories.edit')->with('categories', $categories);
    }
 
  
    public function update(Request $request, $id)
    {
        $categories = Categories::find($id);
        $input = $request->all();
        $categories->update($input);
        return redirect('categories')->with('flash_message', 'Categories Updated!');  
    }
 
  
    public function destroy($id)
    {
        Categories::destroy($id);
        return redirect('categories')->with('flash_message', 'Categories deleted!');  
    }
}
