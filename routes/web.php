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

Auth::routes();

/* <!----------------------- Admin Login Routes -------------------------> */
Route::group(['namespace' => 'Admin\Auth', 'prefix' => 'admin', 'as' => 'admin.'], function() {

	Route::get('/', 'LoginController@showForm')->name('login');
	Route::post('/', 'LoginController@login')->name('submit');
	Route::get('/logout', 'LoginController@logout')->name('logout');

});

/* <!----------------------- Website Navigation Routes  -------------------------> */
Route::group(['namespace' => 'Website', 'as' => 'web.'], function() {

	Route::get('/', 'HomeController@index')->name('index');
	

});

