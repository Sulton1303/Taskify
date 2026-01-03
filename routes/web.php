<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Route Login
Route::get('login', [AuthController::class, 'login'] )->name('login');
Route::post('login', [AuthController::class, 'loginProcess'] )->name('loginProcess');

// Route Logout
Route::get('logout', [AuthController::class, 'logout'] )->name('logout');

Route::middleware('checkLogin')->group(function(){
    // Route Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'] )->name('dashboard');

    // Route User
    Route::get('user', [UserController::class, 'index'] )->name('user');

    // Route Tugas
    Route::get('tugas', [TugasController::class, 'index'] )->name('tugas');
});