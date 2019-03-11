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


Route::get('/', 'FrontendController@index')->name('index');
Route::get('/home', 'FrontendController@home')->name('home');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/contact', 'FrontendController@contact')->name('contact');



Route::group(['prefix' => 'post'], function () {

    Route::get('', 'PostController@simplepost')->name('simplepost');

    Route::get('/create', 'PostController@create')->name('create');

    Route::post('/store','PostController@store')->name('store');

    Route::get('/show/{id}','PostController@show')->name('show');

    Route::get('/edit/{id}','PostController@edit')->name('edit');

    Route::get('/delate/{id}','PostController@delate')->name('delate');

});

Auth::routes();

