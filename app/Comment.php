<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [    //mozda ovo ovde ne treba alli....
        'author', 'text', 'post_id'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }//
}
