<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller{

    public function user(){

        $users = [
            [
                'id' => 1,
                'name' => 'Rineth',
                'sex' => 'girl'
            ],
            [
                'id' => 2,
                'name' => 'Pisey',
                'sex' => 'girl'
            ],
            [
                'id' => 3,
                'name' => 'Ratha',
                'sex' => 'boy'
            ],
        ];
        return view('user' , compact('users'));

    }

    public function getUser($id){
        $users = [
            [
                'id' => 1,
                'name' => 'Rineth',
                'sex' => 'girl'
            ],
            [
                'id' => 2,
                'name' => 'Pisey',
                'sex' => 'girl'
            ],
            [
                'id' => 3,
                'name' => 'Ratha',
                'sex' => 'boy'
            ],
        ];

        $userFound = null;

        foreach ($users as $user) {

            if ($user['id']==$id) {
                $userFound = $user;
            }
        }

        return view('user-show',compact('userFound'));
    }

}