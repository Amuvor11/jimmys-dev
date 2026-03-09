<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('admin/_partials/_head')

<body class="{{ str_replace( '.', '-', Route::currentRouteName()) }}">

    @include('admin/_partials/_nav')

    <div id="app" class="b2b-content">
        <div class="container">
            @yield('content')
        </div>
    </div>

    @include('admin/_partials/_scripts')
</body>
</html>
