<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <strong>{{ config('app.name') }} <small> - {{ config('app.version') }}</small></strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/users') }}">Userlist</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin') }}">Backend</a>
                        </li>
                    @endauth
                @endif
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                @if (Route::has('login'))
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('register') }}">Register</a>
                            </li>
                        @endif
                    @endguest
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();   document.getElementById('logout-form').submit();"> {{ __('Logout') }}
                                <span class="sr-only">(current)</span></a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                              style="display: none;">
                            @csrf
                        </form>
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>