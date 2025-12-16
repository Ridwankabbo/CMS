<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\userInfoController;
use App\Http\Controllers\userSanctunAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::post('/singup', [userSanctunAuthController::class, 'store']);
Route::post('/singin', [userSanctunAuthController::class, 'show']);

Route::get('/dashboard', [userInfoController::class, 'showProfile'])->middleware('auth:sanctum');

