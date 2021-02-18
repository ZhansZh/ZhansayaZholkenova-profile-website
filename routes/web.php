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

Route::get('/index', function () {
    return view('index');
}) -> name('index');

Route::get('/skills', function () {
    return view('skills');
}) -> name('skills');

Route::get('/Experience', function () {
    return view('Experience');
}) -> name('Experience');

Route::get('/Contact', function () {
    return view('contact');
}) -> name('contact');






