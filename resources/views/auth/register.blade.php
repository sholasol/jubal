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
                            <li><a href="/login">Sign In</a></li>
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
                        <h3>Sign Up with Jubal!</h3>
                        <span>Already have an account? <a href="{{ route('login') }}" style="color: rgb(13, 163, 179) !important;">Sign In!</a></span>
                    </div>
                        
                    <!-- Form -->
                    <x-jet-validation-errors class="mb-4" />
                    <form method="POST" action="{{ route('register') }}" id="login-form">
                        @csrf
                        <input type="hidden" name="registeras" :value="CST" class="input-text with-border"  id="registeras" />

                        <div class="input-with-icon-left">
                            <i class="icon-feather-user"></i>
                            <input type="text" name="name" :value="old('name')" class="input-text with-border"  id="name" placeholder="Your name" required/>
                        </div>

                        <div class="input-with-icon-left">
                            <i class="icon-feather-smartphone"></i>
                            <input type="text" name="phone" :value="old('phone')" class="input-text with-border"  id="phone" placeholder="Contact number"/>
                        </div>

                        {{-- <div class="submit-field">
                            <select class="selectpicker with-border" data-size="7" title="register As" name="registeras" required>
                                <option value="PRF">I am a Professional</option>
                                <option value="CST">I need a Professional</option>
                            </select>
                        </div> --}}


                        <div class="input-with-icon-left">
                            <i class="icon-material-baseline-mail-outline"></i>
                            <input type="email" name="email" :value="old('email')" class="input-text with-border"  id="emailaddress" placeholder="Email Address" required/>
                        </div>
    
                        <div class="input-with-icon-left">
                            <i class="icon-material-outline-lock"></i>
                            <input type="password" class="input-text with-border" name="password" id="password"  name="password" placeholder="Password" required/>
                        </div>

                        <div class="input-with-icon-left">
                            <i class="icon-material-outline-lock"></i>
                            <input type="password" class="input-text with-border"  id="password_confirmation"  name="password_confirmation"  placeholder="Confirm Password" required/>
                        </div>


                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
                        @endif
                        <!-- Button -->
                    <button type="submit" class="button full-width button-sliding-icon ripple-effect margin-top-10" form="login-form">Sign Up <i class="icon-material-outline-arrow-right-alt"></i></button>
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

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-jet-label for="phone" value="{{ __('Phone') }}" />
                <x-jet-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="Phone" />
            </div>

            

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
