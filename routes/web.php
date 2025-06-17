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

Route::get('/',  function () {
    return view('web.home');
})->name("web.home");
Route::get('/about',  function () {
    return view('web.about');
})->name("web.about");
Route::get('/blogs',  function () {
    return view('web.blog');
})->name("web.blogs");
Route::get('/gallery',  function () {
    return view('web.gallery');
})->name("web.gallery");
Route::get('/shop',  function () {
    return view('web.products');
})->name("web.shop");
Route::get('/shop/detail',  function () {
    return view('web.product-view');
})->name("web.detail");
Route::get('/cart',  function () {
    return view('web.cart');
})->name("web.cart");
Route::get('/contact',  function () {
    return view('web.contact');
})->name("web.contact");
