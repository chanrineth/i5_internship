<?php

namespace App\Http\Controllers;

use App\Category;
use App\CategoryPost;
use App\Http\Controllers\Controller;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PostController extends Controller{

    public function createpost(){
        $users = User::all();
        $categories =Category::all();
//        dd($categories);
        return view('Post.create-post', compact('users','categories'));
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'user_id' => 'required',
            'title' => 'required|min:10',
            'description' => 'required'
        ]);

        try {
            DB::beginTransaction();

            $post = null;
            if (isset($request->id)) {
                $post = Post::findOrFail($request->id);
                if ($post instanceof Post) {
                    $post->update($request->all());
                }
            } else {
                $post = Post::create($request->all());
            }

            if ($post instanceof Post) {

                $post->categories()->sync($request->categories);// $post->categories() : we go to intermidate table. $request->categories: take the value of form that name "categories".
            }

            DB::commit();
            return redirect()->route('service');
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }

    }
    public function show($id){

        $post = Post::findOrFail($id);
        return view('Post.show',compact('post'));

    }


    public function edit($id){

        $users = User::all();
        $categories = Category::all();
        $post = Post::findOrFail($id);
        return view('Post.edit', compact('post','users','categories'));
    }

    public function delate($id){

        // find post by id
        $post = Post::findOrFail($id);
        // delete post record
        $post->delete();
        // return to home
        return redirect()->route('service');
    }

}

