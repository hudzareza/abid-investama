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

            <div style="color: #ccc;" class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            @if (session('status'))
            <div style="color: #ccc;" class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
            @endif

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-group">
                    <x-label style="color: #ccc;" for="email" value="{{ __('Email') }}" />
                    <x-input class="form-input" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button>
                        {{ __('Email Password Reset Link') }}
                    </x-button>
                </div>
            </form>
        </x-authentication-card>
    </div>
</x-guest-layout>