// Auth routes
Route::get('/login', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/register', [App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
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