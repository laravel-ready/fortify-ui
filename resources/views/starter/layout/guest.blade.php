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
