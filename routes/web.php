<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route Dashboard
Route::get('dashboard', [DashboardController::class, 'index'] )->name('dashboard');

// Route Login
Route::get('login', [AuthController::class, 'login'] )->name('login');

// Route User
Route::get('user', [UserController::class, 'index'] )->name('user');

// Route Tugas
Route::get('tugas', [TugasController::class, 'index'] )->name('tugas');