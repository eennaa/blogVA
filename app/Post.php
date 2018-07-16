<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [    //sprecava da neko pusti skriptu koja ce unositi podatke kojima nema pristup
        'title', 'body', 'published'
    ];

    protected function published(){
        return self::where('published', 1)->get();

    }
}


