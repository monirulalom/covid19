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
Route::get('/admin/new', 'HomeController@new')->name('dashboard');

Route::get('apply','ApplicationController@index')->name('apply');

Route::get('check','StatuscheckController@index')->name('check');

Route::post('check','StatuscheckController@show')->name('statuscheck');

Route::post('apply','ApplicationController@store')->name('apply');

Route::get('getdistricts/{id}','ApplicationController@getDistricts');

Route::get('getupazillas/{id}','ApplicationController@getUpazillas');