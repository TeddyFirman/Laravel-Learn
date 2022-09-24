<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest();

        if(request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%');
        }

        return view('posts', [
            'title' => 'All Posts',
            'active' => 'blog',
            // "posts" => Post::all()
            'posts' => $posts->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "active" => "blog",
            "post" => $post
        ]);
    }
}
