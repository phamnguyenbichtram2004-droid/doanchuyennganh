<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
Route::get('/blog', function () {
    return view('blog');
})->name('blog');
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/shop-details', function () {
    return view('shop-details');
})->name('shop-details');
Route::get('/shopping-cart', function () {
    return view('shopping-cart');
})->name('shopping-cart');
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
Route::get('/blog-details', function () {
    return view('blog-details');
})->name('blog-details');
Route::get('/admin', function () {
    return view('admin');
})->name('admin');
Route::get('/customer', function () {
    return view('customer');
})->name('customer');


Route::get('logout',[HomeController::class,'logout'])->name('logout');
    // Route::get('/admin/category', [App\Http\Controllers\CategoryController::class, 'index']);
    // Route::get('/admin/product', [App\Http\Controllers\ProductController::class, 'index']);
     Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('category', CategoryController::class);
        Route::resource('product',ProductController::class);
    });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

