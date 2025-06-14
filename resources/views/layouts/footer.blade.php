<footer class="site-footer">
    <h4>Urban Legend Fast Food</h4>

    <nav class="footer-nav">
        <a href="/">Home</a>
        @if(Auth::check()) 
            @if(Auth::user()->role === "user" || Auth::user()->role === "admin")
                <a href="{{ route('catalog.index') }}">Shop</a>
            @endif
        @else
            <a href="{{ route('login-user') }}">Shop</a>
        @endif
        <a href="{{ route('contact') }}">Contact</a>
        <a href="{{ route('about-us') }}">About</a>
    </nav>

    <p>&copy; {{ date('Y') }} All rights reserved</p>
</footer>
