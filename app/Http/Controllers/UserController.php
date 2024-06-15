<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDO;

class UserController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register($role)
    {
        if ($role !== 'recruiter' && $role !== 'user') {
            return redirect()->route('landing');
        }

        return view('auth.register', [
            'role' => $role
        ]);
    }

    public function auth(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


        if (Auth::attempt($user)) {
            if(Auth::attempt($user)){
                if(Auth::user()->role == 'user'){
                    return redirect()->route('dashboard')->with('successLogin', 'Anda berhasil login!!!');
                } else if (Auth::user()->role == 'recruiter'){
                    return redirect()->route('dashboard');
                }
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function profile()
    {
        return view('auth.profile');
    }

    public function authRegister(Request $request, $role)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string',
            'address' => 'required|string',
            'password' => 'required|string',
            'description' => 'nullable|string',
        ]);

        if ($role !== 'recruiter' && $role !== 'user') {
            return redirect()->back();
        }

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'description' => $request->description,
            'password' => bcrypt($request->password),
            'role' => $role,
        ]);

        return redirect()->route('login');
    }

    public function authUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string',
            'address' => 'required|string',
            'password' => 'required|string',
            'description' => 'nullable|string',
            // 'role' => 'required|string',
        ]);

        // dd($request->all());

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'description' => $request->description,
            'password' => bcrypt($request->password),
            'role' => 'user',
        ]);

        return redirect()->route('login');
    }
}
