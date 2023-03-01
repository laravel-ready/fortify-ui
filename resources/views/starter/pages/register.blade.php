@extends('layouts.guest')

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
            <input class="input" autocomplete="off" id="email" name="email" type="email"
                placeholder="{{ __('fortify-ui::auth.form.placeholder_email_address') }}" />
        </div>

        <!-- Name / Surname Input Container -->
        <div class="input-container">
            <!-- Icon Label -->
            <label for="name">
                @include('fortify-ui::starter.components.svg-icons.name')
            </label>

            <!-- Input -->
            <input class="input" autocomplete="off" id="name" name="name" type="text"
                placeholder="{{ __('fortify-ui::auth.form.placeholder_name') }}" />
        </div>

        <!-- Username Input Container -->
        <div class="input-container">
            <!-- Icon Label -->
            <label for="username">
                @include('fortify-ui::starter.components.svg-icons.username')
            </label>

            <!-- Input -->
            <input class="input" autocomplete="off" id="username" name="username" type="text"
                placeholder="{{ __('fortify-ui::auth.form.placeholder_username') }}" autocomplete="off" />
        </div>

        <!-- Password Input Container -->
        <div class="input-container">
            <!-- Icon Label -->
            <label for="password">
                @include('fortify-ui::starter.components.svg-icons.password')
            </label>

            <!-- Input -->
            <input class="input" autocomplete="off" id="password" name="password" type="password"
                placeholder="{{ __('fortify-ui::auth.form.placeholder_password') }}" autocomplete="off" />

            <!-- Eye Toggle -->
            <button type="button" id="eye-toggle" class="eye-toggle" data-input-id="password">
                @include('fortify-ui::starter.components.svg-icons.eye-open')
                @include('fortify-ui::starter.components.svg-icons.eye-close')
            </button>
        </div>

        <!-- Password Confirmation Input Container -->
        <div class="input-container">
            <!-- Icon Label -->
            <label for="password_confirmation">
                @include('fortify-ui::starter.components.svg-icons.password')
            </label>

            <!-- Input -->
            <input class="input" autocomplete="off" id="password_confirmation" name="password_confirmation" type="password"
                placeholder="{{ __('fortify-ui::auth.form.placeholder_password_confirmation') }}" autocomplete="off" />

            <!-- Eye Toggle -->
            <button type="button" id="eye-toggle" class="eye-toggle" data-input-id="password_confirmation">
                @include('fortify-ui::starter.components.svg-icons.eye-open')
                @include('fortify-ui::starter.components.svg-icons.eye-close')
            </button>
        </div>

        <!-- Check Input Container -->
        <div class="check-input-container">
            {{-- TODO: add terms and conditions --}}
        </div>

        {{-- Errors --}}
        @include('fortify-ui::starter.components.generic-errors')

        <!-- Submit Button Container -->
        <div class="submit-button-container">
            <button type="submit">
                <span>
                    {{ __('fortify-ui::auth.register') }}
                </span>

                @include('fortify-ui::starter.components.svg-icons.arrow-right')
            </button>

            <a class="btn btn-link" href="{{ route('login') }}">
                {{ __('fortify-ui::auth.form.link_do_you_have_an_account') }}
            </a>
        </div>
    </form>
@endsection

@include('fortify-ui::starter.components.partials.eye-toggle-script')
