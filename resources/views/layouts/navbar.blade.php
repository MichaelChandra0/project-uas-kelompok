<div class="top-bar">


    <div class="title">
    <div class = "amen" style="font-size: 24px; font-weight: bold;">Urban Legend Fast Food</div>
    </div>
    
    <div class="title-left">
    <input type="search" placeholder="Search your food">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-basket" viewBox="0 0 16 16">
  <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9zM1 7v1h14V7zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5"/>
</svg>

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
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
      </svg>

      @if(Auth::user())
      <p><a href="{{ route('logout')}}">Logout</a></p>
      @else
      <p><a href="{{ route('login-user')}}">Login</a></p>
      <p><a href="{{ route('register')}}">Register</a></p>
      @endif
    </div>
  </nav>