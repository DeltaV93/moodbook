<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="brandLogo navbar-brand " href="/"><span class="text__primary heavy">Mood</span>Book</a>

@if (Auth::check())
      <a class="brandLogo navbar-brand newEntry hidden-sm hidden-xs" href="{{ url('user/create') }}"><span class="text__primary">+</span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">

        <li><a class="navbar-items hidden-md hidden-lg" href="{{ url('user/create') }}">Add New Entry</a></li>
        <li><a class="navbar-items" href="{{ url('/user')}}">{{ $fullname }}</a></li>
        <li><a class="navbar-items" href="{{ url('/logout')}}">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
@else 
  </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a class="navbar-items" href="{{ url('/login') }}">Login</a></li>
        <li><a class="navbar-items" href="{{ url('/register') }}">Sign Up</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  @endif
  </div><!-- /.container-fluid -->
</nav>