<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\IndoRegionController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Admin\LevelAController;
use App\Http\Controllers\Admin\LevelBController;
use App\Http\Controllers\Admin\LevelCController;
use App\Http\Controllers\Asesi\ProfileController;
use App\Http\Controllers\Asesi\SertifikasiController;
use App\Http\Controllers\Asesi\TransactionController;
use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\Admin\LevelSettingsController;
use App\Http\Controllers\Admin\PaymentDetailController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Asesi\AsesiDashboardController;
use App\Http\Controllers\Asesor\AsesorDashboardController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;

Route::get('register2', function () {
    return view('register2');
})->name('register2');

// GUEST
Route::middleware('guest')->group(function () {
    // Route::get('/', fn() => view('welcome'));
    Route::get('/', [WelcomeController::class, 'index'])->name('home');
    Route::get('/newsDetail/{slug}', [WelcomeController::class, 'show'])->name('newsDetail');

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.post');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerProcess'])->name('register.post');

    Route::get('/forgot-password', [ForgotPasswordController::class, 'create'])->name('forgot.password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'store'])->name('forgot.password.store');

    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'view'])->name('forgot.password.reset');
    Route::post('/reset-password', [ForgotPasswordController::class, 'view'])->name('forgot.password.reset');

    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'view'])->name('password.reset');
    Route::post('/reset-password', [ForgotPasswordController::class, 'update'])->name('forgot.password.reset.update');
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

