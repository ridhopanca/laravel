<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::get();
        return view('posts.index', compact('post'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
