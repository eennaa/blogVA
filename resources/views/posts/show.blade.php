@extends('layouts.master')

@section('content')


<div class="blog-post">
  <h2 class="blog-post-title">{{ $post->title }}</h2>

  <p class="blog-post-meta">{{ $post->created_at}} </p>
  <p> {{ $post->body }} </p>
  

<!-- <form method="POST" action="/posts/{{ $post->id }}/comments">     -->
<form method="POST" action="{{ route('comments-post', ['post_id' => $post->id]) }}">

  {{ csrf_field() }}  

  <div class="form-group">
      <label for="text">Comment</label>
      <textarea name="text" class="form-control" id="text"></textarea>
      <small class="form-text text-muted">What do you think?</small>
      @include('partials.error-message', ['fieldName'=>'text'])
  </div>  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  
<br> <br>

@foreach($post->comments as $comment)
  <div style="background-color:lightblue;">
    <h4>{{ $comment->author }}</h4>
    <p>{{ $comment->text }} </p>
  </div>
  @endforeach


</div>
@endsection