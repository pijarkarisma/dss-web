<x-guest-layout>
    <x-auth-card>
        <x-slot name="authTitle">
            <p class="text-5xl font-bold pb-5">Lupa password</p>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Lupa password? Tidak masalah. Masukkan alamat email Anda dan kami akan kirimkan reset link untuk mengatur ulang password Anda.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="mt-10">
                <x-label for="email" class="text-xl" :value="__('Email')" />

                <x-input id="email" class="block mt-3 w-full h-[50px]" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-10">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
