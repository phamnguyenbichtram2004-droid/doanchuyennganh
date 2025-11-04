<?php

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