Route::middleware(['auth'])->prefix('asesi')->group(function () {
    // Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
    // Route::get('/payments/finish', [PaymentController::class, 'finish'])->name('payments.finish'); // Pindahkan ke atas
    // Route::get('/payments/{id}/create', [PaymentController::class, 'create'])->name('payments.create');
    // Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store');
    // Route::get('/payments/{id}', [PaymentController::class, 'detail'])->name('payments.detail'); // Pindahkan ke bawah
    // Route::get('/payments/{id}/checkout', [PaymentController::class, 'checkout'])->name('payments.checkout');
    // Route::get('/profile', [ProfileController::class, 'index'])->name('asesi.profile');
    // Route::put('/profile/update', [ProfileController::class, 'update'])->name('asesi.profile.update');
    // Route::post('/profile/upload-photo', [ProfileController::class, 'uploadPhoto'])->name('asesi.profile.upload');
    // Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('asesi.password.change');
    // Route::get('/api/cities/{provinceId}', [ProfileController::class, 'getCities'])->name('asesi.api.cities');
    // Route::get('/api/districts/{cityId}', [ProfileController::class, 'getDistricts'])->name('asesi.api.districts');
    // Route::get('/api/villages/{districtId}', [ProfileController::class, 'getVillages'])->name('asesi.api.villages');

    Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
    Route::get('/payments/finish', [PaymentController::class, 'finish'])->name('payments.finish'); // Harus di atas sebelum {id}
    Route::get('/payments/{id}/create', [PaymentController::class, 'create'])->name('payments.create');
    Route::post('/payments', [PaymentController::class, 'store'])->name('payments.store'); // ✅ SUDAH BENAR
    Route::get('/payments/{id}/checkout', [PaymentController::class, 'checkout'])->name('payments.checkout'); // ✅ SUDAH BENAR
    Route::get('/payments/{id}', [PaymentController::class, 'detail'])->name('payments.detail'); // Harus di bawah semua route spesifik
    
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'index'])->name('asesi.profile');
    Route::put('/profile/update', [ProfileController::class, 'update'])->name('asesi.profile.update'); // ✅ SUDAH BENAR
    Route::post('/profile/upload-photo', [ProfileController::class, 'uploadPhoto'])->name('asesi.profile.upload');
    Route::post('/profile/change-password', [ProfileController::class, 'changePassword'])->name('asesi.password.change');
    
    // API routes untuk location cascade
    Route::get('/api/cities/{provinceId}', [ProfileController::class, 'getCities'])->name('asesi.api.cities');
    Route::get('/api/districts/{cityId}', [ProfileController::class, 'getDistricts'])->name('asesi.api.districts');
    Route::get('/api/villages/{districtId}', [ProfileController::class, 'getVillages'])->name('asesi.api.villages');

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

    Route::get('/dashboard/level', [AdminDashboardController::class, 'level'])->name('admin.level.index');
    Route::get('/dashboard/level/create', [AdminDashboardController::class, 'levelCreate'])->name('admin.level.create');
    Route::post('/dashboard/level/store', [AdminDashboardController::class, 'levelStore'])->name('admin.level.store');
    Route::delete('/dashboard/level/delete/{id}', [AdminDashboardController::class, 'levelDestroy'])->name('admin.level.destroy');
    Route::get('/dashboard/level/{id}/edit', [AdminDashboardController::class, 'levelEdit'])->name('admin.level.edit');
    Route::put('/dashboard/level/{id}', [AdminDashboardController::class, 'levelUpdate'])->name('admin.level.update');

    Route::get('/dashboard/categories', [AdminDashboardController::class, 'categories'])->name('admin.categories.index');
    Route::get('/dashboard/categories/create', [AdminDashboardController::class, 'categoriesCreate'])->name('admin.categories.create');
    Route::post('/dashboard/categories/store', [AdminDashboardController::class, 'categoriesStore'])->name('admin.categories.store');
    Route::delete('/dashboard/categories/delete/{id}', [AdminDashboardController::class, 'categoriesDestroy'])->name('admin.categories.destroy');
    Route::get('/dashboard/categories/{id}/edit', [AdminDashboardController::class, 'categoriesEdit'])->name('admin.categories.edit');
    Route::put('/dashboard/categories/{id}', [AdminDashboardController::class, 'categoriesUpdate'])->name('admin.categories.update');

    Route::get('/dashboard/questions', [AdminDashboardController::class, 'questions'])->name('admin.questions.index');
    Route::get('/dashboard/questions/create', [AdminDashboardController::class, 'questionsCreate'])->name('admin.questions.create');
    Route::post('/dashboard/questions/store', [AdminDashboardController::class, 'questionsStore'])->name('admin.questions.store');
    Route::delete('/dashboard/questions/delete/{id}', [AdminDashboardController::class, 'questionsDestroy'])->name('admin.questions.destroy');
    Route::get('/dashboard/questions/{id}/edit', [AdminDashboardController::class, 'questionsEdit'])->name('admin.questions.edit');
    Route::put('/dashboard/questions/{id}', [AdminDashboardController::class, 'questionsUpdate'])->name('admin.questions.update');

    // Route Level A
    Route::get('/dashboard/level/a', [LevelAController::class, 'index'])->name('admin.level.a.index');
    Route::get('/dashboard/level/a/category', [LevelAController::class, 'categoriesIndex'])->name('admin.categories.a.index');
    Route::get('/dashboard/level/a/category/{id}/edit', [LevelAController::class, 'categoriesEdit'])->name('admin.categories.a.edit');
    Route::get('/dashboard/level/a/category/show/{id}', [LevelAController::class, 'categoriesShow'])->name('admin.categories.a.show');
    Route::put('/dashboard/level/a/category/update/{id}', [LevelAController::class, 'categoriesUpdate'])->name('admin.categories.a.update');

    Route::get('/dashboard/level/a/question', [LevelAController::class, 'bankSoalIndex'])->name('admin.question.a.index');
    Route::get('/dashboard/level/a/question/create', [LevelAController::class, 'bankSoalCreate'])->name('admin.question.a.create');
    Route::get('/dashboard/level/a/question/{id}/show', [LevelAController::class, 'bankSoalShow'])->name('admin.question.a.show');
    Route::post('/dashboard/level/a/question/store', [LevelAController::class, 'bankSoalStore'])->name('admin.question.a.store');
    Route::get('/dashboard/level/a/question/{id}/edit', [LevelAController::class, 'bankSoalEdit'])->name('admin.question.a.edit');
    Route::put('/dashboard/level/a/question/{id}/update', [LevelAController::class, 'bankSoalUpdate'])->name('admin.question.a.update');
    Route::delete('/dashboard/level/a/question/{id}/delete', [LevelAController::class, 'bankSoalDestroy'])->name('admin.question.a.destroy');

    // Route Level B
    Route::get('/dashboard/level/b', [LevelBController::class, 'index'])->name('admin.level.b.index');

    // Route Level C
    Route::get('/dashboard/level/c', [LevelCController::class, 'index'])->name('admin.level.c.index');

    // Route Level Settings
    Route::get('/dashboard/level/settings/index', [LevelSettingsController::class, 'index'])->name('admin.level.settings.index');


    Route::get('/dashboard/news', [NewsController::class, 'index'])->name('admin.news.index');
    Route::get('/dashboard/news/create', [NewsController::class, 'create'])->name('admin.news.create');
    Route::get('/dashboard/news/edit/{id}', [NewsController::class, 'edit'])->name('admin.news.edit');
    Route::post('/dashboard/news/store', [NewsController::class, 'store'])->name('admin.news.store');
    Route::get('/dashboard/news/{id}', [NewsController::class, 'show'])->name('admin.news.show');
    Route::put('/dashboard/news/update/{id}', [NewsController::class, 'update'])->name('admin.news.update');
    Route::delete('/dashboard/news/delete/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');


    Route::get('/payments', [PaymentDetailController::class, 'index'])->name('admin.payments.index');
    Route::get('/payments/{id}', [PaymentDetailController::class, 'show'])->name('admin.payments.show');
    Route::get('/payments-export', [PaymentDetailController::class, 'export'])->name('admin.payments.export');
    Route::delete('/payments/{id}', [PaymentDetailController::class, 'destroy'])->name('admin.payments.destroy');
    Route::patch('/payments/{id}/status', [PaymentDetailController::class, 'updateStatus'])->name('admin.payments.updateStatus');

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

require __DIR__.'/auth.php';

