@extends('layouts.master')

@section('content')


<div class="blog-post">
  <h2 class="blog-post-title">{{ $post->title }}</h2>

  <p class="blog-post-meta">{{ $post->created_at}} </p>
  <p> {{ $post->body }} </p>

  @foreach($post->comments as $comment)

  <div>{{ $comment->author }}</div>
  <ul>{{ $comment->text }} </ul>
  @endforeach

  
</div>
@endsection