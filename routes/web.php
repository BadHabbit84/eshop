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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::middleware(['auth'])->group(function() {
	Route::get('upload', 'UploadController@index');
	Route::get('upload-finish', 'UploadController@uploaded')->name('upload-finish');
	Route::post('store', 'UploadController@store');
	Route::get('my-items', 'UserController@myItems')->name('my-items');
	Route::get('my-items/{id}', 'UserController@checkItem');
});
