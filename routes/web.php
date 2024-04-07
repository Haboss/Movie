<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::view('/', 'welcome');
Route::post('/', [UserController::class,'Register']);
//Belépés
Route::get('/login', [UserController::class, 'Login']);
Route::post('/login', [UserController::class,'LoginData']);
Route::get('/logout', [UserController::class, 'Logout']);

Route::get('/movie',[UserController::class, 'Movie']);
Route::post('/movie', [UserController::class,'MovieData']);

Route::get('/celebrity',[UserController::class, 'Celebrity']);
Route::post('/celebrity', [UserController::class,'CelebrityData']);
