<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phone', [PhoneController::class, 'view']);
Route::get('/admin', [AdminController::class, 'login']);
Route::get('/admin/login', [AdminController::class, 'auth']);