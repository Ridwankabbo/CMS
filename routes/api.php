<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\userInfoController;
use App\Http\Controllers\userSanctunAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::post('/register', [userSanctunAuthController::class, 'register']);
Route::post('/verify-otp', [userSanctunAuthController::class, 'verifyOtp']);
Route::post('/singin', [userSanctunAuthController::class, 'singin']);
Route::post('/forgot-password', [userSanctunAuthController::class, 'forgotPassword']);
Route::post('/reset-password', [userSanctunAuthController::class, 'resetPassword']);

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/dashboard', [UserDashboardController::class, 'show']);
    Route::post('/dashboard', [UserDashboardController::class, 'create']);

    Route::post('/logout', [userSanctunAuthController::class, 'logout']);
});

Route::middleware('admin')->group(function(){
    
});

