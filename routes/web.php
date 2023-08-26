<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\product\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// main view for the customer (preview of the deployment)
Route::get('/', function () {
    return view('myhome.main.main');
});

// administration page 
Route::get('/admin', function () {
    return view('myhome.products.gameDevices');
});

// Product
Route::get('/admin/game-devices', [ProductController::class, 'indexGameDevices'])->name('getAllGameDevices');
Route::get('/admin/pc-devices', [ProductController::class, 'indexPcDevices'])->name('getAllPCDevices');

// Product-create
Route::get('/admin/create-game-device', [ProductController::class, 'createGameDevice'])->name('createGameDevice');
Route::get('/admin/create-pc-device', [ProductController::class, 'createPCDevice'])->name('createPCDevice');

//Product-store 
Route::post('/admin/insert-product', [ProductController::class, 'store'])->name('store');

// Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// password management
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset']);

// email management
Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
