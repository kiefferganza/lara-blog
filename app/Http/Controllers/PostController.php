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

        return view('posts.index');
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
}
