<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div x-data="{ open: true }" class="min-h-screen bg-gray-100">
            <div class="px-12 bg-verde-500 relative">

                <div class="bg-white border-b border-gray-100 rounded-es-2xl rounded-ee-2xl">
                    <div class="flex justify-between items-center h-16 max-w-7xl px-4 sm:px-6 lg:px-8">
                        {{-- primera columna --}}
                        <section class="flex gap-5">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <a href="{{ route('dashboard') }}" wire:navigate>
                                    <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                                    {{-- <img src="{{ asset('img/logos/uaem.png') }}" alt="" class="block h-12 w-auto fill-current text-gray-800"> --}}
                                </a>
                            </div>

                            {{-- linea --}}
                            <span class="bg-gris-200 w-[2px] my-2"></span>

                            {{-- nombre sistema --}}
                        </section>

                        <div>
                            hola
                            <!-- Settings Dropdown -->
                            <div class="hidden sm:flex sm:items-center sm:ms-6">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                            <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name" x-on:profile-updated.window="name = $event.detail.name"></div>

                                            <div class="ms-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('profile')" wire:navigate>
                                            {{ __('navigation.profile') }}
                                        </x-dropdown-link>

                                        <!-- Authentication -->
                                        <button wire:click="logout" class="w-full text-start">
                                            <x-dropdown-link>
                                                {{ __('navigation.logout') }}
                                            </x-dropdown-link>
                                        </button>
                                    </x-slot>
                                </x-dropdown>
                            </div>


                            



                        </div>
                    </div>
                </div>

                <livewire:layout.navigation />
                {{-- icono menu --}}
                <button @click="open = ! open;" class="absolute top-5 left-3 z-10">
                    <img src="{{ asset('img/iconos/menu/menu.png') }}" alt="Boton menu" class="w-6">
                </button>
            </div>

            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}

            <div class="flex">
                {{-- menu --}}
                <section x-show="open" class="bg-gradient-to-br from-verde-500 to-verde-900 w-80 relative p-4">
                    <h2>Menú</h2>

                    {{-- img fondo --}}
                    <div class="absolute bottom-0">
                        <img src="{{ asset('img/backgrounds/menu.png') }}" alt="Background flor">
                        <div class="absolute bottom-0 right-0 w-4/5 h-6 bg-oro-400 rounded-ss-2xl"></div>
                    </div>
                </section>

                <!-- Page Content -->
                <main class="w-full">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>
