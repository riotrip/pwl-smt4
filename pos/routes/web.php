<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

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

// Nomor 1
Route::get('/', function () {
    return view('home');
});

// Nomor 2
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [CategoryController::class, 'foodBeverage']);
    Route::get('/beauty-health', [CategoryController::class, 'beautyHealth']);
    Route::get('/home-care', [CategoryController::class, 'homeCare']);
    Route::get('/baby-kid', [CategoryController::class, 'babyKid']);
});

// Nomor 3
Route::get('/user/{id}/name/{name}', function ($id, $name) {
    return 'Nama user: ' . $name . ', dengan ID: ' . $id;
});

// Nomor 4
Route::get('/sales', function () {
    return view('sales');
});
