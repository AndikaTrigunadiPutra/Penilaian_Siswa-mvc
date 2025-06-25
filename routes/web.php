<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NilaiSiswaController;
use App\Http\Controllers\SiswaController;

// Default Auth (login, logout, register, dll)
Auth::routes();

// Halaman root → redirect ke login
Route::get('/', function () {
    return redirect()->route('login');
});

//register multiuser

Route::get('/register/siswa', [RegisterController::class, 'showSiswaForm'])->name('register.siswa');
Route::post('/register/siswa', [RegisterController::class, 'registerSiswa']);

Route::get('/register/guru', [RegisterController::class, 'showGuruForm'])->name('register.guru');
Route::post('/register/guru', [RegisterController::class, 'registerGuru']);

//login dashboard

// Default redirect setelah login
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Group middleware auth
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard-siswa', [DashboardController::class, 'siswa'])->middleware('role:siswa')->name('dashboard.siswa');
    Route::get('/dashboard-guru', [DashboardController::class, 'guru'])->middleware('role:guru')->name('dashboard.guru');

//tampilan nilai siswa
Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/nilai-siswa', [NilaiSiswaController::class, 'index'])->name('nilai.siswa');

//tampilan profile siswa

Route::middleware(['auth', 'role:siswa'])->group(function () {
    Route::get('/profil-siswa', [SiswaController::class, 'profil'])->name('profil.siswa');
});

});

});
