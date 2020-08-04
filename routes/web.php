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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sell', 'SellCarController@index')->name('sell.car');
Route::post('/sell', 'SellCarController@create')->name('create.car');
Route::get('/details/{id}', 'CarDetailController@index')->name('detail.car');
Route::get('/users', 'UsersController@index')->name('detail.user')->middleware('admin');
Route::put('/users/{user}/update', 'UsersController@update')->name('update.user');
Route::delete('/users/{user}/delete', 'UsersController@delete')->name('delete.user');
Route::get('/profile', 'UsersController@show')->name('profile.user');
Route::get('/cars', 'CarsController@index')->name('cars')->middleware('admin');
Route::get('/cars/new', 'CarsController@newcars')->name('new.cars')->middleware('admin');
Route::delete('/cars/{car}/delete', 'CarsController@delete')->name('delete.car');
Route::put('/cars/{car}/active', 'CarsController@makeactive')->name('active.car');