<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{ asset('build/assets/img/logo-c.png') }}" type="image/x-icon">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <style>
            
            .wallpaper{
                min-height: 100vh;
                min-width: auto;
                background-image: url('build/assets/img/fondo.jpg') ;
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;;
            }


        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-green-50">

           <div class="navegation">
                @livewire('navigation-menu')
           </div>

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl navegation  mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <div class="wallpaper">
                
                  <!--  -->

                <main>
                    {{ $slot }}
                </main>

            </div>
           
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
