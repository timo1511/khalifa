<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Khalifa Crafted') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <!-- Styles & Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-beige-lighter min-h-screen flex flex-col">
    <header>
        @include('layouts.navigation')
    </header>
    <main class="flex-1">
        {{ $slot }}
    </main>
    <footer class="bg-maroon-dark py-6 text-center text-beige-light mt-auto">
        <p>&copy; {{ date('Y') }} Khalifa Crafted. All rights reserved.</p>
    </footer>
</body>
</html>
