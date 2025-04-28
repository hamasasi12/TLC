<?php

use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\Asesi\SertifikasiController;
use App\Http\Controllers\Asesi\TransactionController;
use App\Http\Controllers\IndoRegionController;
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
Route::middleware(['auth', 'role:asesi', 'last_seen'])->prefix('asesi')->group(function () {
    Route::get('/dashboard', [AsesiDashboardController::class, 'index'])->name('asesi.dashboard');
    Route::get('/sertifikasi', [SertifikasiController::class, 'index'])->name('asesi.sertifikasi');
    Route::get('/transaksi', [TransactionController::class, 'index'])->name('asesi.transaksi');
    Route::get('/register/2', [AuthController::class, 'registerStepTwo'])->name('asesi.registerStepTwo');
    Route::get('/registeraddtional', [AuthController::class, 'registeraddtional'])->name('registeraddtional');
    Route::post('/registeraddtional', [AuthController::class, 'registeraddtionalpost'])->name('registeraddtionalpost');
});

// AUTH ADMIN
Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/dashboard/asesi', [AdminDashboardController::class, 'asesiIndex'])->name('admin.asesi.index');
    Route::get('/dashboard/asesi/create', [AdminDashboardController::class, 'asesiCreate'])->name('admin.asesi.create');
    Route::get('/dashboard/asesi/edit/{id}', [AdminDashboardController::class, 'asesiEdit'])->name('admin.asesi.edit');
    Route::post('/dashboard/asesi/store', [AdminDashboardController::class, 'asesiStore'])->name('admin.asesi.store');
    Route::get('/dashboard/asesi/{id}', [AdminDashboardController::class, 'asesiShow'])->name('admin.asesi.show');
    Route::put('/dashboard/asesi/update/{id}', [AdminDashboardController::class, 'asesiUpdate'])->name('admin.asesi.update');
    Route::delete('/dashboard/asesi/delete/{id}', [AdminDashboardController::class, 'asesiDestroy'])->name('admin.asesi.destroy');

    Route::get('/dashboard/asesor', [AdminDashboardController::class, 'asesorIndex'])->name('admin.asesor.index');
    Route::get('/dashboard/asesor/create', [AdminDashboardController::class, 'asesorCreate'])->name('admin.asesor.create');
    Route::post('/dashboard/asesor/store', [AdminDashboardController::class, 'asesorStore'])->name('admin.asesor.store');
    Route::delete('/dashboard/asesor/delete/{id}', [AdminDashboardController::class, 'asesorDestroy'])->name('admin.asesor.destroy');
    Route::get('/dashboard/asesor/{id}', [AdminDashboardController::class, 'asesorShow'])->name('admin.asesor.show');
    Route::get('/dashboard/asesor/{id}/edit', [AdminDashboardController::class, 'asesorEdit'])->name('admin.asesor.edit');
    Route::put('/dashboard/asesor/{id}', [AdminDashboardController::class, 'asesorUpdate'])->name('admin.asesor.update');

    Route::get('/dashboard/admins', [AdminDashboardController::class, 'adminsIndex'])->name('admin.admins.index');
    Route::get('/dashboard/admins/create', [AdminDashboardController::class, 'adminsCreate'])->name('admin.admins.create');
    Route::post('/dashboard/admins/store', [AdminDashboardController::class, 'adminsStore'])->name('admin.admins.store');
    Route::delete('/dashboard/admins/delete/{id}', [AdminDashboardController::class, 'adminsDestroy'])->name('admin.admins.destroy');
    Route::get('/dashboard/admins/{id}', [AdminDashboardController::class, 'adminsShow'])->name('admin.admins.show');
    Route::get('/dashboard/admins/{id}/edit', [AdminDashboardController::class, 'adminsEdit'])->name('admin.admins.edit');
    Route::put('/dashboard/admins/{id}', [AdminDashboardController::class, 'adminsUpdate'])->name('admin.admins.update');

    Route::get('/profile', [AdminSettingsController::class, 'edit'])->name('admin.settings.edit');
    Route::patch('/profile', [AdminSettingsController::class, 'update'])->name('admin.settings.update');
    Route::delete('/profile', [AdminSettingsController::class, 'destroy'])->name('admin.settings.destroy');
    Route::put('profile', [AdminSettingsController::class, 'updatePassword'])->name('admin.password.update');
});

// AUTH ASESOR
Route::middleware(['auth', 'role:asesor'])->prefix('asesor')->group(function () {
    Route::get('/dashboard', [AsesorDashboardController::class, 'index'])->name('asesor.dashboard');
});

// INDOREGION
Route::get('/regencies/{provinceId}', [IndoRegionController::class, 'getRegencies']);
Route::get('/districts/{regencyId}', [IndoRegionController::class, 'getDistricts']);
Route::get('/villages/{districtId}', [IndoRegionController::class, 'getVillages']);

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
