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
    <div class="login-container" class="login-card">
        <x-authentication-card>
            <x-slot name="logo">
                <x-authentication-card-logo />
            </x-slot>

            <x-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <x-label style="color: #ccc;" for="name" value="{{ __('Name') }}" />
                    <x-input id="name" class="form-input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="form-group">
                    <x-label style="color: #ccc;" for="email" value="{{ __('Email') }}" />
                    <x-input id="email" class="form-input" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div class="form-group">
                    <x-label style="color: #ccc;" for="password" value="{{ __('Password') }}" />
                    <x-input id="password" class="form-input" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="form-group">
                    <x-label style="color: #ccc;" for="password_confirmation" value="{{ __('Confirm Password') }}" />
                    <x-input id="password_confirmation" class="form-input" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="form-actions">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div style="color: #ccc;" class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
                @endif

                <div class="flex items-center justify-end mt-4">
                    <a style="color: #ccc;" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="ms-4">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </x-authentication-card>
    </div>
</x-guest-layout>