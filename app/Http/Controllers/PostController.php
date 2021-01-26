<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdatePost;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();

        return view("admin.posts.index", compact('posts'));
    }

    public function create()
    {

        return view("admin.posts.create");
    }
    public function store(StoreUpdatePost $request)
    {
        Post::create($request->all());


        return redirect()->route("posts.index");
    }
}
