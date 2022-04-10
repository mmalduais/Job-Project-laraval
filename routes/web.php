<?php

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\SettingsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCompaniesController;
use App\Http\Controllers\AdminJobsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\addExpController;
use App\Http\Controllers\addServController;
use App\Http\Controllers\addPersonalController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



// ProfileController

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/admin/jobs',function(){
//     return view('admin.jobs');
// });


// Route::get('/login',[AuthController::class,'showLogin']);
// Route::post('/do_login',[AuthController::class,'login'])->name('do_login');


// Route::get('/job',[AdminController::class,'addjob']);

//user

// Route::get('/create_user',[AuthController::class,'createUser'])->name('create_user');
// Route::post('/save_user',[AuthController::class,'register'])->name('save_user');

// Route::get('/show_all_users',[AuthController::class,'listAll'])->name("show_users");
// Route::get('/new_category',[CategoriesController::class,'create'])->name('new_category');

// Route::get('/login',[AuthController::class,'showLogin'])->name('login');

Route::post('/do_login',[AuthController::class,'login'])->name('do_login');

// Job

Route::get('/job',[AdminJobsController::class,'show']);
Route::post('/admin/company/add',[AdminJobsController::class,'addNew']);

// Company
Route::get('/admin/company',[AdminCompaniesController::class,'show'])->name('show_company');
Route::post('/admin/company/add',[AdminCompaniesController::class,'addNew'])->name('add_company');

// Personal
Route::get('/add-personal',[addPersonalController::class,'showPers'])->name('show_company');
Route::post('/add-Personal',[addPersonalController::class,'addNewpers']);



// Expert
Route::get('/addexp',[addExpController::class,'showExp'])->name('show_company');
Route::post('/addExp',[addExpController::class,'addNewexp']);

// services
Route::get('/addser',[addServController::class,'showServ'])->name('show_company');
Route::post('/addServ',[addServController::class,'addNewserv']);



Route::get('/protofile',[ProfileController::class,'showprofile'])->name('show_profile');
Route::post('/admin/profile/add',[ProfileController::class,'addNew'])->name('add_company');
// protofile

//   Jobs
Route::get('/admin/jobs',[AdminJobsController::class,'show'])->name('show_job');
Route::post('/admin/jobs/add',[AdminJobsController::class,'addNewjob'])->name('add_job');



Route::group([
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],function(){



Route::get('/create_user',[AuthController::class,'createUser'])->name('create_user');
Route::post('/save_user',[AuthController::class,'register'])->name('save_user');

Route::get('/home',[DashboardController::class,'dashboard'])->name('home');

Route::get('/show_all_users',[AuthController::class,'listAll'])->name("show_users");
Route::get('/new_category',[CategoriesController::class,'create'])->name('new_category');

Route::get('/login',[AuthController::class,'showLogin'])->name('login');


});


Route::get('/generate_roles',[SettingsController::class,'generateRoles'])->name('generate_roles');
// Route::get('/jobs',[AdminController::class,'addjob']);

// Route::get('/do_job',[AdminController::class,'showjob']);




// Route::get('/admin/company',function(){
//     return view('admin.company');
// });



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login',[AdminController::class,'index']);
// Route::post('/save_job',[AdminController::class,'login'])->name('do_login');


Route::get('/add-education', function () {
    return view('add-education');
});

Route::get('/add-exper', function () {
    return view('add-exper');

});
Route::get('/add-services', function () {
    return view('add-services');

});

Route::get('/add-personal', function () {
    return view('add-personal');
});

Route::get('/add-skill', function () {
    return view('add-skill');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/details-job', function () {
    return view('details-job');
});


Route::get('/jop-page', function () {
    return view('jop-page');
});





Route::get('/services-job', function () {
    return view('services-job');
});

Route::get('/contact-job', function () {
    return view('contact');
});



Route::get('/edait-exper', function () {
    return view('edait-exper');
});

Route::get('/edait-exper', function () {
    return view('edait-exper');
});

Route::get('/edait-skill', function () {
    return view('edait-skill');
});

Route::get('/education', function () {
    return view('education');
});

Route::get('/edait-exper', function () {
    return view('edait-exper');
});

Route::get('/experiance', function () {
    return view('experiance');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/jop-page', function () {
    return view('jop-page');
});

Route::get('/personal-edait', function () {
    return view('personal-Edait');
});

Route::get('/services', function () {
    return view('services');
});


Route::get('/skill', function () {
    return view('skill');
});


Route::get('/sliderVertical', function () {
    return view('sliderVertical');
});



