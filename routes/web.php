<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ListingsController;

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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::view('/register', 'register');
Route::view('/list', 'list');
Route::view('/quiz', 'quiz');
Route::view('/accommodation', 'accommodation');
Route::post("/login", [UserController::class, 'login']);
Route::post("/register", [UserController::class, 'register']);
Route::get("/", [ProductController::class, 'index']);
Route::get("/accommodation", [ListingsController::class, 'show']);
Route::post("/list", [ListingsController::class, 'list']);
Route::get("detail/{id}", [ListingsController::class, 'detail']);
Route::post("/favourite", [ListingsController::class, 'favourite']);
Route::get("/favourites", [ListingsController::class, 'favouriteList']);
Route::get("/removefav/{id}", [ListingsController::class, 'removeFav']);
Route::get("/unheart/{id}", [ListingsController::class, 'unHeart']);
Route::get("/", [ListingsController::class, 'getAddress']);