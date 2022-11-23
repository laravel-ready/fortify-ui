<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('fortify-ui::starter.layout.partials.head')
</head>

<body>
    <div id="app">
        {{-- Navbar --}}
        @include('fortify-ui::starter.layout.partials.navbar')

        <main>
            <!-- Auth Card Container -->
            <div class="auth-card-container">
                @yield('content')
            </div>
        </main>
    </div>
</body>

@yield('footerScripts')

</html>
