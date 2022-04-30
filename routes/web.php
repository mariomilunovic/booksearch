<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PageController;

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

// Route::get('/', function () {
//     return view('pages.home');
// });

//TEST
Route::get('/test',[PageController::class,'test'])->name('test.toast');



//REGISTER CONTROLLER
Route::get('register',[RegisterController::class,'form'])->name('register.form')->middleware('guest');
Route::post('register',[RegisterController::class,'register'])->name('register.register');

//LOGIN CONTROLLER
Route::get('login',[LoginController::class,'form'])->name('login.form')->middleware('guest');
Route::post('login',[LoginController::class,'login'])->name('login.login')->middleware('guest');

//LOGOUT CONTROLLER
Route::get('logout',[LogoutController::class,'logout'])->name('logout.logout')->middleware('check_roles:admin,member');


//BOOK CONTROLLER


//PAGE CONTROLLER
Route::get('/',[PageController::class,'home'])->name('pages.home');
Route::get('dashboard',[PageController::class,'dashboard'])->name('pages.dashboard')->middleware('check_roles:admin,member');