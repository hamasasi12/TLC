<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.loginPage');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

