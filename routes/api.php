<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\userSanctunAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post('/singup', [userSanctunAuthController::class, 'store']);
Route::post('/singin', [userSanctunAuthController::class, 'show']);


/*
=============================== JWT auth routs =====================
// Route::group([
//     'middleware'=>'api',
//     'prefix'=>'auth'
// ], function($router){
//     Route::post('singin', [userController::class, 'singIn']);
//     Route::post('singup', [userController::class, 'singUp']);
//     Route::post('refresh', [userController::class, 'refresh']);
// });

// Route::group(['middleware'=>'auth:api'], function($router){
//     Route::post('logout', [userController::class, 'logout']);
// });
=====================================================================
*/

