<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;



Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
    Route::get('/loginn', [AuthController::class, 'index'])->name('auth.index');
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
})->name('transaksi');

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
