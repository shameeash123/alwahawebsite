<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home/', function () {
    return view('index');
});

Route::get('aboutus/', function () {
    return view('Aboutus');
});

Route::get('imagegallery/', function () {
    return view('imagegallery');
});

Route::get('contactus/', function () {
    return view('contactus');
});
