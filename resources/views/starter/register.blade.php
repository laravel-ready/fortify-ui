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
            <input class="input" autocomplete="off" id="name" name="name" type="text" placeholder="{{ __('fortify-ui::auth.placeholder_name') }}"/>
        </div>

        <!-- Username Input Container -->
        <div class="input-container">
            <!-- Icon Label -->
            <label for="username">
                @include('fortify-ui::starter.components.svg-icons.username')
            </label>

            <!-- Input -->
            <input class="input" autocomplete="off" id="username" name="username" type="text" placeholder="{{ __('fortify-ui::auth.placeholder_username') }}" autocomplete="off"/>
        </div>

        <!-- Password Input Container -->
        <div class="input-container">
            <!-- Icon Label -->
            <label for="password">
                @include('fortify-ui::starter.components.svg-icons.password')
            </label>

            <!-- Input -->
            <input class="input" autocomplete="off" id="password" name="password" type="password" placeholder="{{ __('fortify-ui::auth.placeholder_password') }}" autocomplete="off"/>

            <!-- Eye Toggle -->
            <button type="button" id="eye-toggle" class="eye-toggle">
                <svg id="eye-open" style="display: none;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                    <path
                        d="M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M12,4.5C17,4.5 21.27,7.61 23,12C21.27,16.39 17,19.5 12,19.5C7,19.5 2.73,16.39 1,12C2.73,7.61 7,4.5 12,4.5M3.18,12C4.83,15.36 8.24,17.5 12,17.5C15.76,17.5 19.17,15.36 20.82,12C19.17,8.64 15.76,6.5 12,6.5C8.24,6.5 4.83,8.64 3.18,12Z" />
                </svg>

                <svg id="eye-close" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                    <path
                        d="M2,5.27L3.28,4L20,20.72L18.73,22L15.65,18.92C14.5,19.3 13.28,19.5 12,19.5C7,19.5 2.73,16.39 1,12C1.69,10.24 2.79,8.69 4.19,7.46L2,5.27M12,9A3,3 0 0,1 15,12C15,12.35 14.94,12.69 14.83,13L11,9.17C11.31,9.06 11.65,9 12,9M12,4.5C17,4.5 21.27,7.61 23,12C22.18,14.08 20.79,15.88 19,17.19L17.58,15.76C18.94,14.82 20.06,13.54 20.82,12C19.17,8.64 15.76,6.5 12,6.5C10.91,6.5 9.84,6.68 8.84,7L7.3,5.47C8.74,4.85 10.33,4.5 12,4.5M3.18,12C4.83,15.36 8.24,17.5 12,17.5C12.69,17.5 13.37,17.43 14,17.29L11.72,15C10.29,14.85 9.15,13.71 9,12.28L5.6,8.87C4.61,9.72 3.78,10.78 3.18,12Z" />
                </svg>
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
                    {{ __('fortify-ui::auth.login') }}
                </span>

                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="24" height="24" viewBox="0 0 24 24">
                    <path
                        d="M19,3H5C3.89,3 3,3.89 3,5V9H5V5H19V19H5V15H3V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3M10.08,15.58L11.5,17L16.5,12L11.5,7L10.08,8.41L12.67,11H3V13H12.67L10.08,15.58Z" />
                </svg>
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('fortify-ui::auth.link_forgot_your_password') }}
                </a>
            @endif
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
