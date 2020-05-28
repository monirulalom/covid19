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

//URL::forceScheme('https');

Route::get('/', function () {
    return view('index');
});
Auth::routes(['verify' => true]);

Route::get('/admin', 'HomeController@index')->name('dashboard');

Route::get('apply','TestRequestController@index')->name('apply');

Route::get('getdistricts/{id}','TestRequestController@getDistricts');

Route::get('getupazillas/{id}','TestRequestController@getUpazillas');