<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('components.seo', ['seo' => $seo ?? null ])

    <!-- Scripts -->
    @yield('content-top')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <meta name="api-base-url" content="{{ url('/api') }}" />

    <link rel="stylesheet" href="https://unpkg.com/sleek-dashboard/dist/assets/css/sleek.min.css"/>
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500"/>
</head>
<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <div class="wrapper">
        <!-- left-sidebar -->
        @include('components.dashboard.left-sidebar')
        <div class="page-wrapper">
            <!-- Header -->
            @include('components.dashboard.header')
            <div class="content-wrapper">
                <div class="content">
                    @yield('content')
                </div>
            </div>
            @include('components.dashboard.footer')
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/sleek-dashboard/dist/assets/js/sleek.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
</body>
</html>
