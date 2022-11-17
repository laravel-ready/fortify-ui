<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="icon" href="https://fav.farm/👻" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/apps/auth/auth.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        {{-- Navbar --}}
        @include('fortify-ui::starter.components.navbar')

        <main>
            <!-- Auth Card Container -->
            <div class="auth-card-container">
                <!-- Auth Card -->
                <div class="auth-card">
                    <!-- Backward Card -->
                    <div class="backward-card">

                    </div>

                    <!-- Front Card -->
                    <div class="front-card">
                        <!-- Card Container -->
                        <div class="card-container">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

@yield('footerScripts')

</html>
