<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('components.seo', ['seo' => $seo ?? null ])

    <!-- Scripts -->
    @yield('content-top')
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/sleek-dashboard/dist/assets/css/sleek.min.css" rel="stylesheet"/>

    <meta name="api-base-url" content="{{ url('/api') }}" />
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
</body>
</html>
