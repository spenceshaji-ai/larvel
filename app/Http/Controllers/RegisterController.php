<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }
    public function register(Request $request)
    {
         $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
         ]);
         $password = Hash::make($request->password);

        User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $password,
    ]);
    return redirect('/login')->with('success', 'Registration successful!');
    }
}
