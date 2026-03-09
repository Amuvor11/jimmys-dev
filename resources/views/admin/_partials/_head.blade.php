<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')@hasSection('title') - @endif{{ config('app.name') }} Dashboard</title>
    <!-- Styles -->
    @yield('styles')
    <link rel="stylesheet" text="text/css" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" text="text/css" href="{{ asset('css/admin.css') }}?v=0.9">
</head>
