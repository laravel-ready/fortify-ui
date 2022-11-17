@extends('fortify-ui::starter.layout.main')

@section('content')
    <!-- Title -->
    <div class="title">
        <!-- Form Title -->
        <h1 class="form-title">
            {{ __('fortify-ui::auth.register') }}
        </h1>
    </div>

    <!-- Auth Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf

        {{-- Social Register --}}
        @include('fortify-ui::starter.components.social-register')

        <!-- Email Input Container -->
        <div class="input-container">
            <!-- Icon Label -->
            <label for="email">
                @include('fortify-ui::starter.components.svg-icons.email')
            </label>

            <!-- Input -->
            <input class="input" autocomplete="off" id="email" name="email" type="email" placeholder="{{ __('fortify-ui::auth.placeholder_email_address') }}" />
        </div>

        <!-- Name / Surname Input Container -->
        <div class="input-container">
            <!-- Icon Label -->
            <label for="name">
                @include('fortify-ui::starter.components.svg-icons.name')
            </label>

            <!-- Input -->
            <input class="input" autocomplete="off" id="name" name="name" type="text" placeholder="{{ __('fortify-ui::auth.placeholder_name') }}" />
        </div>

        <!-- Username Input Container -->
        <div class="input-container">
            <!-- Icon Label -->
            <label for="username">
                @include('fortify-ui::starter.components.svg-icons.username')
            </label>

            <!-- Input -->
            <input class="input" autocomplete="off" id="username" name="username" type="text" placeholder="{{ __('fortify-ui::auth.placeholder_username') }}" autocomplete="off" />
        </div>

        <!-- Password Input Container -->
        <div class="input-container">
            <!-- Icon Label -->
            <label for="password">
                @include('fortify-ui::starter.components.svg-icons.password')
            </label>

            <!-- Input -->
            <input class="input" autocomplete="off" id="password" name="password" type="password" placeholder="{{ __('fortify-ui::auth.placeholder_password') }}" autocomplete="off" />

            <!-- Eye Toggle -->
            <button type="button" id="eye-toggle" class="eye-toggle">
                @include('fortify-ui::starter.components.svg-icons.eye-open')
                @include('fortify-ui::starter.components.svg-icons.eye-close')
            </button>
        </div>

        <!-- Check Input Container -->
        <div class="check-input-container">
            {{-- TODO: add terms and conditions --}}
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
                    {{ __('fortify-ui::auth.register') }}
                </span>

                @include('fortify-ui::starter.components.svg-icons.arrow-right')
            </button>

            <a class="btn btn-link" href="{{ route('login') }}">
                {{ __('fortify-ui::auth.link_do_you_have_an_account') }}
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
