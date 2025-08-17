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
Route::get('/akses', function () {
    return view('akses.tampil');
});
Route::get('/akses', function () {
    return view('akses.tampil');
});