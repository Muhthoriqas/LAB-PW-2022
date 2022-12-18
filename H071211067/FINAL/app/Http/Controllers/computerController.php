<?php

namespace App\Http\Controllers;

use App\Models\computer;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class computerController extends Controller
{
    public function index()
    {
        $categories = Category::where('category_status', 1)->get();
        return view('BackEnd.computer.add', compact('categories'));
    }

    public function save(Request $request)
    {
        $imgName = $request->file('computer_image');
        $image = $imgName->getClientOriginalName();
        $directory = 'BackendSourceFile/computer_img/';
        $imgUrl = $directory.$image;
        $imgName->move($directory, $image); 

        $computer = new computer();
        $computer->computer_name = $request->computer_name;
        $computer->category_id = $request->category_id;
        $computer->computer_detail = $request->computer_detail;
        $computer->computer_image = $imgUrl;
        $computer->computer_status = $request->computer_status;
        $computer->full = $request->full;
        $computer->full_price = $request->full_price;
        $computer->save();

        return back()->with('message', 'Computer Added Successfully');
    }

    public function manage()
    {
        $categories = Category::where('category_status', 1)->get();
        // $computers = computer::all();
        $computers = DB::table('computers')
            ->join('categories', 'computers.category_id', '=', 'categories.category_id')
            ->select('computers.*', 'categories.category_name')
            ->get();

        return view('BackEnd.computer.manage', compact('computers',  'categories'));
    }

    public function active($computer_id)
    {
        $computers = computer::find($computer_id);
        $computers->computer_status = 1;
        $computers->save();
        return back();
    }

    public function inactive($computer_id)
    {
        $computers = computer::find($computer_id);
        $computers->computer_status = 0;
        $computers->save();
        return back();
    }

    public function delete($computer_id)
    {
        $computers = computer::find($computer_id);
        $computers->delete();
        return back()->with('message', 'Computer Deleted Successfully');
    }

    public function update (Request $request)
    {
        $computers = computer::find($request->computer_id);
        $img_main = $request->file('computer_image');

        if ($img_main)
        { 
            $img_name = $img_main->getClientOriginalName();
            $directory = 'BackendSourceFile/computer_img/';
            $imgUrl = $directory.$img_name;
            $img_main->move($directory, $img_name);

            $old_img = $computers->computer_image;
            
            if (file_exists($old_img))
            {
                unlink($old_img);
            }

            $computers->computer_name = $request->computer_name;
            $computers->category_id = $request->category_id;
            $computers->computer_detail = $request->computer_detail;
            $computers->computer_image = $imgUrl;
            $computers->full = $request->full;
            $computers->full_price = $request->full_price;
        } 
        else
        {
            $computers->computer_name = $request->computer_name;
            $computers->category_id = $request->category_id;
            $computers->computer_detail = $request->computer_detail;
            $computers->full = $request->full;
            $computers->full_price = $request->full_price;
        }
        $computers->save();

        return redirect('/computer/manage')->with('message', 'Computer Updated Successfully');
    }

}