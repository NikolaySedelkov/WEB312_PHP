<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavigationController;
use App\Http\Controllers\PageSchool;
use App\Http\Controllers\NodeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/events', [NavigationController::class, 'events']);
Route::get('/school', [NavigationController::class, 'school']);
//Route::get('/school', [PageSchool::class, 'index']);

Route::get('/model/notes', [NodeController::class, 'view']);
Route::get('/model/notes/create', [NodeController::class, 'create']);
Route::get('/model/notes/api/create', [NodeController::class, 'insert']);
Route::get('/model/notes/api/delete', [NodeController::class, 'delete']);

