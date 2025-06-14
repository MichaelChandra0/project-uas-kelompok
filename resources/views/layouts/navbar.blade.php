<div class="top-bar">


    <div class="title">
    <div class = "amen" style="font-size: 24px; font-weight: bold;">Urban Legend Fast Food</div>
    </div>

    </div>
  
    
  
  </div>


  <nav>
    <ul>
      <li><a href="/">Home</a></li>
      @if(Auth::check())
      @if(Auth::user()->role === "user" || Auth::user()->role === "admin")
      <li><a href="{{ route('catalog.index') }}">Shop</a></li>
      @endif
      @else
      <li><a href="{{ route('login-user') }}">Shop</a></li>
      @endif
      <li><a href="{{ route('about-us')}}">About Us</a></li>
      <li><a href="{{ route('contact')}}">Contact Us</a></li>
    </ul>

    <div class="account">

      @if(Auth::user())
      <p><a href="{{ route('logout')}}">Logout</a></p>
      @else
      <p><a href="{{ route('login-user')}}">Login</a></p>
      <p><a href="{{ route('register')}}">Register</a></p>
      @endif
    </div>
  </nav>