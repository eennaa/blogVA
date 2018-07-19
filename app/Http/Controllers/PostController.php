<?php

namespace App\Http\Controllers;

#namespace App\Http\Controllers\PostController;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $posts = Post::all();
        #$posts = Post::published();
        return view ('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with('comments')->find($id);
        return view('posts.show', compact(['post']));
    }

    public function probalica()
    {
        
        return view('proba');
    }

    public function create()
    {
        return view ('posts.create');
    }

    public function store(Post $post)
    {
        // $post = new Post();        // moze i ovako ali postoji prostiji lepsi Laravel nacin

        // $post->title = request('title');
        // $post->body = request('body');
        // $post->published = (bool) request('published');

        // $post->save();

        // return redirect('/posts'); 
        
        $this-> validate(request(), ['title'=> 'required', 'body'=> 'required']);
        
        Post::create([
            'title'=> request('title'),
            'body'=> request('body'),
            'published'=> (bool) request('published'),
            'user_id' => auth()->user()->id
        ]);
        return redirect('/posts');  
    }
}
