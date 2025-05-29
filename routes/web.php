<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);
Route::get('/login', [MainController::class, 'register'])->name('register');
