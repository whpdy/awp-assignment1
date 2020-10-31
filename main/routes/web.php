<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::middleware ('auth') -> group (function (){

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Retrieve
Route::get('/players', [PlayerController::class, 'index']);
Route::get('/players/{player}', [PlayerController::class, 'show']);

// Delete
Route::get('/players/{player}/', [PlayerController::class, 'show']);
Route::delete('/players/{player}/', [PlayerController::class, 'destroy']);

// Create
Route::get('/players', [PlayerController::class, 'create']);
Route::post('/players', [PlayerController::class, 'store']);

// Update
Route::get('/players/{player}/edit', [PlayerController::class, 'edit']);
Route::patch('/players/{player}/', [PlayerController::class, 'update']);



});


