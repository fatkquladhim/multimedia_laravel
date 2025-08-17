<?php

use Illuminate\Support\Facades\Route;

// auth
// register
Route::get('/register', [AuthController::class, 'showregister']);
Route::post('/register', [AuthController::class, 'registeruser']);

// login
Route::get('/', [AuthController::class, 'showlogin'])->name('login');
Route::post('/', [AuthController::class, 'login']);

// logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
