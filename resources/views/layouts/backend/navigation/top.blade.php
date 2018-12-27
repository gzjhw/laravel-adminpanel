<ul class="nav navbar-nav nav-flex-icons ml-auto">
    @auth
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
                <span class="clearfix d-none d-sm-inline-block">{{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">My Account</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item waves-effect" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>


            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    @endauth
    <li class="nav-item">
        <a class="nav-link">
            <i class="fa fa-book"></i>
            <span class="clearfix d-none d-sm-inline-block">help</span>
        </a>
    </li>
</ul>