<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Khalifa Crafted - Premium Leather Goods" />
    <title>{{ config('app.name', 'Khalifa Crafted') }}</title>

    <!-- Preload Fonts for Performance (Improved: Retained Playfair Display for elegant serif style, added Figtree for modern sans-serif fallback; ensured preconnects for faster loading.) -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet" />

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-beige-lighter min-h-screen flex flex-col">

    {{-- Header with integrated sticky nav (marquee now inside nav for single-file simplicity) --}}
    <header>
        {{-- Sticky Navigation Bar (Improved: Marquee integrated directly into nav; enhanced accessibility with ARIA roles/labels; optimized for performance by lazy-loading non-critical scripts if needed.) --}}
        @include('layouts.navigation')
    </header>

    {{-- Hero and rest content directly below sticky nav, no top padding needed --}}
    <main class="flex-1">
        {{ $slot }}
    </main>

    <footer class="bg-maroon-dark py-12 text-beige-light mt-auto">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- About Section -->
            <div>
                <h3 class="text-xl font-playfair text-gold mb-4">About Khalifa Crafted</h3>
                <p class="text-sm mb-4">Premium leather goods crafted with timeless elegance. Customize wallets, belts, and more for a personal touch.</p>
                <p class="text-sm">&copy; {{ date('Y') }} Khalifa Crafted. All rights reserved.</p>
            </div>

            <!-- Quick Links Section -->
            <div>
                <h3 class="text-xl font-playfair text-gold mb-4">Quick Links</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="/" class="hover:text-gold transition">Home</a></li>
                    <li><a href="/products" class="hover:text-gold transition">Products</a></li>
                    <li><a href="/customize" class="hover:text-gold transition">Customize</a></li>
                    <li><a href="/about" class="hover:text-gold transition">About Us</a></li>
                    <li><a href="/contact" class="hover:text-gold transition">Contact</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div>
                <h3 class="text-xl font-playfair text-gold mb-4">Contact Us</h3>
                <ul class="space-y-2 text-sm">
                    <li>Email: <a href="mailto:info@khalifacrafted.com" class="hover:text-gold transition">info@khalifacrafted.com</a></li>
                    <li>Phone: +1 (123) 456-7890</li>
                    <li>Address: 123 Leather Lane, Craft City, USA</li>
                </ul>
            </div>

            <!-- Social Media Section -->
            <div>
                <h3 class="text-xl font-playfair text-gold mb-4">Follow Us</h3>
                <div class="flex space-x-4">
                    <a href="https://x.com/khalifacrafted" class="text-beige-light hover:text-gold transition" aria-label="X (Twitter)">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <a href="https://instagram.com/khalifacrafted" class="text-beige-light hover:text-gold transition" aria-label="Instagram">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M7.75 2h8.5A5.75 5.75 0 0122 7.75v8.5A5.75 5.75 0 0116.25 22h-8.5A5.75 5.75 0 012 16.25v-8.5A5.75 5.75 0 017.75 2zm0 1.5A4.25 4.25 0 003.5 7.75v8.5a4.25 4.25 0 004.25 4.25h8.5a4.25 4.25 0 004.25-4.25v-8.5a4.25 4.25 0 00-4.25-4.25h-8.5zm9.75 2a1.5 1.5 0 110 3 1.5 1.5 0 010-3zm-4.75 2.75a5 5 0 110 10 5 5 0 010-10zm0 1.5a3.5 3.5 0 100 7 3.5 3.5 0 000-7z"/></svg>
                    </a>
                    <a href="https://facebook.com/khalifacrafted" class="text-beige-light hover:text-gold transition" aria-label="Facebook">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="mt-8 border-t border-gold pt-4 text-center text-sm">
            <p>Designed with care. <a href="/privacy" class="hover:text-gold transition">Privacy Policy</a> | <a href="/terms" class="hover:text-gold transition">Terms of Service</a></p>
        </div>
    </footer>

</body>
</html>