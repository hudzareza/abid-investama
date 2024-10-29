<style>
    body {
        background: linear-gradient(to right, #4a90e2, #9013fe);
        font-family: Arial, sans-serif;
    }

    .login-container {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .login-card {
        background-color: white;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        padding: 2rem;
        width: 400px;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-input {
        width: 100%;
        padding: 0.5rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        transition: border-color 0.3s;
    }

    .form-input:focus {
        border-color: #4a90e2;
        outline: none;
    }

    .remember-me {
        display: flex;
        align-items: center;
    }

    .remember-me-text {
        margin-left: 0.5rem;
        color: #666;
    }

    .form-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .forgot-password {
        color: #4a90e2;
        text-decoration: none;
    }

    .forgot-password:hover {
        text-decoration: underline;
    }

    .login-button {
        background-color: #4a90e2;
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .login-button:hover {
        background-color: #357ABD;
    }
</style>
<x-guest-layout>
    <div class="login-container">
        <x-authentication-card class="login-card">
            <x-slot name="logo">
                <x-authentication-card-logo />
            </x-slot>

            <x-validation-errors class="mb-4" />

            @if (session('status'))
            <div class="status-message">
                {{ session('status') }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <x-label style="color: #ccc;" for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="form-input" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="form-group">
                    <x-label style="color: #ccc;" for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="form-input" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="form-group">
                    <label for="remember_me" class="remember-me">
                        <x-checkbox id="remember_me" name="remember" />
                        <span style="color: #ccc;" class="remember-me-text">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="form-actions">
                    <!-- @if (Route::has('password.request'))
                    <a class="forgot-password" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    @endif -->

                    <x-button class="login-button">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </x-authentication-card>
    </div>
</x-guest-layout>