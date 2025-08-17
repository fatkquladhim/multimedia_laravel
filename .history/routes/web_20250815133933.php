<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});
// auth
// register
Route::get('/register', [AuthController::class, 'showregister'])->name('register');
Route::post('/register', [AuthController::class, 'registeruser'])->name('register.post');

// login
Route::get('/login', [AuthController::class, 'showlogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


// dashboard admin
Route::get('/admin/dashboard', function() {
    return view('dashboard.admin');
})->name('dashboard.admin')->middleware('auth');

// logout
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
