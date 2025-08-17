<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $user = auth()->user();
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