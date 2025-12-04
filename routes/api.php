<?php

use App\Http\Controllers\userController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::group(['prefix'=>'auth'], function($router){
//     Route::post('singin', [userController::class, 'singIn']);
//     Route::post('singup', [userController::class, 'singUp']);
//     Route::post('refresh', [userController::class, 'refresh']);
// });


Route::post('/singin', [userController::class, 'singIn']);
Route::post('/singUn', [userController::class, 'singUp']);

Route::group(['middleware'=>'auth:api'], function($router){
    Route::post('logout', [userController::class, 'logout']);
});
