<!DOCTYPE html>
<html lang="sv">
<!--Denna webbplats är byggd i Laravel 13, Alpine.js, Tailwind CSS och Vite.
    Den är gjord av Andréa Bergquist och är en motorcykelblogg som fokuserar på resor, äventyr och berättelser från sadeln.
    -->

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="@yield('meta_description', 'Mc Blogg – motorcykelresor, äventyr och berättelser från vägen.')">

    <title>
        @yield('title', 'Mc Blogg')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @stack('styles')
</head>

<body class="bg-white text-slate-900 antialiased">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    <x-footer />

    @stack('scripts')

</body>

</html>
