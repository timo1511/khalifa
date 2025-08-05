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
            </div>

            <!-- Navigation Links centered -->
            <div class="hidden sm:flex sm:flex-1 sm:justify-center sm:space-x-10">
                <x-nav-link href="{{ route('dashboard') }}" class="text-white font-serif-elegant text-lg font-semibold hover:text-white hover:scale-105 transition-transform-opacity">
                    {{ __('Home') }}
                </x-nav-link>
                <x-nav-link href="/about" class="text-white font-serif-elegant text-lg font-semibold hover:text-white hover:scale-105 transition-transform-opacity">
                    {{ __('About') }}
                </x-nav-link>
                <x-nav-link href="/shop" class="text-white font-serif-elegant text-lg font-semibold hover:text-white hover:scale-105 transition-transform-opacity">
                    {{ __('Shop') }}
                </x-nav-link>
                <x-nav-link href="/faqs" class="text-white font-serif-elegant text-lg font-semibold hover:text-white hover:scale-105 transition-transform-opacity">
                    {{ __('FAQs') }}
                </x-nav-link>
                <x-nav-link href="/gallery" class="text-white font-serif-elegant text-lg font-semibold hover:text-white hover:scale-105 transition-transform-opacity">
                    {{ __('Gallery') }}
                </x-nav-link>
                <x-nav-link href="/contact" class="text-white font-serif-elegant text-lg font-semibold hover:text-white hover:scale-105 transition-transform-opacity">
                    {{ __('Contact') }}
                </x-nav-link>
            </div>

            <!-- Settings Dropdown or Guest Links -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                @auth
                    <x-dropdown align="right" width="48">
                        <template #trigger>
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-lg leading-5 font-semibold rounded-md text-gold bg-maroon-dark hover:text-beige-light focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 011.414 1.414l-4 4a1 1 01-1.414 0l-4-4a1 1 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </template>
                        <template #content>
                            <x-dropdown-link :href="route('profile.edit')" class="font-serif-elegant text-base font-medium text-maroon-dark hover:bg-gray-100 hover:text-maroon-medium">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </template>
                    </x-dropdown>
                @else
                    <a href="{{ route('login') }}" class="text-white hover:text-white font-serif-elegant text-lg font-semibold px-4 py-2 transition-transform-opacity">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="ml-4 text-white hover:text-white font-serif-elegant text-lg font-semibold px-4 py-2 transition-transform-opacity">
                        Register
                    </a>
                @endauth
            </div>

            <!-- Hamburger Menu for Mobile -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-maroon-medium focus:outline-none focus:bg-maroon-medium focus:text-white focus:ring-2 focus:ring-gray-200 transition duration-200 ease-in-out" aria-label="Toggle navigation">
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
        <div class="pt-4 pb-3 space-y-4">
            <x-responsive-nav-link href="{{ route('dashboard') }}" class="text-white font-serif-elegant text-lg font-semibold px-4 py-3 hover:text-white hover:scale-105 transition-transform-opacity text-center">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="/about" class="text-white font-serif-elegant text-lg font-semibold px-4 py-3 hover:text-white hover:scale-105 transition-transform-opacity text-center">
                {{ __('About') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="/shop" class="text-white font-serif-elegant text-lg font-semibold px-4 py-3 hover:text-white hover:scale-105 transition-transform-opacity text-center">
                {{ __('Shop') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="/faqs" class="text-white font-serif-elegant text-lg font-semibold px-4 py-3 hover:text-white hover:scale-105 transition-transform-opacity text-center">
                {{ __('FAQs') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="/gallery" class="text-white font-serif-elegant text-lg font-semibold px-4 py-3 hover:text-white hover:scale-105 transition-transform-opacity text-center">
                {{ __('Gallery') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="/contact" class="text-white font-serif-elegant text-lg font-semibold px-4 py-3 hover:text-white hover:scale-105 transition-transform-opacity text-center">
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
                    <x-responsive-nav-link :href="route('profile.edit')" class="text-white font-serif-elegant text-lg font-semibold px-4 py-3 hover:text-white hover:scale-105 transition-transform-opacity text-center">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();" class="text-white font-serif-elegant text-lg font-semibold px-4 py-3 hover:text-white hover:scale-105 transition-transform-opacity text-center">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            @else
                <x-responsive-nav-link :href="route('login')" class="text-white font-serif-elegant text-lg font-semibold px-4 py-3 hover:text-white hover:scale-105 transition-transform-opacity text-center">
                    {{ __('Login') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')" class="text-white font-serif-elegant text-lg font-semibold px-4 py-3 hover:text-white hover:scale-105 transition-transform-opacity text-center">
                    {{ __('Register') }}
                </x-responsive-nav-link>
            @endauth
        </div>
    </div>
</nav>
