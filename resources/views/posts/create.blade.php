@extends('layouts.master')

@section('content')
<form method="POST" action="/posts">    
  {{ csrf_field() }}      
  <div class="form-group">
      <label for="title">Title</label>
      <input name="title" type="text" class="form-control" id="title">
  </div>
  <div class="form-group">
      <label for="body">Body</label>
      <textarea name="body" class="form-control" id="body"></textarea>
      <small id="emailHelp" class="form-text text-muted">Write something amazing!</small>
  </div>
  <div class="form-group form-check">
      <input name="published" value="1" type="checkbox" class="form-check-input" id="published">
      <label class="form-check-label" for="published">Publish</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection