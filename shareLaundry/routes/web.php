<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('main'); 
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/using', [App\Http\Controllers\LaundryController::class, 'index'])->name('using');
// // Route::get('/using/each', [App\Http\Controllers\LaundryController::class, 'each'])->name('each');
// // Route::get('/user', [App\Http\Controllers\UserContollerController::class, 'index'])->name('user');



