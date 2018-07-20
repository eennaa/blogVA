<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tag;


class TagController extends Controller
{
    public function showPostsWithTag(Tag $tag)
    {
        Tag::whereName($tag)->get()->first();
        $post = $tag->posts;

        return view('posts.index', compact('posts'));
    }
    //
}
