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
