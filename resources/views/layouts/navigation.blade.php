<nav x-data="{ open: false }" class="bg-maroon-dark border-b border-gold">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gold" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    @auth
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-gold hover:text-beige-light font-serif-elegant">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                    @endauth

                    <!-- E-commerce Menu Items -->
                    <div class="relative">
                        <button @click="open = !open" class="text-gold hover:text-beige-light font-serif-elegant px-3 py-2 inline-flex items-center">
                            Products
                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="open" @click.away="open = false" class="absolute z-50 mt-2 w-48 rounded-md shadow-lg bg-beige-lighter ring-1 ring-black ring-opacity-5">
                            <a href="/products/wallets" class="block px-4 py-2 text-sm text-maroon-dark hover:bg-gold">Wallets</a>
                            <a href="/products/holders" class="block px-4 py-2 text-sm text-maroon-dark hover:bg-gold">Holders</a>
                            <a href="/products/straps" class="block px-4 py-2 text-sm text-maroon-dark hover:bg-gold">Straps</a>
                            <a href="/products/belts" class="block px-4 py-2 text-sm text-maroon-dark hover:bg-gold">Belts</a>
                            <a href="/products/other" class="block px-4 py-2 text-sm text-maroon-dark hover:bg-gold">Other Leather Goods</a>
                        </div>
                    </div>

                    <x-nav-link :href="'/catalog'" class="text-gold hover:text-beige-light font-serif-elegant">
                        {{ __('Catalog Download') }}
                    </x-nav-link>
                    <x-nav-link :href="'/quotations'" class="text-gold hover:text-beige-light font-serif-elegant">
                        {{ __('Quotation Request') }}
                    </x-nav-link>
                    <x-nav-link :href="'/contact'" class="text-gold hover:text-beige-light font-serif-elegant">
                        {{ __('Contact') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown or Guest Links -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                @auth
                    <x-dropdown align="right" width="48">
                        <template #trigger>
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gold bg-maroon-dark hover:text-beige-light focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>
                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </template>

                        <template #content>
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
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
                    <a href="{{ route('login') }}" class="text-gold hover:text-beige-light font-serif-elegant px-3 py-2">Login</a>
                    <a href="{{ route('register') }}" class="ml-4 text-gold hover:text-beige-light font-serif-elegant px-3 py-2">Register</a>
                @endauth
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gold hover:text-beige-light hover:bg-maroon-medium focus:outline-none focus:bg-maroon-medium focus:text-beige-light transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            @auth
                <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-gold hover:text-beige-light font-serif-elegant">
                    {{ __('Dashboard') }}
                </x-responsive-nav-link>
            @endauth
            <!-- Mobile E-commerce Links -->
            <x-responsive-nav-link :href="'/products'" class="text-gold hover:text-beige-light font-serif-elegant">
                {{ __('Products') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="'/catalog'" class="text-gold hover:text-beige-light font-serif-elegant">
                {{ __('Catalog Download') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="'/quotations'" class="text-gold hover:text-beige-light font-serif-elegant">
                {{ __('Quotation Request') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="'/contact'" class="text-gold hover:text-beige-light font-serif-elegant">
                {{ __('Contact') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gold">
            @auth
                <div class="px-4">
                    <div class="font-medium text-base text-gold font-serif-elegant">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-beige-light">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            @else
                <x-responsive-nav-link :href="route('login')">
                    {{ __('Login') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')">
                    {{ __('Register') }}
                </x-responsive-nav-link>
            @endauth
        </div>
    </div>
</nav>
