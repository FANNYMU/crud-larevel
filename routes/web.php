<?php

use App\Http\Controllers\AddUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Rute yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {
    Route::post('/users/add', [AddUserController::class, 'addUser'])->name('users.storeUser');
    Route::get('/', [UserController::class, 'index'])->name('dashboard');
    Route::get('/users/add', [AddUserController::class, 'index'])->name('users.addUser');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Rute untuk registrasi
Route::get('/register', [RegisterController::class, 'index'])->name('users.register');
Route::post('/register', [RegisterController::class, 'register'])->name('users.Addregister');

// Rute untuk login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
