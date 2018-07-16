@extends('layouts.master')

@section('content')
<form method="POST" action="/posts">    
  {{ csrf_field() }}

  <!-- <div class="alert-danger">
    <ul>
      @foreach($errors->get('title') as $error)
        <li> {{$error}} </li>
      @endforeach
    </ul>
  </div> -->
  

  <div class="form-group">
      <label for="title">Title</label>
      <input name="title" type="text" class="form-control" id="title">
      @include('partials.error-message', ['fieldName'=>'title'])
  </div>

  <!-- <div class="alert-danger">  
    <ul>
      @foreach($errors->get('body') as $error)
        <li> {{$error}} </li>
      @endforeach
    </ul>
  </div> -->
  

  <div class="form-group">
      <label for="body">Body</label>
      <textarea name="body" class="form-control" id="body"></textarea>
      <small id="emailHelp" class="form-text text-muted">Write something amazing!</small>
      @include('partials.error-message', ['fieldName'=>'body'])
  </div>

  <!-- <div class="alert-danger">
    <ul>
      @foreach($errors->get('published') as $error)
        <li> {{$error}} </li>
      @endforeach
    </ul>
  </div> -->
  


  <div class="form-group form-check">
      <input name="published" value="1" type="checkbox" class="form-check-input" id="published">
      <label class="form-check-label" for="published">Publish</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection