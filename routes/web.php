<?php

use App\Http\Controllers\templatesController;
use App\Http\Controllers\userController;
use App\Http\Controllers\userInfoController;
use App\Models\Admins;
use App\Models\Usersprojects;
use App\Models\WebSiteSections;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Models\Usersinfo;
use Illuminate\Validation\Rule;
use PhpParser\Builder\Function_;
use Psy\TabCompletion\AutoCompleter;

//  Middleware for Guest users or Visitors 
Route::middleware('guest')->group(function () {
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

    Route::post('/register', [userController::class, 'singUp']);
});


// Mideleware for Authenticate Users
Route::middleware('auth')->group(function () {

    Route::get('/overview', function(){
        return view('overview');
    });

    Route::get('/profile', function () {
        $datas = Usersinfo::where('user_id', auth()->id())->get();
        // $projectsdata = Usersprojects::where('user_id', auth()->id())->get();
        return view('profile_page', compact('datas'));
    });

    Route::get('/user-projects', function () {
        $projectsdata = Usersprojects::where('user_id', auth()->id())->get();
        return view('projects', compact('projectsdata'));
    });

    // Route::get('/section-selection', function () {
    //     $selectedSections = WebSiteSections::where('user_id', auth()->id())->get()->first();
    //     return view('web-section-selection', ['selectedSection' => $selectedSections]);
    // });

    Route::get('/section-selection', [templatesController::class, 'getSectionsForTemplate']);
    Route::get('/web-templates', function () {
        return view('web-templates');
    });

    Route::get('/profile-settings', function(){
        return view('profile-settings');
    });
    Route::get('/profile-postes', function(){
        $projectsdata = Usersprojects::where('user_id', auth()->id())->get();
        return view('post', compact('projectsdata'));
    });
    Route::get('/profile-mediea', function(){
        return view('media');
    });

    Route::get('/templates/portfolio/home', [userInfoController::class, 'showProfile']);
    Route::post('/save-selection', [templatesController::class, 'selectSection']);


    Route::get('/logout', [userController::class, 'logOut']);

    Route::post('/save', [userInfoController::class, 'Save']);
    Route::post('add-new-project', [userInfoController::class, 'addNewProject']);

    Route::get('/delete-project/{id}', [userInfoController::class, 'deletProject'])->name('/delete.project');

    Route::get('/template-{n}', [templatesController::class, 'selectTemplate']);
});

// Some routs without group (not difined yeat).

Route::get('/resume', function () {
    return view('about-page');
});

Route::get('/contact', function () {
    return view('contact-page');
});

Route::get('/admin-login', function () {
    return view('admin-login');
});

Route::get('/admin-panel', function () {
    // $admin_datas = Admins::where('id', auth()->id())->get();
    $admin_datas = DB::table('admins')->where('id', auth()->id())->get();
    return view('admin-panel', ["admin_datas" => $admin_datas]);
});

Route::post('/admin-panel-action', [userController::class, 'adminController']);


Route::get('/about', function () {
    return view('about');
});

// Route::get('/templates/portfolio/home', function(){
//     return view('templates.portfolio-4.home');
// });


// Route::get('/templates/portfolio/home', function(){

//     return view('templates.portfolio.home');
// });

// Route::get('/templates/portfolio/index', function(){
//     return view('templates.portfolio-3.index');
// });



// Route::get('/templates/portfolio/about', function(){
//     return view('templates.portfolio.about');
// });

// Route::get('/templates/portfolio/contact', function(){
//     return view('templates.portfolio.contact');
// });