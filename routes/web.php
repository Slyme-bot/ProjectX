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

Route::get('/home', function () {
    return view('frontend.home');
});

Route::get('/paper', function () {
    return view('exam.setpaper');
});

Route::get('/notifications', function () {
    return view('notification.popup');
});

Route::get('/admin', function () {
  return view('admin.dashboard');
});

Route::get('/stream', function () {
  return view('dashboard.course');
});

//Route::get('/', function () {
  //return view('home');
//});
