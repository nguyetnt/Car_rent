<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('aboutus');
});

Route::get('/detail/{id}', function () {
    return view('cardetail');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/carsAdmin', function () {
    return view('carsAdmin');
});

Route::get('/carsAdmin/create', function () {
    return view('carsAdminCreate');
});

Route::get('/carsAdmin/edit/{id}', function () {
    return view('carsAdminDetail');
});
