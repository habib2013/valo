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
Route::get('/loanfeed', [HomeController::class, 'loanfeed']);
Route::get('/payment', [HomeController::class, 'payment']);
Route::get('/profile', [HomeController::class, 'profile']);
Route::get('/loan_investment', [HomeController::class, 'loan_investment']);
Route::get('/admin_home', [HomeController::class, 'admin_home']);
// Route::get('/payment', [HomeController::class, 'payment']);
Route::post('/verify_bvn', [HomeController::class, 'verify_bvn']);
Route::post('/addToWallet', [HomeController::class, 'addToWallet']);
Route::post('/updatecontact', [HomeController::class, 'updatecontact']);
Route::post('/investInALoan', [HomeController::class, 'investInALoan']);
Route::post('/iwantthisloan', [HomeController::class, 'iwantthisloan']);



Route::get('/logout', [HomeController::class, 'logout']);
 
// Admin
Route::get('/admin/users', [HomeController::class, 'allusers']);
Route::get('/admin/schools', [HomeController::class, 'allschools']);
Route::get('/admin/loans', [HomeController::class, 'allloans']);
Route::get('/admin/settings', [HomeController::class, 'allsettings']);
Route::get('/admin/addschool', [HomeController::class, 'addschools']);
Route::get('/admin/addloan', [HomeController::class, 'addloans']);
Route::get('/viewallLoans/{id}', [HomeController::class, 'viewAllLoans']);

Route::post('/addSchool', [HomeController::class, 'addSchool']);
Route::post('/addLoan', [HomeController::class, 'addLoan']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
