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

Route::get('items/add', 'ItemController@create');
Route::post('items/add', 'ItemController@store');

Route::get('formitem/add', 'FormController@create');
Route::post('formitem/add', 'FormController@store');
