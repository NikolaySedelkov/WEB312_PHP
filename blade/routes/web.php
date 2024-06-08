<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\PageSchool;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/events', [NavigationController::class, 'events']);
Route::get('/school', [NavigationController::class, 'school']);
//Route::get('/school', [PageSchool::class, 'index']);


