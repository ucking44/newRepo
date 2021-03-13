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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/dashboard/academy', function () {
    return view('dashboard.academy');
});

Route::get('/dashboard/account', function () {
    return view('dashboard.account');
});

Route::get('/dashboard/news', function () {
    return view('dashboard.news');
});

Route::get('/dashboard/newspage', function () {
    return view('dashboard.newspage');
});

Route::get('/dashboard/anthem', function () {
    return view('dashboard.anthem');
});

Route::get('/dashboard/apparel', function () {
    return view('dashboard.apparel');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

