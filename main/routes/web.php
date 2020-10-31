<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Auth::routes();

Route::middleware ('auth') -> group (function (){

Route::get('/', [PlayerController::class, 'index'])->name('index');

Route::get('/players', [PlayerController::class, 'index']);
Route::get('/players/{player}', [PlayerController::class, 'show']);

Route::get('/players/{player}/', [PlayerController::class, 'show']);
Route::delete('/players/{player}/', [PlayerController::class, 'destroy']);

Route::get('/players', [PlayerController::class, 'create']);
Route::post('/players', [PlayerController::class, 'store']);

Route::get('/players/{player}/edit', [PlayerController::class, 'edit']);
Route::patch('/players/{player}/', [PlayerController::class, 'update']);



});


