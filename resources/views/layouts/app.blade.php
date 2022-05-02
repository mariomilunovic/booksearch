<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- App title -->
    <title>{{ config('app.name', 'booksearch') }}</title>

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @toastScripts

    {{-- alpine js CDN --}}
    {{-- <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.5.1/dist/cdn.min.js"></script> --}}



    <script type="text/javascript" src="{{ secure_asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/028d9002c0.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet" type="text/css">

    @livewireStyles

</head>

<body class="bg-neutral-400 antialiased z-0">

    <div><livewire:toasts/></div>

    <section id="container" class="h-screen">

        <header class="card flex-row mt-3 bg-neutral-700">@include('sections.header')</header>


        <main class="card z-10 p-4 place-content-center bg-neutral-300 overflow-y-auto svg-dots">

            @yield('content')

        </main>

        <footer class="card flex-row items-center justify-center mb-3 bg-neutral-800 max-h-32">@include('sections.footer')</footer>

    </section>

    @livewireScripts

</body>

</html>
