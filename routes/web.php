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
    return view('backend.partial.index');
});
Route::group(['as'=>'category.','prefix'=>'category'],function (){
    Route::get('/','CategoryController@index');
    Route::get('create','CategoryController@create')->name('create');
    Route::post('store','CategoryController@store')->name('store');
    Route::get('edit','CategoryController@create')->name('edit');
    Route::post('update','CategoryController@store')->name('update');
});

