<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $user = Auth::id();
        $posts = Post::where('user_id', $user)->get();

        return view('posts.index',compact(
            'posts'
        ));
    }

    public function create()
    {
        return view('posts.create');
    }


    public function store(PostRequest $request): \Illuminate\Http\RedirectResponse
    {
        $post = new Post;
        $user = Auth::id();

        $post->title = $request->postTitle;

        $post->body = $request->postBody;

        $post->user_id = $user;

        $post->save();

        return redirect()->route('home');

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $post = Post::where('id', $id)->get();

        return response()->json(compact('post'));
    }

    public function update(PostRequest $request, $id)
    {
        $post = Post::find($id);
        
        $post->title = $request->postTitle;
        
        $post->body = $request->postBody;

        $post->save();

        return redirect()->route('posts.index');
    }
}
