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
    return view('about');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/user', function () {

    $users = [
        [
            'id' => 1,
            'name' => 'Rineth',
            'sex' => "girl"
        ],
        [
            'id' => 2,
            'name' => 'Pisey',
            'sex' => "girl"
        ],
        [
            'id' => 3,
            'name' => 'Ratha',
            'sex' => "girl"
        ],
        [
            'id' => 4,
            'name' => 'uong',
            'sex' => "boy"
        ]

    ];

    return view('user',compact('users'));
});

Route::get('/user/{id}', function ($id) {

    $users = [
        [
            'id' => 1,
            'name' => 'Rineth',
            'sex' => "girl"
        ],
        [
            'id' => 2,
            'name' => 'Pisey',
            'sex' => "girl"
        ],
        [
            'id' => 3,
            'name' => 'Ratha',
            'sex' => "girl"
        ],
        [
            'id' => 4,
            'name' => 'uong',
            'sex' => "boy"
        ]

    ];

    $userFound =null ;

    foreach ($users as $user){

        if($user['id'] == $id ){
            $userFound  = $user;
        }
    }


    return view('show-user',compact('userFound'));
});
