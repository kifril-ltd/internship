<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show() {
        return view('posts.index', ['posts' => Post::all()]);
    }

    public function create(Request $request) {
        $valid = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'date' => 'required|date_format:d.m.Y',
        ]);

        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->date = $request->input('date');

        $post->save();

        return redirect()->route('main');
    }

    public function update(Request $request, $id) {
        $valid = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'date' => 'required|date_format:d.m.Y',
        ]);

        $post = Post::find($request->route('id'));
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->date = $request->input('date');

        $post->save();

        return redirect()->route('main');
    }
}
