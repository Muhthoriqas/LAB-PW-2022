<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('BackEnd.category.addCategory');
    }

    public function save( Request $request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->order_number = $request->order_number;
        $category->category_status = $request->category_status;
        $category->added_on = $request->added_on;
        $category->save();

        return back()->with('message', 'Category Added Successfully');
    }

    public function manage()
    {
        $categories = Category::all();
        return view('BackEnd.category.manageCategory', compact('categories'));
    }

    public function active($category_id)
    {
        $categories = Category::find($category_id);
        $categories->category_status = 1;
        $categories->save();
        return back();
    }

    public function inactive($category_id)
    {
        $categories = Category::find($category_id);
        $categories->category_status = 0;
        $categories->save();
        return back();
    }

    public function delete($category_id)
    {
        $categories = Category::find($category_id);
        $categories->delete();
        return back()->with('message', 'Category Deleted Successfully');
    }

    public function update (Request $request)
    {
        $categories = Category::find($request->category_id);
        $categories->category_name = $request->category_name;
        $categories->order_number = $request->order_number;
        $categories->save();

        return redirect('/category/manage')->with('message', 'Category Updated Successfully');
    
    }
    
}