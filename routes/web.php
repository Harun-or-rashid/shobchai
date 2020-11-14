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
Route::group(['as'=>'category.','prefix'=>'category'],function (){
    Route::get('/','CategoryController@index');
    Route::get('create','CategoryController@create')->name('create');
    Route::post('store','CategoryController@store')->name('store');
    Route::get('edit/{id}','CategoryController@edit')->name('edit');
    Route::post('update/{id}','CategoryController@update')->name('update');
    Route::get('delete/{id}','CategoryController@destroy')->name('delete');

    Route::get('/','SubCategoryController@index');
    Route::get('create','SubCategoryController@create')->name('create');
    Route::post('store','SubCategoryController@store')->name('store');
    Route::get('edit/{id}','SubCategoryController@edit')->name('edit');
    Route::post('update/{id}','SubCategoryController@update')->name('update');
    Route::get('delete/{id}','SubCategoryController@destroy')->name('delete');
});

Route::group(['as'=>'subcategory.','prefix'=>'subcategory'],function (){


    Route::get('/','SubCategoryController@index');
    Route::get('create','SubCategoryController@create')->name('create');
    Route::post('store','SubCategoryController@store')->name('store');
    Route::get('edit/{id}','SubCategoryController@edit')->name('edit');
    Route::post('update/{id}','SubCategoryController@update')->name('update');
    Route::get('delete/{id}','SubCategoryController@destroy')->name('delete');
});
Route::group(['as'=>'gallery.','prefix'=>'gallery'],function (){
    Route::get('/','GalleryController@index');
    Route::get('create','GalleryController@create')->name('create');
    Route::post('store','GalleryController@store')->name('store');
    Route::get('edit/{id}','GalleryController@edit')->name('edit');
    Route::post('update/{id}','GalleryController@update')->name('update');
    Route::get('delete/{id}','GalleryController@destroy')->name('delete');
});

