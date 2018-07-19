<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [    //sprecava da neko pusti skriptu koja ce unositi podatke kojima nema pristup
        'title', 'body', 'published', 'user_id'
    ];

    protected function published(){
        return self::where('published', 1)->get();

    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}


