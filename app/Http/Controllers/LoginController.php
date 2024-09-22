<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('users.login'); // Mengembalikan tampilan halaman login
    }

    public function login(Request $request)
    {
        // Validasi input email dan password
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
    
        // Ambil kredensial dari input
        $credentials = $request->only('email', 'password');
    
        // Coba login dengan kredensial yang diberikan
        if (Auth::attempt($credentials)) {
            // Jika berhasil, redirect ke halaman yang diinginkan
            return redirect()->intended('/')->with('success', 'You are logged in!');
        }
    
        // Jika gagal, kembali ke halaman login dengan error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }
    

    public function logout(Request $request)
    {
        Auth::logout(); // Logout pengguna
        $request->session()->invalidate(); // Invalidate session
        $request->session()->regenerateToken(); // Regenerasi CSRF token

        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
