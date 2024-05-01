@include('partials.header')
<section class="login-page">
    <div class="d-column">
        <div class="login-left">
            <div class="back_home text-left"><a href="{{ url('/') }}"><i class="fa fa-arrow-left"></i></a></div>
            <div class="logo">
                <a href="{{ url('/') }}"><img src="assets/images/logo.png" /></a>
            </div>
            <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="login-form">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="login-ft">
                    <x-primary-button class="ms-3 inline-flex items-center px-4 py-2 bg-gray-800 rounded-md font-semibold text-xs text-white uppercase
                    tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 
                    focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 btn login_btn ms-3">
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
     
        </div>
    </div>
</section>

