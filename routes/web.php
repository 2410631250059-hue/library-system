<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route Guest (Belum Login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
});

// Route Auth (Sudah Login)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Fitur yang BISA diakses oleh Admin & Petugas
    Route::resource('books', BookController::class);

    // Fitur Khusus ADMIN (Menggunakan Middleware Role / Gate)
    Route::middleware('role:admin')->group(function () {
        // Contoh jika ada UserController untuk kelola akun pengguna
        // Route::resource('users', UserController::class); 
    });
});