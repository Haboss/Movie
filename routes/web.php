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

Route::get('/actor',[UserController::class, 'Actor']);
Route::post('/actor', [UserController::class,'ActorData']);

Route::get('/category',[UserController::class, 'Categ']);
Route::post('/category', [UserController::class,'CategData']);

Route::get('/profil',[UserController::class, 'Profil']);

Route::get('/profilmodositas',[UserController::class, 'Mod']);
Route::post('/profilmodositas',[UserController::class, 'ProfilMod']);
