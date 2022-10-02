<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
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
    return view('welcome');
});

Route::post('/loginuser', [LoginController::class, 'loginuser']);
Route::post('/registeruser', [RegisterController::class, 'registeruser']);
Route::get('/loanbook', [HomeController::class, 'loanbook']);
Route::get('/payment', [HomeController::class, 'payment']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::post('/verify_bvn', [HomeController::class, 'verify_bvn']);
Route::post('/updatecontact', [HomeController::class, 'updatecontact']);
         

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
