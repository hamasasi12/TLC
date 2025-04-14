<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Asesi\AsesiDashboardController;
use App\Http\Controllers\Asesor\AsesorDashboardController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;



// GUEST
Route::middleware('guest')->group(function () {
    Route::get('/', fn() => view('welcome'));
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.post');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.post');
});

// AUTH ASESI
Route::middleware(['auth','role:asesi'])->prefix('asesi')->group(function () {
    Route::get('/dashboard', [AsesiDashboardController::class, 'index'])->name('asesi.dashboard');
});

// AUTH ADMIN
Route::middleware(['auth','role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

// AUTH ASESOR
Route::middleware(['auth','role:asesor'])->prefix('asesor')->group(function () {
    Route::get('/dashboard', [AsesorDashboardController::class, 'index'])->name('asesor.dashboard');
});