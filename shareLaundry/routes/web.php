<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LaundryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\UsingController;


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


Auth::routes();

Route::resource('/', MainController::class);
Route::resource('/laundry', LaundryController::class);
Route::resource('/notice', NoticeController::class);
Route::resource('/using', UsingController::class);


Route::get('/user/{id}', [UserController::class, 'show'])->name('user');