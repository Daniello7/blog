<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post')); // Es lo mismo que ['post' => $post]
        // Si recibe $id de parámetro
        // $post = Post::find($id)
        // return 'Detalle del post ' . $post->title;
    }
}
