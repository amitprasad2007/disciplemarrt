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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::resource('users', 'UserController');
Route::get('users/{role}','UserController@index');
Route::get('users/change-status/{id}', 'UserController@changeStatus');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('categories','CategoriesController@index')->name('categories');
Route::get('categories/create','CategoriesController@create')->name('categories.create');


