<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facade\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request) {
        
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(\Illuminate\Support\Facades\Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        
        return back()->with('loginError', 'Login Failed');
    }

    public function logout(Request $request) {
        
        \Illuminate\Support\Facades\Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
