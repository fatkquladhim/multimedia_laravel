<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard.admin');
});
Route::get('/anggota', function () {
    return view('anggota.tampil');
});
Route::get('/laptop', function () {
    return view('laptop.tampil');
});
Route::get('/alat', function () {
    return view('alat.tampil');
});
Route::get('/akses', function () {
    return view('akses.tampil');
});
Route::get('/peminjaman', function () {
    return view('peminjaman.tampil');
});
Route::get('/penyewaan', function () {
    return view('penyewaan.tampil');
});
Route::get('/tugas', function () {
    return view('tugas.tampil');
});
Route::get('/izin_malam', function () {
    return view('izin_malam.tampil');
});
Route::get('/izin_nugas', function () {
    return view('izin_nugas.tampil');
});
Route::get('/keuangan', function () {
    return view('keuangan.tampil');
});
Route::get('/akun', function () {
    return view('akun.tampil');
});