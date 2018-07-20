@extends('layouts.master')

@section('content')
@if(auth()->check())
  <a class="btn btn-primary" href="{{'posts/create'}}">
    Create post
  </a>
@endif
  

@foreach($posts as $post)
<div class="blog-post">
  <h2 class="blog-post-title"><a href="{{action('PostController@show', $post->id)}}">{{$post->title}}</a></h2>

  <p class="blog-post-meta">{{ $post->created_at}} </p>
  <p> {{ $post->body }} </p> 
  <p> author: {{ $post->user->name}}   </p>   
</div>

@if(auth()->check())
  <a class="btn btn-primary" href="{{'/posts'}}">
      Create comment
  </a>
@else 
  <a class="btn btn-primary" href="{{'/login'}}">
      Create comment
  </a>
@endif


@endforeach


  

@endsection