<nav x-data="{ open: false }" class="bg-maroon-dark border-b border-gold sticky top-0 z-50 shadow-md" aria-label="Main navigation">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" aria-label="Khalifa Crafted Home">
                        <img src="{{ asset('images/logo.png') }}" alt="Khalifa Crafted Logo" class="h-12 sm:h-16 w-auto object-contain transition-transform hover:scale-105">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-10 sm:-my-px sm:ms-12 sm:flex">
                    @auth
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white hover:text-gray-200 font-serif-elegant text-lg font-medium transition-colors duration-200">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    @endauth
                    <!-- Products Dropdown -->
                    <div class="relative" x-data="{ dropdownOpen: false }">
                        <button @click="dropdownOpen = !dropdownOpen" class="text-white hover:text-gray-200 font-serif-elegant text-lg font-medium px-4 py-2 inline-flex items-center transition-colors duration-200" aria-haspopup="true" :aria-expanded="dropdownOpen">
                            Products
                            <svg class="ms-2 -me-0.5 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div x-show="dropdownOpen" @click.away="dropdownOpen = false" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95" class="absolute z-50 mt-2 w-56 rounded-lg shadow-xl bg-beige-light ring-1 ring-black ring-opacity-5">
                            <a href="/products/wallets" class="block px-5 py-3 font-serif-elegant text-base font-medium text-maroon-dark hover:bg-gray-100 hover:text-maroon-medium transition-colors duration-150">Wallets</a>
                            <a href="/products/holders" class="block px-5 py-3 font-serif-elegant text-base font-medium text-maroon-dark hover:bg-gray-100 hover:text-maroon-medium transition-colors duration-150">Holders</a>
                            <a href="/products/straps" class="block px-5 py-3 font-serif-elegant text-base font-medium text-maroon-dark hover:bg-gray-100 hover:text-maroon-medium transition-colors duration-150">Straps</a>
                            <a href="/products/belts" class="block px-5 py-3 font-serif-elegant text-base font-medium text-maroon-dark hover:bg-gray-100 hover:text-maroon-medium transition-colors duration-150">Belts</a>
                            <a href="/products/other" class="block px-5 py-3 font-serif-elegant text-base font-medium text-maroon-dark hover:bg-gray-100 hover:text-maroon-medium transition-colors duration-150">Other Leather Goods</a>
                        </div>
                    </div>
                    <x-nav-link :href="'/catalog'" class="text-white hover:text-gray-200 font-serif-elegant text-lg font-medium transition-colors duration-200">
                        {{ __('Catalog Download') }}
                    </x-nav-link>
                    <x-nav-link :href="'/quotations'" class="text-white hover:text-gray-200 font-serif-elegant text-lg font-medium transition-colors duration-200">
                        {{ __('Quotation Request') }}
                    </x-nav-link>
                    <x-nav-link :href="'/contact'" class="text-white hover:text-gray-200 font-serif-elegant text-lg font-medium transition-colors duration-200">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown or Guest Links -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                @auth
                    <x-dropdown align="right" width="48">
                        <template #trigger>
                            <button class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-lg text-white bg-maroon-dark hover:text-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-200 focus:ring-offset-2 focus:ring-offset-maroon-dark transition ease-in-out duration-200" aria-label="User menu">
                                <span>{{ Auth::user()->name }}</span>
                                <svg class="ms-2 h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </template>
                        <template #content>
                            <x-dropdown-link :href="route('profile.edit')" class="font-serif-elegant text-base font-medium text-maroon-dark hover:bg-gray-100 hover:text-maroon-medium">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();" class="font-serif-elegant text-base font-medium text-maroon-dark hover:bg-gray-100 hover:text-maroon-medium">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </template>
                    </x-dropdown>
                @else
                    <a href="{{ route('login') }}" class="text-white hover:text-gray-200 font-serif-elegant text-lg font-medium px-4 py-2 transition-colors duration-200">Login</a>
                    <a href="{{ route('register') }}" class="ml-4 text-white hover:text-gray-200 font-serif-elegant text-lg font-medium px-4 py-2 transition-colors duration-200">Register</a>
                @endauth
            </div>

            <!-- Hamburger Menu for Mobile -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-200 hover:bg-maroon-medium focus:outline-none focus:bg-maroon-medium focus:text-gray-200 focus:ring-2 focus:ring-gray-200 transition duration-200 ease-in-out" aria-label="Toggle navigation">
                    <svg class="h-8 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="sm:hidden bg-maroon-dark shadow-lg" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-4">
        <div class="pt-4 pb-3 space-y-2">
            @auth
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-white hover:text-gray-200 font-serif-elegant text-lg font-medium px-4 py-3">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            @endauth
            <x-responsive-nav-link :href="'/products'" class="text-white hover:text-gray-200 font-serif-elegant text-lg font-medium px-4 py-3">
                {{ __('Products') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="'/catalog'" class="text-white hover:text-gray-200 font-serif-elegant text-lg font-medium px-4 py-3">
                {{ __('Catalog Download') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="'/quotations'" class="text-white hover:text-gray-200 font-serif-elegant text-lg font-medium px-4 py-3">
                {{ __('Quotation Request') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="'/contact'" class="text-white hover:text-gray-200 font-serif-elegant text-lg font-medium px-4 py-3">
                {{ __('Contact') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-3 border-t border-gold">
            @auth
                <div class="px-4">
                    <div class="font-medium text-lg text-white font-serif-elegant">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-200">{{ Auth::user()->email }}</div>
                </div>
                <div class="mt-3 space-y-2">
                    <x-responsive-nav-link :href="route('profile.edit')" class="text-white hover:text-gray-200 font-serif-elegant text-lg font-medium px-4 py-3">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();" class="text-white hover:text-gray-200 font-serif-elegant text-lg font-medium px-4 py-3">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            @else
                <x-responsive-nav-link :href="route('login')" class="text-white hover:text-gray-200 font-serif-elegant text-lg font-medium px-4 py-3">
                    {{ __('Login') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')" class="text-white hover:text-gray-200 font-serif-elegant text-lg font-medium px-4 py-3">
                    {{ __('Register') }}
                </x-responsive-nav-link>
            @endauth
        </div>
    </div>
</nav>
