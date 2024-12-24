<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User; // Pastikan Anda mengimpor model User
use Illuminate\Support\Facades\Hash; // Untuk hashing password
use Illuminate\Support\Facades\Validator; // Untuk validasi

class AuthController extends Controller
{
    public function showSignInForm()
    {
        return view('signin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/profile');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/signin');
    }

    public function showRegisterForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Buat pengguna baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash password
        ]);

        // Setelah pendaftaran, login pengguna
        Auth::attempt($request->only('email', 'password'));

        return redirect()->intended('/profile');
    }
}