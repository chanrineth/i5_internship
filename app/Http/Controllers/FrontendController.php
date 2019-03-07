<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;

class FrontendController extends Controller {

    public function home(){

        $posts = Post::orderBy('created_at','desc')->with('user')->get();

        return view('service',compact('posts'));
    }

    public function service(){

        $posts = Post::orderBy('created_at','desc')->with('user')->get();


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