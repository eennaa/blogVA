<?php

namespace App\Http\Controllers;

#namespace App\Http\Controllers\PostController;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        #$posts = Post::published();
        return view ('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function probalica()
    {
        
        return view('proba');
    }

    public function create()
    {
        return view ('posts.create');
    }

    public function store()
    {
        // $post = new Post();        // moze i ovako ali postoji prostiji lepsi Laravel nacin

        // $post->title = request('title');
        // $post->body = request('body');
        // $post->published = (bool) request('published');

        // $post->save();

        // return redirect('/posts');     
        Post::create([
            'title'=> request('title'),
            'body'=> request('body'),
            'published'=> (bool) request('published'),
        ]);
        return redirect('/posts');  
    }
}
