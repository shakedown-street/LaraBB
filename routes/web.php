<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
})
    ->name('index');

Route::get('/auth/register', [AuthController::class, 'register'])
    ->name('auth.register');

Route::post('/auth/register', [AuthController::class, 'register'])
    ->name('auth.register');

Route::get('/auth/login', [AuthController::class, 'login'])
    ->name('auth.login');

Route::post('/auth/login', [AuthController::class, 'login'])
    ->name('auth.login');

Route::post('/auth/logout', [AuthController::class, 'logout'])
    ->name('auth.logout');
