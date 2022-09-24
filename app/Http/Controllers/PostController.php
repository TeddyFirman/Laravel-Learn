<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        // Untuk searching dibawah ini
        // $posts = Post::latest();

        // if(request('search')) {
        //     $posts->where('title', 'like', '%' . request('search') . '%')->orWhere('body', 'like', '%' . request('search') . '%');
        // }

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;

        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;

        }

        return view('posts', [
            'title' => 'All Posts' . $title,
            'active' => 'blog',
            // "posts" => Post::all()
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->get()
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
