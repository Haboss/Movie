<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class,'Welcome']);
// Belépés
Route::get('/login', [UserController::class, 'Login']);
Route::post('/login', [UserController::class,'LoginData']);
Route::get('/logout', [UserController::class, 'Logout']);
// Regisztráció
Route::post('/', [UserController::class,'Register']);
// Profil
Route::get('/profil',[UserController::class, 'Profil']);
// Profil módosítása
Route::get('/profilmodositas',[UserController::class, 'Mod']);
Route::post('/profilmodositas',[UserController::class, 'ProfilMod']);
// Filmek
Route::get('/movie',[UserController::class, 'Category']);
Route::post('/movie', [UserController::class,'MovieData']);
Route::get('/movie/{id}', [UserController::class,'MovieId']);
Route::get('/category/{id}',[UserController::class, 'CategoryId']);
// Színészek
Route::get('/actor',[UserController::class, 'Actor']);
Route::post('/actor', [UserController::class,'ActorData']);
// Kategória
Route::get('/category',[UserController::class, 'Categ']);
Route::post('/category', [UserController::class,'CategData']);
