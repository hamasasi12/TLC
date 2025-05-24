<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::post('/asesi/payments/notification', [PaymentController::class, 'notification'])->name('payments.notification');
Route::post('/asesi/payments/notification', [PaymentController::class, 'notification'])
    ->middleware('api')
    ->name('payments.notification');


