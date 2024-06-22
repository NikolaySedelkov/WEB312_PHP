<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\AdminController;
use App\Models\Phone;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/phone', [PhoneController::class, 'view']);
Route::post('/phone/save', [PhoneController::class, 'save']);
Route::get('/admin', [AdminController::class, 'login']);
Route::get('/admin/login', [AdminController::class, 'auth']);
Route::get('/admin/panel', [AdminController::class, 'panel']);

Route::get('/admin/panel/delete', [PhoneController::class, 'delete']);
Route::get('/admin/panel/update', [PhoneController::class, 'update']);
Route::get('/admin/panel/insert', [PhoneController::class, 'insert']);