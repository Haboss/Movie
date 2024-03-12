<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::view('/', 'welcome');
//Belépés
Route::get('/login', [UserController::class, 'Login']);
Route::post('/login', [UserController::class,'LoginData']);
