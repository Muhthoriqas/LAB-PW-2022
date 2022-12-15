<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function manage()
    {
        $users = User::all();
        return view('BackEnd.user.manageUser', compact('users'));
    }

    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();
        return back()->with('message', 'Category Deleted Successfully');
    }
}
