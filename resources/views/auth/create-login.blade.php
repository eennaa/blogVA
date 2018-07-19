@extends('layouts.master')

@section('content')
<form method="POST" action="/login">    
  {{ csrf_field() }}

  <div class="form-group">
      <label for="email">Email</label>
      <input name="email" type="email" class="form-control" id="email" required>
      @include('partials.error-message', ['fieldName'=>'email'])
  </div>

  <div class="form-group">
      <label for="password">Password</label>
      <input name="password" type="password" class="form-control" id="password" required>
      @include('partials.error-message', ['fieldName'=>'password'])
  </div>
 
  
 
  <button type="submit" class="btn btn-primary">Login</button>
  @include('partials.error-message', ['fieldName'=>'message'])
</form>
@endsection