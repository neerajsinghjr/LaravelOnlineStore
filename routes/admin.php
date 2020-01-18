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
    
 });