<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label class="text-xl" for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-3 w-full h-[50px]" type="email" name="email" placeholder="nama@alamatemail.com" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-10">
                <x-label class="text-xl" for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-3 w-full h-[50px]" type="password" name="password" required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-5">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-md text-gray-600">{{ __('Ingat saya') }}</span>
                </label>
            </div>

            <div class="mt-20 grid grid-rows-2">
                <div>
                    <x-button>
                        {{ __('Log in') }}
                    </x-button>
                </div>

                @if (Route::has('password.request'))
                <div class="flex justify-center">
                    <a class="underline text-md text-center font-medium text-dss-purple hover:text-gray-900 mt-5" href="{{ route('password.request') }}">
                        {{ __('Lupa password?') }}
                    </a>
                </div>
                @endif
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
