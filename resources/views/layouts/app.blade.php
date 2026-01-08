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
    <body>
        <div x-data="{ open: true }" class="min-h-screen bg-gray-100">
            <div class="sm:px-12 sm:bg-verde-500 bg-white relative">

                {{-- navegacion --}}
                <livewire:layout.navigation />

                {{-- icono menu desktop --}}
                <button 
                    @click="open = ! open;"
                    aria-label="Abrir menú"
                    class="absolute top-5 left-3 z-10 sm:block hidden">
                    <img src="{{ asset('img/iconos/menu/menu.png') }}" alt="Boton menu" class="w-6">
                </button>
            </div>

            <div class="flex">
                {{-- menu --}}
                <section x-show="open"
                        x-transition:enter="transition ease-out duration-300" 
                        x-transition:enter-start="opacity-0 transform -translate-x-full" 
                        x-transition:enter-end="opacity-100 transform translate-x-0" 
                        x-transition:leave="transition ease-in duration-200" 
                        x-transition:leave-start="opacity-100 transform translate-x-0" 
                        x-transition:leave-end="opacity-0 transform -translate-x-full"
                        class="bg-gradient-to-br from-verde-500 to-verde-900 w-80 relative p-4 sm:block hidden">
                    
                    {{-- links de navegacion --}}
                    <h2 class="text-white font-semibold text-xl mb-4">Menú</h2>

                    {{-- fondo del menú --}}
                    <div class="absolute bottom-0">
                        <img src="{{ asset('img/backgrounds/menu.png') }}" alt="Fondo del menú" class="w-full">
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
