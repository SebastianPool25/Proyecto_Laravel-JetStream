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

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
            <!-- Page Heading -->
            
            <header class="bg-white dark:bg-blue-300 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 w-full inline-flex">
                    <div class="w-1/2 mx-28">
                        <p class="text-3xl text-white font-mono font-bold">
                            Croquis TEC Motul
                        </p>
                    </div>
                </div>
            </header>
            

            <!-- Page Content -->
            <main>
                <!-- Aqui llamas a tu componente donde tienes tu mapa-->
                @livewire('mapita')
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>