<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Weather app</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::path() === '/' ? 'active': '' }}">
                    <a class="nav-link" href="{{ url('/') }}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::path() === 'forecast' ? 'active': '' }}">
                    <a class="nav-link" href="{{ url('/forecast') }}">Forecast
                    </a>
                </li>
                @if (Route::has('login'))
                    <li class="nav-item {{ Request::path() === 'login' ? 'active': '' }}">
                        @auth
                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        @else
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                        @if (Route::has('register'))
                            <li class="nav-item {{ Request::path() === 'register' ? 'active': '' }}">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                         </li>
                         @endif
                     @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>
