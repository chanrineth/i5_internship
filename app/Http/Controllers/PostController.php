<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller{

    public function createpost(){

        return view('Post.create-post');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);
//        $newPost = new Post();
//        $newPost->title = $request->title;
//        $newPost->description = $request->description;
//        $newPost->save();
//        return back();

        Post::create($request->all());
//        return back();
        return redirect()->route('service');

    }


}

