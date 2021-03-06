@extends('layouts.master')

@section('content')
<form method="POST" action="/register">    
  {{ csrf_field() }}

  <div class="form-group">
      <label for="name">Name</label>
      <input name="name" type="name" class="form-control" id="name">
      @include('partials.error-message', ['fieldName'=>'name'])
  </div>

  <div class="form-group">
      <label for="age">Age</label>
      <input name="age" type="number" class="form-control" id="age">
      @include('partials.error-message', ['fieldName'=>'age'])
  </div>

  <div class="form-group">
      <label for="email">Email</label>
      <input name="email" type="email" class="form-control" id="email">
      @include('partials.error-message', ['fieldName'=>'email'])
  </div>

  <div class="form-group">
      <label for="password">Password</label>
      <input name="password" type="password" class="form-control" id="password">
      @include('partials.error-message', ['fieldName'=>'password'])
  </div>

  
  
  <!-- <div class="form-group form-check">
      <input name="published" value="1" type="checkbox" class="form-check-input" id="published">
      <label class="form-check-label" for="published">Publish</label>
  </div> -->
  <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection