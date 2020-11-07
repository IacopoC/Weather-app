<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Weather app</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item {{ Request::path() === 'login' ? 'active': '' }}">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item {{ Request::path() === 'register' ? 'active': '' }}">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrati') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu bg-dark" aria-labelledby="dropdown-user">
                            <a class="dropdown-item text-white {{ Request::path() === 'home' ? 'active': '' }}" href="{{ route('home') }}">Profilo</a>
                            <a class="dropdown-item text-white {{ Request::path() === 'history' ? 'active': '' }}" href="/history">Cronologia</a>
                            <a class="dropdown-item text-white" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @if(!empty(Auth::user()->hometown))
                    <li class="nav-item">
                        <a class="nav-link">Località: {{ Auth::user()->hometown }}</a>
                    </li>
                        @endif
                @endguest
            </ul>
        </div>
    </div>
</nav>
