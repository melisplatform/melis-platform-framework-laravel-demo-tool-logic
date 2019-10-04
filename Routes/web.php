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

/**
 * /melis route for BO access
 */

Route::group(['prefix'=>'melis'], function(){
    // Tool content
    Route::get('laravel-list', 'IndexController@list');
    // Album form for Modal create and update
    Route::get('laravel-album-form/{id?}', 'IndexController@albumForm');
});

/**
 * /melis route for Front access
 */
Route::get('/laravel-list', 'IndexController@list2');

