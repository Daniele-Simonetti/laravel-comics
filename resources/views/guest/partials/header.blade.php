<header class="container-70">
  <div class="logo">
    <img src="{{asset('img/dc-logo.png')}}" alt="logo">
  </div>
  <nav class="header_nav">
    <ul class="header_nav_list">
      <li class="header_nav_list-item"><a href="{{route('home')}}">Characters</a></li>
      <li class="header_nav_list-item"><a class="{{ 'home' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('home')}}">Comics</a></li>
      <li class="header_nav_list-item"><a href="{{route('home')}}">Movies</a></li>
      <li class="header_nav_list-item"><a href="{{route('home')}}">Tv</a></li>
      <li class="header_nav_list-item"><a href="{{route('home')}}">Games</a></li>
      <li class="header_nav_list-item"><a href="{{route('home')}}">Collectibles</a></li>
      <li class="header_nav_list-item"><a href="{{route('home')}}">Videos</a></li>
      <li class="header_nav_list-item"><a href="{{route('home')}}">fans</a></li>
      <li class="header_nav_list-item"><a href="{{route('home')}}">News</a></li>
      <li class="header_nav_list-item"><a class="{{ 'shop' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('home')}}">Shop</a></li>
    </ul>
  </nav>
  <div class="header_input">
    <input type="text" placeholder="Search">
  </div>
</header>