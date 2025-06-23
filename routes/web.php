<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;

// Default login/logout/register
Auth::routes();

// Halaman root → redirect ke login
Route::get('/', function () {
    return redirect()->route('login');
});

// Custom Register (Siswa & Guru)

// Form register siswa
Route::get('/register/siswa', [RegisterController::class, 'showSiswaForm'])->name('register.siswa');
Route::post('/register/siswa', [RegisterController::class, 'registerSiswa']);

// Form register guru
Route::get('/register/guru', [RegisterController::class, 'showGuruForm'])->name('register.guru');
Route::post('/register/guru', [RegisterController::class, 'registerGuru']);

//Setelah Login (Redirect ke Dashboard)
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); // opsional

// Dashboard Siswa
Route::middleware(['auth', 'role:siswa'])->get('/dashboard-siswa', [DashboardController::class, 'siswa'])->name('dashboard.siswa');

// Dashboard Guru
Route::middleware(['auth', 'role:guru'])->get('/dashboard-guru', [DashboardController::class, 'guru'])->name('dashboard.guru');
