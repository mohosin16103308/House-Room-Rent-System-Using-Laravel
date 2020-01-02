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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@admin');

/**
 * *********************************************************************************************************************************
 * ADDS  Controller START   ************************************* ADDS *********************************************************************
 * *********************************************************************************************************************************
 */

Route::prefix('dashboard')->group(function () {
    Route::get('/adds/list', 'AddsController@index')->name("add_list");
    Route::get('/create/add', 'AddsController@create')->name("add_create");
    Route::get('/edit/add', 'AddsController@edit')->name("add_edit");
    Route::get('/show/add', 'AddsController@show')->name("add_show");
});



/**
 * *********************************************************************************************************************************
 * ADDS  Controller End   ************************************* ADDS *********************************************************************
 * *********************************************************************************************************************************
 */