<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return response()->json(Post::paginate(10));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = Post::create([
            'user_id' => $request->user()->id,
            'title' => $data['title'],
            'content' => $data['content'],
        ]);

        // Dispatch event
        event(new \App\Events\PostCreated($post));

        return response()->json($post, 201);
    }
}