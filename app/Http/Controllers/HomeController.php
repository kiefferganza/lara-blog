<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     */
    public function index()
    {
        $posts = Post::orderBy("created_at",'desc')->get();
        return view('home', compact(
            'posts'
        ));
    }

    public function create()
    {
        return view('posts.create');
    }


}
