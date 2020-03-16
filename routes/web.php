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
    return view('index');
});
Route::get('/vacation', function () {
    return view('vacation');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/car', function () {
    return view('car');
});
Route::get('/flight', function () {
    return view('flight');
});
Route::get('/hotel', function () {
    return view('hotel');
});