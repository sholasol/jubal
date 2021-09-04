<x-base-layout>
    <div id="titlebar" class="gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
    
                    <h2><a href="/">Jubal Music</a></h2>
    
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs" class="dark">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/register">Sign Up</a></li>
                        </ul>
                    </nav>
    
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Page Content
    ================================================== -->
    <div class="container">
        <div class="row">
            <div class="col-xl-5 offset-xl-3">
    
    
                <div class="login-register-page">
                    <!-- Welcome Text -->
                    <div class="welcome-text">
                        <h3>We're glad to see you again!</h3>
                        <span>Don't have an account? <a href="{{ route('register') }}" style="color: rgb(13, 163, 179) !important;">Sign Up!</a></span>
                    </div>
                        
                    <!-- Form -->
                    <x-jet-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('login') }}" id="login-form">
                        @csrf
                        <div class="input-with-icon-left">
                            <i class="icon-material-baseline-mail-outline"></i>
                            <input type="email" name="email" :value="old('email')" class="input-text with-border"  id="emailaddress" placeholder="Email Address" required/>
                        </div>
    
                        <div class="input-with-icon-left">
                            <i class="icon-material-outline-lock"></i>
                            <input type="password" class="input-text with-border" name="password" id="password"  name="password" placeholder="Password" required/>
                        </div>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
                        @endif
                        <!-- Button -->
                    <button type="submit" class="button full-width button-sliding-icon ripple-effect margin-top-10" form="login-form">Sign In <i class="icon-material-outline-arrow-right-alt"></i></button>
                    </form>
                    
                    
                    
                    <!-- Social Login -->
                    <div class="social-login-separator"><span>or</span></div>
                    <div class="social-login-buttons">
                        <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via Facebook</button>
                        <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via Google+</button>
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    
    
    <!-- Spacer -->
    <div class="margin-top-70"></div>
</x-base-layout>
{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
