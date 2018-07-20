@extends('layouts.master')

@section('content')

@foreach($user->posts as $post)
  <!-- <div class="blog-post">
    <h2 class="blog-post-title">{{ $post->title }}</h2>
    
    <p class="blog-post-meta">{{ $post->created_at}} </p> -->
    <h2 class="blog-post-title"> <a href="{{ route('single-post', ['id'=> $post->id]) }}">{{ $post->title }}</a><h2>
    <h5><p> {{ $post->body }} </p> </h5>
  <!-- </div> -->
@endforeach



  
<br> <br>



@endsection