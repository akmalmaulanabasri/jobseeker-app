<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function auth(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        
        if (Auth::attempt($user)) {
            $request->session()->regenerate();
            
            return redirect()->name('dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->name('login');
    }

    public function profile()
    {
        return view('auth.profile');
    }
}
