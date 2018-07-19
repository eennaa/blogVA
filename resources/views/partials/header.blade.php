
<div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="/posts">Home</a>

          @if(auth()->check())
            <a class="nav-link active ml-auto" href="#">{{ auth()->user()->name}}</a>
            <a class="nav-link active ml-auto" href="/logout">Logout</a>
          @else
            <a class="nav-link active ml-auto" href="/login">Login</a>
            <a class="nav-link active ml-auto" href="/register">Register</a>
          @endif

        </nav>
      </div>
</div>

<div class="blog-header">
      <div class="container">
        <h1 class="blog-title">Enin Blog</h1>
        <p class="lead blog-description">Vrlo unikatan, vrlo komplikovan</p>
      </div>

      
</div>