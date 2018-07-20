Hi {{ $post->user->name }}!

You've a new comment on your <a href="{{ url('posts/' . $post->id) }}"><b> {{ $post->title }} </b></a> post.
<br><br>
<div>
  Comment content:<br>
  <p><i>
  " {{ $post->comments->last()->text }} "
  </i></p>
</div>
