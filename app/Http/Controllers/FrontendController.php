<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;

class FrontendController extends Controller {

    public function home(){

        return view('service');
    }

    public function service(){

        $posts = Post::orderBy('created_at','desc')->get();

//        dd($posts);
        return view('service',compact('posts'));
    }
    public function about(){

        return view('about');
    }
    public function contact(){

        return view('contact');
    }
    public function portfolio(){

        return view('portfolio');
    }

}