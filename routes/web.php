<?php

namespace App\Http\Controllers;
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
    return view('welcome');
});
Route::get('/admin', function () {
    return view('/admin/dashboard');
})->middleware(['auth'])->name('admin');
Route::get('/order', function () {
    return view('/admin/order');
})->middleware(['auth'])->name('order');



Route::controller(ServiceManController::class)->group(function(){
    Route::get('/serviceman', 'index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';

Route::controller(RatingController::class)->group(function(){
    Route::get('/rating', 'index');
    Route::get('/thankyou', 'get');
});

Route::controller(BagController::class)->group(function(){
    Route::get('/bag', 'index');
});

Route::controller(OrderController::class)->group(function(){
    Route::get('/order', 'index');
});

Route::controller(EditProfileController::class)->group(function(){
    Route::get('/editprofile', 'index');
});

Route::controller(ProfileController::class)->group(function(){
    Route::get('/profile', 'index');
});

Route::controller(ServiceController::class)->group(function(){
    Route::get('/service', 'index');
});

Route::controller(PembayaranBerhasilController::class)->group(function(){
    Route::get('/pembayaranberhasil', 'index');
});

Route::controller(PembayaranGagalController::class)->group(function(){
    Route::get('/pembayarangagal', 'index');
});

Route::controller(AboutController::class)->group(function () {
    Route::get('/about', 'index');
});

Route::controller(ServiceWomenController::class)->group(function () {
    Route::get('/servicewomen', 'index');
});
