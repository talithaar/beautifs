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

Route::controller(ProductController::class)->group(function(){
    Route::get('/products', 'index');
    Route::get('/products/create', 'create');
});

Route::controller(ServiceManController::class)->group(function(){
    Route::get('/serviceman', 'index');
});
