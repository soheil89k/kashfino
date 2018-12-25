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

Route::get('', '\App\Http\Controllers\Website\HomeController@index')->name("web.home");
Route::get('login', '\App\Http\Controllers\Website\Auth\LoginController@login')->name("web.login");
Route::get('register', '\App\Http\Controllers\Website\Auth\LoginController@register')->name("web.register");
Route::get('logout', '\App\Http\Controllers\Website\Auth\LoginController@logout')->name("web.logout");
