<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\FindJobController;
use App\Http\Controllers\HomeController;
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
route::get('/signin',[AccountController::class,'login'])->name('login');
route::get('/find-job',[FindJobController::class,'findJob'])->name('findJob');