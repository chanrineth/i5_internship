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



Route::get('/service','FrontendController@service')->name('service');

Route::get('/','FrontendController@home')->name('home');
Route::get('/about', 'FrontendController@about')->name('about');
Route::get('/contact','FrontendController@contact')->name('contact');
Route::get('/portfolio','FrontendController@portfolio')->name('portfolio');


Route::get('/team','TeamController@team')->name('team');

Route::group(['prefix' => 'post'],function (){

    Route::get('create','PostController@createpost')->name('create-post');
    Route::post('store','PostController@store')->name('store');
});


Route::group(['prefix' => 'user'],function (){

    Route::get('','UserController@user')->name('user');
    Route::get('/{id}','UserController@getUser')->name('get_user');

});



