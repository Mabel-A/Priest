<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use FontLib\Table\Type\name;

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
    return view('index');
});

Auth::routes();

/* Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */
Route::get('/home', 'App\Http\Controllers\priestController@index')->name('priest');
Route::get('/contact-us', 'App\Http\Controllers\priestController@contact')->name('contact');
Route::get('/event', 'App\Http\Controllers\priestController@event')->name('event');
Route::get('/gallery', 'App\Http\Controllers\priestController@gallery')->name('gallery');
Route::get('/sermon', 'App\Http\Controllers\priestController@sermon')->name('sermon');

Route::get('/donate', 'App\Http\Controllers\priestController@donate')->name('donate');
Route::get('/stripe', 'App\Http\Controllers\StripePaymentController@stripe');
Route::post('/stripe', 'App\Http\Controllers\StripePaymentController@stripePost')->name('payment.post');

// Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::get('/success', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('/cancel', [CheckoutController::class, 'cancel'])->name('checkout.cancel');

