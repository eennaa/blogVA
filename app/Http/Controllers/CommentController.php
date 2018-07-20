<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;   // mozda ovo i ne treba, sama sam dodala
use App\Post;
use App\Mail\CommentRecieved;
use Illuminate\Support\Facades\Mail;   //// obrati paznju na ovo, moras sama da dodas

class CommentController extends Controller
{

//// GLUPOST KOJU SAM JA PISALA, NI SAMA NE ZNAM ZASTO
//     public function store()
//     {
               
//         $this-> validate(request(), ['author'=> 'required', 'text'=> 'required', 'post_id'=> 'required']);
        
//         Comment::create([
//             // 'author'=> request('author'),
//             'author'=> 'Ivana' ,// auth()->user()->name,
//             'text'=> request('text'),
//             'post_id'=> 1
            
//         ]);
//         return redirect('/posts/'.$post->id);  
//     }//

        public function store(Post $post)
        {
           // $this-> validate(request(), ['author'=> 'required', 'text'=> 'required', 'post_id'=> 'required']);

            $post->comments()->create([
                'author' => auth()->user()->name,
                'text' => request('text'),
                'post_id' => $post->id
            ]);

            Mail::to($post->user)->send(new CommentRecieved($post));

            return redirect('/posts/'.$post->id);
        }


}
