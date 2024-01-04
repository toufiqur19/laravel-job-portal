<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\FindJobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\jobPostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home');
route::get('/signup',[AccountController::class,'registration'])->name('signup');
Route::post('custom-registration', [AccountController::class, 'customRegistration'])->name('register.custom');
route::get('/signin',[AccountController::class,'login'])->name('signin');
route::get('/find-job',[FindJobController::class,'findJob'])->name('findJob');
Route::post('custom-login', [AccountController::class, 'customLogin'])->name('login.custom');
Route::get('signout', [AccountController::class, 'signOut'])->name('signout');
Route::get('jobPost', [jobPostController::class, 'jobPost'])->name('jobPost');