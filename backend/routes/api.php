<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthCheckController;

Route::get('/health', [HealthCheckController::class, 'index']);

Route::post('/register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/forgot-password', [\App\Http\Controllers\PasswordResetController::class, 'sendResetLinkEmail']);
Route::post('/reset-password', [\App\Http\Controllers\PasswordResetController::class, 'reset']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', function (Request $request) {
        return response()->json([
            'success' => true,
            'message' => 'User fetched successfully.',
            'data' => $request->user(),
            'errors' => null,
        ]);
    });
    
    Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
    
    Route::post('/email/verification-notification', [\App\Http\Controllers\EmailVerificationController::class, 'resend'])
        ->name('verification.send');
    Route::get('/email/verify/{id}/{hash}', [\App\Http\Controllers\EmailVerificationController::class, 'verify'])
        ->name('verification.verify');
});
