<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/book', [BookController::class,'index']);



Route::get('/book/search/{searchString}/{searchMode}/', [BookController::class,'search']);

Route::get('/book/{book}', [BookController::class,'show']);

// Route::middleware('check_roles:admin,member')->prefix('v1')->group(function(){

//     Route::get('/book', [BookController::class,'index']);

// });

// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         // Matches The "/admin/users" URL
//     });
// });
