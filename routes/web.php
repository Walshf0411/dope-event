<?php

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
    return view('home');
})->name('home');

Route::get('/vacation', function () {
    return view('vacation');
})->name('vacation');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/car', function () {
    return view('car');
})->name('car');

Route::get('/flight', function () {
    return view('flight');
})->name('flight');

Route::get('/hotel', function () {
    return view('hotel');
})->name('hotel');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');