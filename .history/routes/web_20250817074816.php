<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('login', [App\Http\Controllers\AuthController::class, 'auth.login'])->name('login');
Route::post('login', [App\Http\Controllers\AuthController::class, 'auth.login']);
Route::get('register', [App\Http\Controllers\AuthController::class, 'auth.register'])->name('register');
Route::post('register', [App\Http\Controllers\AuthController::class, 'auth.register']);
Route::post('logout', [App\Http\Controllers\AuthController::class, 'auth.logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();
        if ($user && $user->role === 'admin') {
            return view('dashboard.admin');
        } else {
            return view('dashboard.user');
        }
    })->name('dashboard');

    Route::resource('alat', App\Http\Controllers\AlatController::class);
    Route::resource('anggota', App\Http\Controllers\AnggotaController::class);
    Route::resource('izin-malam', App\Http\Controllers\IzinMalamController::class);
    Route::resource('izin-nugas', App\Http\Controllers\IzinNugasController::class);
    Route::resource('keuangan', App\Http\Controllers\KeuanganController::class);
    Route::resource('legalisasi-laptop', App\Http\Controllers\LegalisasiLaptopController::class);
    Route::resource('peminjaman-barang', App\Http\Controllers\PeminjamanBarangController::class);
    Route::resource('penyewaan-barang', App\Http\Controllers\PenyewaanBarangController::class);
    Route::resource('profile', App\Http\Controllers\ProfileController::class);
    Route::resource('tugas', App\Http\Controllers\TugasController::class);
    Route::resource('tugas-jawaban', App\Http\Controllers\TugasJawabanController::class);
    Route::resource('users', App\Http\Controllers\UserController::class)->middleware('admin');
});