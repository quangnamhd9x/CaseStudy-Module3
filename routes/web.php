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


//Route::get('/login', [\App\Http\Controllers\LoginController::class, 'checkLogin'])->name('login');

Route::get('/', function (){
    return view('index');
});

Route::get('/login', [\App\Http\Controllers\UserController::class, 'showLogin'])->name('login');
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'showDashboard'])->middleware('auth');

