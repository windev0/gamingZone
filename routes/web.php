<?php

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\product\GameController;
use App\Http\Controllers\product\PcController;
use App\Http\Controllers\product\PhoneController;

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

// main view for the customer or simple user (preview of the deployment)
Route::get('/', function () {
    return view('myhome.main.main');
});

// administration page for admin
Route::middleware(['auth', 'isAdmin'])->group(function () {

//  ############ PRODUCTS ##############

    // Game devices
    Route::get('/admin/game-devices', [GameController::class, 'index'])->name('getAllGameDevices');
    Route::get('/admin/create-game-device', [GameController::class, 'create'])->name('createGameDevice');
    Route::post('/admin/insert-game-device', [GameController::class, 'store'])->name('gameStore');
    Route::get('/admin/delete-game-device/{id}', [GameController::class, 'destroy'])->name('gameDelete');
    Route::get('/admin/edit-game-device/{id}', [GameController::class, 'edit'])->name('editGame');
    Route::put('/admin/update-game-device/{id}', [GameController::class, 'update'])->name('updateGame');
    Route::get('/admin/show-game-device/{id}', [GameController::class, 'show'])->name('showGame');

    // Pc devices
    Route::get('/admin/pc-devices', [PcController::class, 'index'])->name('getAllPCDevices');
    Route::get('/admin/create-pc-device', [PcController::class, 'create'])->name('createPCDevice');
    Route::post('/admin/insert-pc-device', [PcController::class, 'store'])->name('pcStore');
    Route::get('/admin/delete-pc-device/{id}', [PcController::class, 'destroy'])->name('pcDelete');
    Route::get('/admin/edit-pc-device/{id}', [PcController::class, 'edit'])->name('editPc');
    Route::put('/admin/update-pc-device/{id}', [PcController::class, 'update'])->name('updatePc');
    Route::get('/admin/show-pc-device/{id}', [PcController::class, 'show'])->name('showPc');

    // Phones
    Route::get('/admin/phones', [PhoneController::class, 'index'])->name('getAllPhones');
    Route::get('/admin/create-phone', [PhoneController::class, 'create'])->name('createPhone');
    Route::post('/admin/insert-phone', [PhoneController::class, 'store'])->name('phoneStore');
    Route::get('/admin/delete-phone/{id}', [PhoneController::class, 'destroy'])->name('phoneDelete');
    Route::get('/admin/edit-phone/{id}', [PhoneController::class, 'edit'])->name('editPhone');
    Route::put('/admin/update-phone/{id}', [PhoneController::class, 'update'])->name('updatePhone');
    Route::get('/admin/show-phone/{id}', [PhoneController::class, 'show'])->name('showPhone');
});

// --------------------------------------------------------------------------------------------------------

// ############## AUTHENTIFICATION ##################

// Register
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// password management
Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset']);

// email management
Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');
