<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Mengimpor kelas yang benar
use Illuminate\Notifications\Notifiable; // Mengimpor trait Notifiable
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable // Ganti Model dengan Authenticatable
{
    use HasFactory, Notifiable; // Gunakan trait Notifiable

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password', // Sembunyikan password dalam respons
        'remember_token',
    ];

    // Jika ada metode lain, tambahkan di sini
}
