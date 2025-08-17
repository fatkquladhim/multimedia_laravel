<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('register', [App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $user = Auth::user();
        if ($user && $user->role === 'admin') {
            return redirect()->route('dashboard.admin');
        } else {
            return redirect()->route('dashboard.user');
        }
    })->name('dashboard');

    Route::get('/dashboard/admin', function () {
        return view('dashboard.admin');
    })->name('dashboard.admin');

    Route::get('/dashboard/user', function () {
        return view('dashboard.user');
    })->name('dashboard.user');

    Route::resource('alat', App\Http\Controllers\AlatController::class);
    Route::resource('anggota', App\Http\Controllers\AnggotaController::class);
    Route::resource('izin-malam', App\Http\Controllers\IzinMalamController::class);
    Route::resource('izin-nugas', App\Http\Controllers\IzinNugasController::class);
    Route::resource('keuangan', App\Http\Controllers\KeuanganController::class);
    Route::resource('legalisasi-laptop', App\Http\Controllers\LegalisasiLaptopController::class);
    Route::resource('peminjaman-barang', App\Http\Controllers\PeminjamanBarangController::class);
    Route::resource('penyewaan-barang', App\Http\Controllers\PenyewaanBarangController::class);
    Route::resource('profile', App\Http\Controllers\ProfileController::class);
    Route::resource('portfolio', App\Http\Controllers\PortfolioController::class);
    Route::resource('tugas', App\Http\Controllers\TugasController::class);
    Route::resource('tugas-jawaban', App\Http\Controllers\TugasJawabanController::class);
    Route::resource('users', App\Http\Controllers\UserController::class)->middleware('admin');
});