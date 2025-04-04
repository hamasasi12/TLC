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

// Route::get('/login', function () {
//     return view('auth.loginPage');
// })->name('login');

