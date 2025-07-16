<x-guest-layout>
        <div class="w-full max-w-md bg-white rounded-3xl shadow-2xl px-8 py-12 sm:px-12 sm:py-14">
            <div class="mb-10 text-center">
                <h2 class="text-4xl font-extrabold text-[#7B2FF2] mb-2" style="font-family: 'Figtree', sans-serif;">{{ __('Create Account') }}</h2>
                <p class="text-base text-gray-500">Join us and start your journey</p>
            </div>
            <form method="POST" action="{{ route('register') }}" class="space-y-7">
                @csrf
                <div>
                    <x-input-label for="name" :value="__('Full Name')" class="block text-base font-semibold text-gray-700 mb-1 " />
                    <x-text-input id="name" class="mt-1 block w-full rounded-xl border border-gray-200 bg-white text-lg px-4 py-3 placeholder-gray-400 focus:ring-2 focus:ring-[#7B2FF2] focus:border-[#7B2FF2] transition-all" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Enter your full name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="email" :value="__('Email Address')" class="block text-base font-semibold text-gray-700 mb-1" />
                    <x-text-input id="email" class="mt-1 block w-full rounded-xl border border-gray-200 bg-white text-lg px-4 py-3 placeholder-gray-400 focus:ring-2 focus:ring-[#7B2FF2] focus:border-[#7B2FF2] transition-all" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="Enter your email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="password" :value="__('Password')" class="block text-base font-semibold text-gray-700 mb-1" />
                    <x-text-input id="password" class="mt-1 block w-full rounded-xl border border-gray-200 bg-white text-lg px-4 py-3 placeholder-gray-400 focus:ring-2 focus:ring-[#7B2FF2] focus:border-[#7B2FF2] transition-all" type="password" name="password" required autocomplete="new-password" placeholder="Create a strong password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-base font-semibold text-gray-700 mb-1" />
                    <x-text-input id="password_confirmation" class="mt-1 block w-full rounded-xl border border-gray-200 bg-white text-lg px-4 py-3 placeholder-gray-400 focus:ring-2 focus:ring-[#7B2FF2] focus:border-[#7B2FF2] transition-all" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm your password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="flex items-center justify-between mt-2">
                    <a class="text-sm text-[#7B2FF2] hover:text-[#F357A8] font-medium focus:outline-none focus:underline transition-colors duration-150" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
                <div>
                    <x-primary-button class="w-full justify-center py-3 text-lg rounded-full bg-gradient-to-r from-[#7B2FF2] to-[#F357A8] shadow-lg border-0 hover:from-[#F357A8] hover:to-[#7B2FF2] hover:scale-105 transition-transform duration-150">{{ __('Register') }}</x-primary-button>
                </div>
            </form>
        </div>
</x-guest-layout>
