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

Route::get('/', 'BlogController@index');

Auth::routes();
Route::get('/blog', 'BlogController@index');
Route::get('/blog/create', 'BlogController@create')->name('blog.create');
Route::post('/blog/store', 'BlogController@store')->name('blog.store');
Route::get('/blog/{id}', 'BlogController@show')->name('blog.show');
Route::get('/blog/{id}/edit', 'BlogController@edit')->name('blog.edit');
Route::patch('/blog/{id}/update', 'BlogController@update')->name('blog.update');
Route::delete('/blog/{id}/delete', 'BlogController@destroy')->name('blog.delete');

Route::get('/home', 'HomeController@index')->name('home');
