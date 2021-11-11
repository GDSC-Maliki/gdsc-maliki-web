<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <a href="index.html"><img src="{{ asset('landing/assets/img/logo.png') }}" style="height: 50px;" alt=""></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        {{-- <a href="index.html" class="logo"><img src="{{ asset('landing/assets/img/logo.png') }}" alt="" class="img-fluid"></a> --}}

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="{{ route('welcome') }}">Home</a></li>
                @if (Request::url() === url('/'))
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    {{-- <li><a class="nav-link scrollto" href="{{ route('calendar.gdsc') }}">Calendar GDSC</a></li> --}}
                @endif

                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <li><a class="nav-link scrollto" href="{{ url('/home') }}">Dashboard</a></li>
                        @else
                            <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
                            {{-- @if (Route::has('register'))
							<a href="{{ route('register') }}">Register</a>
						@endif --}}
                        @endauth
                    </div>
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->

    </div>
</header>
