<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthenticationController;

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

Route::post("/signin", [AuthenticationController::class, "login"]);

Route::get('/carsAdmin', [CarController::class, "index"]);

Route::get('/carsAdmin/create', [CarController::class, "create"]);

Route::post('/carsAdmin/store', [CarController::class, "store"]);

Route::get('/carsAdmin/edit/{id}', [CarController::class, "edit"]);

Route::get('/carsAdmin/{id}', [CarController::class, "show"]);

Route::put('/carsAdmin/{id}', [CarController::class, "update"]);

Route::delete('/carsAdmin/{id}', [CarController::class, "destroy"]);

Route::get('/category', function () {
    return view('category');
});

Route::get('/category}', [category::class, "index"]);

Route::get('/category}', [category::class, "show"]);

Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/toprent', function () {
    return view('toprent');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/search', function () {
    return view('search');
});
