<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <img src="/images/cine en el midda admin.png" alt="logoAdminMidda">
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('¿Olviste tu contraseña? No hay problema, solo escribe tu correo electronico a continuacion y te enviaremos un link para que puedas escoger una nueva contraseña ;)') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Correo electronico') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="Escriba su correo electronico" autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Volver') }}
                </a>
                <x-button class="ml-4">
                    {{ __('Enviar correo') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
