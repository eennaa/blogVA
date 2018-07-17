<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store()
    {
               
        $this-> validate(request(), ['author'=> 'required', 'text'=> 'required']);
        
        Comment::create([
            'author'=> request('author'),
            'text'=> request('text'),
            'post_id'=> $post->id
            
        ]);
        return redirect('/posts/'.$post->id);  
    }//
}
