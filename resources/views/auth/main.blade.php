<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('admin._partials._head')

<body>

    <main class="auth-wrapper">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-lg-6 px-0 brand-case text-center d-flex justify-content-center align-items-center">
                    <div>
                        <img src="{{ asset('img/jimmy_apartments_logo.png') }}" alt="Jimmy's Apartments Logo" srcset="{{ asset('img/jimmy_apartments_logo.svg') }} 1x">
                        <hr>
                        <p class="info-dashboard mt-3">
                            <span>Website Admin Panel</span><br>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex flex-column align-items-center justify-content-center py-5">
                    <div class="card auth-card">
                        <div class="card-header d-flex flex-nowrap justify-content-center align-items-center">
                            <img src="{{ asset('img/admin_auth_icon_check.png') }}" srcset="{{ asset('img/admin_auth_icon_check.svg') }} 1x" class="mr-3">
                            @yield('title')
                        </div>
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('admin._partials._scripts')
</body>
</html>
