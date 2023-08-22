<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show(Post $post)
    {

    }

    public function edit(Post $post)
    {

    }

    public function update(Request $request, Post $post)
    {

    }

    public function destroy(Request $request, Post $post)
    {

    }
}
