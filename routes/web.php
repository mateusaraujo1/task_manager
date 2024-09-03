<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks/create', [TaskController::class, 'create'])->middleware('auth');

Route::post('/tasks/store', [TaskController::class, 'store'])->middleware('auth');

Route::get('/dashboard', [TaskController::class, 'dashboard'])->middleware('auth');
