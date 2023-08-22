<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderByDesc('id')->get();
        return view('admin.posts.index', compact('posts'));
    }

    public function create()
    {
        $post = new Post();
        return view('admin.posts.create', compact('post'));
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->fill($request->all());
        $post->save();

        return redirect()->route('admin.posts.show', $post);
    }

    public function show(Post $post)
    {
        return view('admin.posts.show', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $post->fill($request->all());
        $post->update();

        return redirect()->route('admin.posts.show', $post);
    }

    public function destroy(Request $request, Post $post)
    {
        $post->delete();
        return redirect()->route('admin.posts.index'); // TODO middleware
    }
}
