@include('partials.header')
<section class="login-page">
        <div class="d-column">
            <div class="login-left">
                <div class="back_home text-left"><a href="{{ url('/') }}"><i class="fa fa-arrow-left"></i></a></div>
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="assets/images/logo.png" /></a>
                </div>
                <form method="POST" action="{{ route('login') }}" class="login-form">
                    @csrf
                    <!-- Email Address -->
                    <div class="form-group">
                         <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email exampleInputEmail1" class="form-control block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="form-group">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="exampleInputPassword1 password" class="form-control block mt-1 w-full"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                        


                            <div class="forgot-sec">
                                <div class="form-check">
                                    <input id="exampleCheck1 remember_me" type="checkbox" class="form-check-input rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                            </div>


                            <div class="login-ft">
                                <x-primary-button class="ms-3 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase
                                tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 
                                focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 btn login_btn ms-3">
                                    {{ __('Login') }}
                                </x-primary-button>
                           
                            <a href="{{ route('register') }}" class="btn sign_up_btn" style="">Sign up</a></div>

                </form>
            </div>
        </div>
    </section>

    <!-- Javascript -->
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/js/scripts.js"></script>
