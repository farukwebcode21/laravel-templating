<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'Home')->name('/');
    Route::get('shop', 'Shop')->name('shop');
    Route::get('vegetable', 'Vegetable')->name('vegetable');
    Route::get('about', 'About')->name('about');
    Route::get('contactus', 'Contact')->name('contactus');
});