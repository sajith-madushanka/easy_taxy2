<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MinibusPriceController;
use App\Http\Controllers\PrivatePriceController;
use App\Http\Controllers\SafariPriceController;
use App\Http\Controllers\PageController;

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


Route::get('/', [PageController::class, 'landing'])->name('landing');
Route::get('/minibus', [PageController::class, 'minibus'])->name('minibus');
Route::get('/private-vehicle', [PageController::class, 'private'])->name('private-vehicle');
Route::get('/safari', [PageController::class, 'safari'])->name('safari');

Route::get('/minibus/destination', [PageController::class, 'minibusDestination']);
Route::get('/minibus/date_seats', [PageController::class, 'minibusDateSeats']);


Route::controller(AuthController::class)->group(function(){
    Route::get('/registration','registration')->middleware('alreadyLoggedIn');
    Route::post('/registration-user','registerUser')->name('register-user');
    Route::get('/login','login')->middleware('alreadyLoggedIn');
    Route::post('/login-user','loginUser')->name('login-user');
    Route::get('/dashboard','dashboard')->middleware('isLoggedIn');
    Route::get('/logout','logout');
});

Route::resource('minibus_price', MinibusPriceController::class);
Route::post('minibus_price/getdata', [MinibusPriceController::class, 'getData']);

Route::resource('private_price', PrivatePriceController::class);
Route::post('private_price/getdata', [PrivatePriceController::class, 'getData']);

Route::resource('safari_price', SafariPriceController::class);
Route::post('safari_price/getdata', [SafariPriceController::class, 'getData']);