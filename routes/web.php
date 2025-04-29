<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\userInfoController;
use Illuminate\Support\Facades\Route;
use App\Models\Usersinfo;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/singup', function () { 
    return view('singup');
});

Route::get("/singin", function () {
    return view("singin");
});

Route::post('/singin', [userController::class, 'singIn']);

Route::post('register', [userController::class, 'singUp']);

Route::get('/resume', function () {
    return view('about-page');
});

Route::get('/contact', function () {
    return view('contact-page');
});

Route::get('/admin-panel', function () {
    return view('admin-panel');
});

Route::get('/profile', function () {
    $data = Usersinfo::where('user_id', auth()->id())->get();
    return view('profile_page', ['datas' => $data]);
});

Route::get('/logout', [userController::class, 'logOut']);

Route::get('/about', function(){
    return view('about');
});

// Route::get('/templates/portfolio/home', function(){
//     return view('templates.portfolio.home');
// });


// Route::get('/templates/portfolio/home', function(){
    
//     return view('templates.portfolio.home');
// });

Route::get('/templates/portfolio/home', [userInfoController::class, 'showProfile']);

Route::get('/templates/portfolio/about', function(){
    return view('templates.portfolio.about');
});

Route::get('/templates/portfolio/contact', function(){
    return view('templates.portfolio.contact');
});

Route::post('/save', [userInfoController::class, 'Save']);