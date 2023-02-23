<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UsersController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth');

Route::middleware('auth')->group(function() {
    Route::inertia('/', 'Home');
    Route::inertia('/settings', 'Settings');

    Route::get('/users', [UsersController::class, 'index']);
    Route::get('/users/create', [UsersController::class, 'create'])->can('create', User::class);
    Route::get('/users/{user}/edit', [UsersController::class, 'edit']);
    Route::post('/users', [UsersController::class, 'store']);
    Route::patch('/users/{user}', [UsersController::class, 'update']);
});
