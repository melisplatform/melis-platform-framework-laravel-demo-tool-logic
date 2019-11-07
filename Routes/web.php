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
    Route::post('laravel-get-table-data', 'IndexController@tableData');

    // Album form for Modal create and update
    Route::get('laravel-album-form/{id?}', 'IndexController@albumForm');

    Route::post('laravel-save-album/{id?}', 'IndexController@saveAlbum');
    Route::post('laravel-delete-album/{id}', 'IndexController@deleteAlbum');


});

/**
 * /melis route for Front access
 */
Route::get('/laravel-list', 'IndexController@pluginlist');

