@extends('fortify-ui::starter.layout.guest')

@php
    $defaultUser = config('app.debug')
        ? app()
            ->make(\App\Models\User::class)
            ::where('email', 'super_admin@example.com')
            ->where('email', 'admin@example.com')
            ->first()
        : false;
@endphp

@section('content')
    <!-- Title -->
    <div class="title">
        <!-- Form Title -->
        <h1 class="form-title">
            {{ __('fortify-ui::auth.login') }}
        </h1>
    </div>

    <!-- Auth Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- Social Login --}}
        @include('fortify-ui::starter.components.social-login')

        <!-- Email Input Container -->
        <div class="input-container">
            <!-- Icon Label -->
            <label for="email">
                @include('fortify-ui::starter.components.svg-icons.email')
            </label>

            <!-- Input -->
            <input class="input" autocomplete="off" id="email" name="email" type="email" placeholder="{{ __('fortify-ui::auth.placeholder_email_address') }}"
                value="{{ $defaultUser->email ?? null }}" />
        </div>

        <!-- Password Input Container -->
        <div class="input-container">
            <!-- Icon Label -->
            <label for="password">
                @include('fortify-ui::starter.components.svg-icons.password')
            </label>

            <!-- Input -->
            <input class="input" autocomplete="off" id="password" name="password" type="password" placeholder="{{ __('fortify-ui::auth.placeholder_password') }}"
                value="{{ $defaultUser->email ?? null }}" />

            <!-- Eye Toggle -->
            <button type="button" id="eye-toggle" class="eye-toggle">
                @include('fortify-ui::starter.components.svg-icons.eye-open')
                @include('fortify-ui::starter.components.svg-icons.eye-close')
            </button>
        </div>

        <!-- Check Input Container -->
        <div class="check-input-container">
            <input id="checked-checkbox" type="checkbox" value="">

            <label for="checked-checkbox">
                {{ __('fortify-ui::auth.remember_me') }}
            </label>
        </div>

        {{-- Errors --}}
        <div>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            <span class="invalid-feedback" role="alert">
                                <strong>
                                    {{ $error }}
                                </strong>
                            </span>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Submit Button Container -->
        <div class="submit-button-container">
            <button type="submit">
                <span>
                    {{ __('fortify-ui::auth.login') }}
                </span>

                @include('fortify-ui::starter.components.svg-icons.login-gate')
            </button>

            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('fortify-ui::auth.link_forgot_your_password') }}
            </a>
        </div>
    </form>
@endsection

@section('footerScripts')
    <script>
        window.addEventListener('load', function() {
            // #region Password Eye Toggler

            const eyeToggleButton = document.getElementById('eye-toggle');

            if (eyeToggleButton) {
                const passwordInput = document.getElementById('password'),
                    eyeOpen = document.getElementById('eye-open'),
                    eyeClose = document.getElementById('eye-close');

                eyeToggleButton.addEventListener('click', function() {
                    console.log(passwordInput);

                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        eyeOpen.style.display = 'block';
                        eyeClose.style.display = 'none';
                    } else {
                        passwordInput.type = 'password';
                        eyeOpen.style.display = 'none';
                        eyeClose.style.display = 'block';

                    }
                });
            }

            // #endregion
        });
    </script>
@endsection()