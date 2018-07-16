<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store()
    {
               
        $this-> validate(request(), ['author'=> 'required', 'text'=> 'required']);
        
        Post::create([
            'author'=> request('author'),
            'text'=> request('text')
            
        ]);
        return redirect('/posts/$id');  
    }//
}
