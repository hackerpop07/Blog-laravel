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

Route::prefix('blogs')->group(function () {
    Route::get('/', 'BlogController@index')->name('blogs.index');
    Route::get('{id}/detail', 'BlogController@show')->name('blogs.show');
    Route::get('/create', 'BlogController@create')->name('blogs.create');
    Route::post('/create', 'BlogController@store')->name('blogs.store');
    Route::get('/{id}/update', 'BlogController@edit')->name('blogs.edit');
    Route::post('/{id}/update', 'BlogController@update')->name('blogs.update');
    Route::get('/{id}/destroy', 'BlogController@destroy')->name('blogs.destroy');
});
Route::prefix('categories')->group(function () {
    Route::get('/', 'CategoryController@index')->name('categories.index');
    Route::get('{id}/detail', 'CategoryController@show')->name('categories.show');
    Route::get('/create', 'CategoryController@create')->name('categories.create');
    Route::post('/create', 'CategoryController@store')->name('categories.store');
    Route::get('/{id}/update', 'CategoryController@edit')->name('categories.edit');
    Route::post('/{id}/update', 'CategoryController@update')->name('categories.update');
    Route::get('/{id}/destroy', 'CategoryController@destroy')->name('categories.destroy');
});
