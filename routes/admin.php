<?php 

/**
 * --------------------------------------------------------------------------
 * Admin Routes
 * --------------------------------------------------------------------------
 * 
 * These are used for the admin control over the project and managing
 * the project.
 * 
 */
 
 Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function() {
    
    Route::get('dashboard', 'AdminController@index')->name('dashboard');

   /* <===================== Category Routes =============================> */
    Route::group(['prefix' => 'category', 'as' => 'category.'], function() {

      Route::get('create', 'CategoryController@index')->name('index');
      Route::post('store', 'CategoryController@store')->name('store');
      Route::get('edit/{id}', 'CategoryController@edit')->name('edit');
      Route::get('update/{id}', 'CategoryController@update')->name('update');
      Route::get('show/{id}', 'CategoryController@show')->name('show');
      Route::post('destroy/{id}', 'CategoryController@destroy')->name('destroy');

    });
              
 });