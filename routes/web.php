<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BookController;

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
Route::get('/book',[BookController::class,'index'])->name('book.index');
Route::get('/book/search',[BookController::class,'livewire_search'])->name('book.livewire_search')->middleware('check_roles:admin,member');
Route::get('/book/import',[BookController::class,'import'])->name('book.import')->middleware('check_roles:admin');
Route::post('/book/upload',[BookController::class,'upload'])->name('book.upload')->middleware('check_roles:admin');


//PAGE CONTROLLER
Route::get('/',[PageController::class,'home'])->name('pages.home');
Route::get('dashboard',[PageController::class,'dashboard'])->name('pages.dashboard')->middleware('check_roles:admin,member');
