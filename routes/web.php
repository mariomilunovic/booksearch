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
Route::get('/books',[BookController::class,'index'])->name('book.index');
Route::get('/book/{book}',[BookController::class,'show'])->name('book.show');
Route::get('/books/{book}/delete',[BookController::class,'destroy'])->name('book.destroy')->middleware('check_roles:admin');
Route::get('/books/search',[BookController::class,'livewire_search'])->name('book.livewire_search')->middleware('check_roles:admin,member');
Route::get('/books/import',[BookController::class,'import'])->name('book.import')->middleware('check_roles:admin');
Route::post('/books/upload',[BookController::class,'upload'])->name('book.upload')->middleware('check_roles:admin');

//PAGE CONTROLLER
Route::get('/',[BookController::class,'index'])->name('book.index');
Route::get('dashboard',[PageController::class,'dashboard'])->name('pages.dashboard')->middleware('check_roles:admin,member');
