<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('dashboard.admin');
});
