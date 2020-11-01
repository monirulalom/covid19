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


Route::get('/quiz', 'QuizController@index')->name('quiz');

Route::get('/admin', 'HomeController@index')->name('dashboard');

Route::get('/admin/new', 'HomeController@new')->name('new-req');

Route::get('/admin/tolab', 'HomeController@tolab')->name('tolab');

Route::get('/admin/inlab', 'HomeController@inlab')->name('inlab');

Route::get('/admin/positive', 'HomeController@positive')->name('positive');

Route::get('/admin/negative', 'HomeController@negative')->name('negative');

Route::get('/admin/zone','ZoneController@index')->name('zone');

Route::get('/admin/zone/new','ZoneController@new')->name('addzone');

Route::post('/admin/zone/new','ZoneController@add');

Route::get('/admin/zone/green','ZoneController@green')->name('green');

Route::get('/admin/zone/delete/{id}','ZoneController@delete')->name('deletezone');

Route::get('/admin/zone/yellow','ZoneController@yellow')->name('yellow');

Route::get('/admin/zone/red','ZoneController@red')->name('red');

Route::get('/admin/zone/lockdown','ZoneController@lockdown')->name('lockdown');


Route::get('/admin/users', 'UserController@index')->name('users');

Route::get('/admin/user/{id}', 'UserController@edit')->name('edit-user');

Route::post('/admin/user/{id}', 'UserController@update');

Route::get('/admin/hospitals', 'HospitalController@index')->name('hospitals');

Route::get('/admin/hospitals/add', 'HospitalController@add')->name('addhospital');

Route::get('/admin/hospital/{id}', 'HospitalController@edit')->name('edithospital');

Route::post('/admin/hospital/{id}', 'HospitalController@update');

Route::get('/admin/hospital/delete/{id}', 'HospitalController@delete')->name('deletehospital');

Route::post('/admin/hospitals/add', 'HospitalController@store');

Route::get('apply','ApplicationController@index')->name('apply');

Route::get('/admin/application/{id}','statusController@edit')->name('change-status');

Route::post('/admin/application/{id}','statusController@update');

Route::get('check','StatuscheckController@index')->name('check');

Route::post('check','StatuscheckController@show')->name('statuscheck');

Route::post('apply','ApplicationController@store')->name('apply');

Route::get('getdistricts/{id}','ApplicationController@getDistricts');

Route::get('getupazillas/{id}','ApplicationController@getUpazillas');

Route::get('/admin/download/applications','DownloadController@all')->name('downloadapplications');

