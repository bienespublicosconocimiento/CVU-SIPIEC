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

        <style>
            /* Fondo para pantallas pequeñas */
            .custom-background {
                background-image: url('{{ asset('img/responsive/login/background.png') }}');
            }

            /* Fondo para pantallas grandes */
            @media (min-width: 640px) {
                .custom-background {
                    background-image: url('{{ asset('img/backgrounds/login.png') }}');
                }
            }
        </style>

    </head>
    <body class="font-sans text-gray-900 antialiased">

        <div class="h-screen flex sm:flex-row flex-col sm:justify-center sm:items-center pt-6 sm:pt-0 gap-5 px-5 bg-gray-900 bg-cover bg-center custom-background">
            {{-- <div class="bg-red-400">
                <a href="/" wire:navigate>
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div> --}}

            {{-- formulario y flor --}}
            <div class="sm:w-2/5 w-full sm:max-w-md sm:mt-6 mt-0 px-6 sm:py-4 sm:overflow-hidden sm:rounded-lg sm:order-1 order-2 sm:mb-0 mb-80">
                {{ $slot }}
            </div>


            {{-- logos e img --}}
            <div class="lg:w-1/2 md:w-3/5 w-full flex sm:justify-end justify-center sm:items-center items-start h-screen sm:order-2 order-1">
                <div class="absolute right-0 md:top-20 sm:top-36 top-5 sm:w-full w-4/5 flex justify-end">
                    {{-- img secretaria de ciencia --}}
                    <img src="{{ asset('img/logos/logos.png') }}" alt="Logo UAEMéx y SC" class="md:block hidden">
                    <img src="{{ asset('img/responsive/login/logos_uaem_sc.png') }}" alt="Logo UAEMéx y SC" class="md:hidden block">
                </div>

                <div class="md:mt-10 sm:mt-10 mt-32 lg:text-5xl md:text-4xl text-3xl sm:text-end text-center space-y-2 lg:w-4/5 sm:w-full">
                    <h2 class="text-gris-50 font-extralight">Sistema Integral de</h2>
                    <h2 class="text-gris-100 font-extrabold">Perfiles de Investigación</h2>
                    <h2 class="text-gris-100 font-extrabold">y Evaluación de la Ciencia</h2>
                </div>
            </div>

            {{-- linea oro footer --}}
            <div class="absolute bottom-0 right-0 w-3/5 h-6 bg-oro-400 rounded-ss-2xl">
                
            </div>
        </div>

    </body>
</html>
