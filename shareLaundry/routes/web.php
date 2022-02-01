<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LaundryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;



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
//     return view('main'); 
// });

Route::get('/', [MainController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('main');

Auth::routes();

Route::get('/laundry/{id}', [LaundryController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
//id로 말고 이름으로 보여주고 싶음


// Route::get('/using', [App\Http\Controllers\LaundryController::class, 'index'])->name('using');
// // Route::get('/using/each', [App\Http\Controllers\LaundryController::class, 'each'])->name('each');
// // Route::get('/user', [App\Http\Controllers\UserContollerController::class, 'index'])->name('user');



