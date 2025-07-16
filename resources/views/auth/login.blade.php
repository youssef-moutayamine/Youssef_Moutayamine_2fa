<x-guest-layout>
        <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl px-8 py-12 sm:px-12 sm:py-14">
            <div class="mb-10 text-center">
                <h2 class="text-4xl font-extrabold text-[#7B2FF2] mb-2" style="font-family: 'Figtree', sans-serif;">{{ __('Sign in') }}</h2>
                <p class="text-base text-gray-500">Welcome back! Please enter your details.</p>
            </div>
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}" class="space-y-7">
                @csrf
                <div>
                    <x-input-label for="email" :value="__('Email')" class="block text-base font-semibold text-gray-700 mb-1" />
                    <x-text-input id="email" class="mt-1 block w-full rounded-xl border border-gray-200 bg-white text-lg px-4 py-3 placeholder-gray-400 focus:ring-2 focus:ring-[#7B2FF2] focus:border-[#7B2FF2] transition-all" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="password" :value="__('Password')" class="block text-base font-semibold text-gray-700 mb-1" />
                    <x-text-input id="password" class="mt-1 block w-full rounded-xl border border-gray-200 bg-white text-lg px-4 py-3 placeholder-gray-400 focus:ring-2 focus:ring-[#7B2FF2] focus:border-[#7B2FF2] transition-all" type="password" name="password" required autocomplete="current-password" placeholder="Enter your password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="flex items-center justify-between">
                    <label for="remember_me" class="flex items-center select-none">
                        <input id="remember_me" type="checkbox" class="h-5 w-5 rounded-full border-gray-300 text-[#7B2FF2] focus:ring-[#7B2FF2] bg-white" name="remember">
                        <span class="ml-3 text-sm text-gray-700">{{ __('Remember me') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-sm font-medium text-[#7B2FF2] hover:text-[#F357A8] transition-colors duration-150 focus:outline-none focus:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot password?') }}
                        </a>
                    @endif
                </div>
                <div>
                    <x-primary-button class="w-full justify-center py-3 text-lg rounded-full bg-gradient-to-r from-[#7B2FF2] to-[#F357A8] shadow-lg border-0 hover:from-[#F357A8] hover:to-[#7B2FF2] hover:scale-105 transition-transform duration-150">{{ __('Log in') }}</x-primary-button>
                </div>
            </form>
        </div>
</x-guest-layout>
