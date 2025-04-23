<?php

use App\Http\Controllers\Asesi\SertifikasiController;
use App\Http\Controllers\Asesi\TransactionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Asesi\AsesiDashboardController;
use App\Http\Controllers\Asesor\AsesorDashboardController;

Route::get('register2', function () {
    return view('register2');
})->name('register2');


// GUEST
Route::middleware('guest')->group(function () {
    Route::get('/', fn() => view('welcome'));

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.post');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.post');
});

// GOOGLE SSO LOGIN/REGISTER
Route::get('/auth/google/redirect', [GoogleController::class, 'redirectToGoogle'])->name('google.redirect'); //ROUTE LOGIN SSO
Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']); //ROUTE CALLBACK SSO
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth'); //ROUTE LOGOUT


// AUTH ASESI
Route::middleware(['auth', 'role:asesi'])->prefix('asesi')->group(function () {
    Route::get('/dashboard', [AsesiDashboardController::class, 'index'])->name('asesi.dashboard');
    Route::get('/sertifikasi', [SertifikasiController::class, 'index'])->name('asesi.sertifikasi');
    Route::get('/transaksi', [TransactionController::class, 'index'])->name('asesi.transaksi');
});

// AUTH ADMIN
Route::middleware(['auth','role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

// AUTH ASESOR
Route::middleware(['auth','role:asesor'])->prefix('asesor')->group(function () {
    Route::get('/dashboard', [AsesorDashboardController::class, 'index'])->name('asesor.dashboard');
});

// Auth
Route::get('/login', function () {
    return view('auth.loginPage');
})->name('login');

Route::get('/user-dashboard', function () {
    return view('user.userDashboard.index');
})->name('userDashboard');

Route::get('/sertifikasi', function () {
    return view('user.sertifikasi.index');
})->name('userSertifikasi');

// userDashboard
Route::get('/index', function () {
    return view('userDashboard.index');
})->name('index');

Route::get('/sertifikasi', function () {
    return view('userDashboard.sertifikasi');
})->name('sertifikasi');

Route::get('/transaksi', function () {
    return view('userDashboard.transaksi');
})->name('transaksi'    );

// admin dan asesor
Route::get('/admin', function () {
    return view('admin.admin');
})->name('admin');

Route::get('/asesor', function () {
    return view('admin.asesor');
})->name('asesor');





Route::get('/real', function () {
    return view('real');
})->name('real');

Route::get('/iseng', function () {
    return view('iseng');
})->name('iseng');
