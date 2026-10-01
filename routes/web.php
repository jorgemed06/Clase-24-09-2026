<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\PersonaController;
use App\Http\Controllers\InteresController;
use App\Http\Controllers\UserController;

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    Route::resource('personas', PersonaController::class);
    Route::resource('intereses', InteresController::class);
    Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
});