@extends('layouts.master')

@section('content')
<a class="btn btn-primary" href="{{'posts/create'}}">
  Create post
</a>
  

@foreach($posts as $post)
<div class="blog-post">
  <h2 class="blog-post-title"><a href="{{action('PostController@show', $post->id)}}">{{$post->title}}</a></h2>

  <p class="blog-post-meta">{{ $post->created_at}} </p>
  <p> {{ $post->body }} </p>    
</div>
@endforeach


<a class="btn btn-primary" href="{{'posts/create'}}">
  Create comment
</a>
@endsection