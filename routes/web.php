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

Route::get('/admin/new', 'HomeController@new')->name('new-req');

Route::get('/admin/users', 'UserController@index')->name('users');

Route::get('/admin/user/{id}', 'UserController@edit')->name('edit-user');

Route::post('/admin/user/{id}', 'UserController@update');

Route::get('apply','ApplicationController@index')->name('apply');

Route::get('/admin/application/{id}','statusController@edit')->name('change-status');

Route::post('/admin/application/{id}','statusController@update');

Route::get('check','StatuscheckController@index')->name('check');

Route::post('check','StatuscheckController@show')->name('statuscheck');

Route::post('apply','ApplicationController@store')->name('apply');

Route::get('getdistricts/{id}','ApplicationController@getDistricts');

Route::get('getupazillas/{id}','ApplicationController@getUpazillas');