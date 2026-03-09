<div class="dropdown-logout dropdown">
    <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="{{ asset('img/admin_auth_icon_check.png') }}" srcset="{{ asset('img/admin_auth_icon_check.svg') }} 1x" class="mr-3">
        <span class="d-none d-lg-inline">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
           <img src="{{ asset('img/admin_auth_icon_arrow.png') }}" srcset="{{ asset('img/admin_auth_icon_arrow.svg') }} 1x" class="mr-2">
           Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>
