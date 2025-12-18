<?php

use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public LoginForm $form;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }
}; ?>

<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <img src="{{ asset('img/logos/flor.png') }}" alt="Flor" class="mb-5 sm:w-40 w-32 mx-auto">

    <form wire:submit="login">
        <!-- Email Address -->
        <div class="relative">
            {{-- <x-input-label for="email" :value="__('Correo electrónico')" /> --}}
            <x-text-input wire:model="form.email" id="email" class="input-login"
            type="email" name="email" placeholder="Usuario o Correo electrónico" />

            {{-- icono user --}}
            <img src="{{ asset('img/logos/user.png') }}" alt="Icono user" class="absolute w-6 top-4 left-3">
            
            <x-input-error :messages="$errors->first('form.email')" class="error-login" />
        </div>

        <!-- Password -->
        <div class="mt-4 relative">
            {{-- <x-input-label for="password" :value="__('Contraseña')" /> --}}

            <x-text-input wire:model="form.password" id="password" class="input-login pr-14"
                            placeholder="Contraseña"
                            type="password"
                            name="password" />

            {{-- icono password --}}
            <img src="{{ asset('img/logos/password.png') }}" alt="Icono password" class="absolute w-6 top-4 left-3">
            {{-- boton view password --}}
            <button type="button" class="absolute w-6 top-4 right-5" aria-label="Ver contraseña" onclick="viewPassword()">
                <img src="{{ asset('img/logos/eye.png') }}" alt="Ver contraseña" >
            </button>
            <x-input-error :messages="$errors->first('form.password')" class="error-login" />
        </div>

        <script>
            function viewPassword(){
                const input = document.querySelector('#password') ;
                input.type = input.type == 'password' ? 'text' : 'password';
            }
        </script>

        <!-- Remember Me -->
        {{-- <div class="block mt-4">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="form.remember" id="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div> --}}

        <div class="flex items-center justify-center mt-4">
            {{-- @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Forgot your password?') }}
                </a>
            @endif --}}

            <x-primary-button class="ms-3 mt-5">
                {{ __('Iniciar Sesión') }}
            </x-primary-button>
        </div>
    </form>
</div>
