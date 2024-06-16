<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ], [
            'email.exists' => 'email not found',
            'email.required' => 'email not be empty',
            'password.required' => 'password not be empty',
        ]);

        $user = $request->only('email', 'password');

        if (Auth::attempt($user)) {
            return redirect('dashboard')->with('toast_success', 'Andap Berhasil Login');
        }

        return redirect('login')->with('toast_error', 'Anda Gagal Login');
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('auth.profile.edit', compact('user'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('auth.profile.profile', compact('user'));
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
            'role' => 'required|string',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->description = $request->description;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();

        return redirect()->route('login');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'password' => 'required|string',
            'profile_picture' => 'nullable|image|file|max:1024',
            'description' => 'nullable|string',
        ]);

        $user = Auth::user();

        if ($request->hasFile('profile_picture')) {
            $photo = $request->file('profile_picture');
            $photo_name = time() . $photo->getClientOriginalName();
            $photo->move(public_path('/storage/image/'), $photo_name);

            $user->profile_picture = $photo_name;
            $user->save();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = $request->password;
        $user->description = $request->description;
        $user->save();

        return redirect()->route('profile');
    }
}
