<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\userInfoController;
use App\Http\Controllers\userSanctunAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::post('/singup', [userSanctunAuthController::class, 'store']);
Route::post('/singin', [userSanctunAuthController::class, 'show']);

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/dashboard', [UserDashboardController::class, 'show']);
    Route::post('/dashboard', [UserDashboardController::class, 'create']);
    Route::post('/logout', [userSanctunAuthController::class, 'destroy']);
});

