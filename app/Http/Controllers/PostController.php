<?php

namespace App\Http\Controllers;


use App\Category;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\compare;

class PostController extends Controller
{

    public function simplepost(){

        return view('post');
    }

    public function create(){

        $users = User::all();
        $categories = Category::all();

        return view ('posts.create',compact('users','categories'));
    }

    public function store(Request $request){

//        $post = Post::create($request->all());
//
//        $post->categories()->sync($request->categories);//save to table intermidate
//
//        $posts = Post::all();
//        //dd($post);
//        return redirect()->route('home');

        $this->validate($request, [
            'title' => 'required|min:10',
            'description' => 'required'
        ]);

        try {
            DB::beginTransaction();
            $user = auth()->user();
            $request['user_id'] = $user->id;

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
                $post->categories()->sync($request->categories);
            }

            DB::commit();
            return redirect()->route('home');
        } catch (\Exception $exception) {
            DB::rollBack();
            return $exception->getMessage();
        }



    }
    public function show($id)
    {
        $post = Post::findOrfail($id);
        return view('show',compact('post'));
    }

    public function  edit($id){

        $post=Post::findOrFail($id);
        $users = User::get();
        $categories = Category::all();
        return view('posts.edit',compact('post','users','categories'));

    }
    public function delate($id){

        $post =Post::findOrFail($id);
        $post->delete();
        return redirect()->route('home');
    }



}
