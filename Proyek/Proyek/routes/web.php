<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\CategoryController;

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

// Route::get('/', [Controller::class, 'layout']);
Route::get('/home', [HomeController::class, 'apapun']);
// Route::get('/home', [Controller::class, 'home']);
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'loginpage');
    Route::post('/login', 'login');
    Route::get('/logout', 'logout');
});
Route::get('/signup', [UserController::class, 'signup']);
Route::post('/signup', [UserController::class, 'createUser']);
Route::get('/aboutus', [Controller::class, 'aboutus']);
Route::get('/profile', [Controller::class, 'profile']);
Route::get('/payment', [PaymentController::class, 'payment']);
Route::get('/donationdetail/{id}', [DonationController::class, 'showDetail']);
Route::get('/paymentsuccess', [PaymentController::class, 'paymentS']);
Route::get('/category/{id}', [CategoryController::class, 'categoryTest']);
Route::get('/passchange', [Controller::class, 'profilech']);

route::get('/', function () {
    return redirect('/login');
});
