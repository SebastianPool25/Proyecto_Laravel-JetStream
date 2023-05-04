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
    <main class="bg-pink-100 h-screen">
        <div class="grid grid-cols-2 p-10">
            <div class="bg-yellow-200 p-5 h-auto">
                <div class=" bg-white rounded-xl full-auto">
                    <h1 class="text-2xl font-mono font-bold p-5 text-center">Hola, ¿Eres nuevo aquí?</h1>
                    <h2 class="text-2xl font-mono font-bold p-5">En está pagina puede conocer la información de los
                        departamentos del TEC Motul</h2>
                    <h3 class="text-2xl font-mono font-bold p-5">Si quieres más información</h3>
                </div>
                <br>
                <a href="{{ route('croquis') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-4 px-12 mx-32 my-10 rounded text-xl self-center">Pulsa
                    aquí</a>
            </div>
            <div class="bg-yellow-200 p-5">
                <img src="http://localhost/PROYECTO_LARAVEL-JETSTREAM/resources/views/src/2020-10-19.jpg"
                    class="rounded-2xl mx-10">
            </div>
        </div>
        </div>
        </div>
        <footer class="text-center fixed bottom-0">http://www.itsmotul.edu.mx/</footer>
    </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
