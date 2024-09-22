<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AddUserController extends Controller
{
    public function index()
    {
        return view('users.add'); // Menampilkan formulir untuk menambah pengguna
    }

    public function addUser(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Membuat pengguna baru
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
        ]);

        // Mengalihkan ke halaman sebelumnya dengan pesan sukses
        return redirect()->back()->with('success', 'User created successfully');
    }
}
