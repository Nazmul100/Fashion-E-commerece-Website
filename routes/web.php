<?php

use App\Http\Controllers\ProjectController;
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

Route::get('/', [ProjectController::class, 'index']);

Route::get('/single-product', function () {
    return view('pages.single-product');
});

Route::get('/product', [ProjectController::class, 'product']);
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/newest', [ProjectController::class, 'newest'])->name('newest');
Route::get('/lowest', [ProjectController::class, 'lowest'])->name('low');
Route::get('/highest', [ProjectController::class, 'highest'])->name('high');
Route::get('/men', [ProjectController::class, 'men'])->name('men');
Route::get('/women', [ProjectController::class, 'women'])->name('women');
Route::get('/cart', [ProjectController::class, 'cart'])->name('cart');
