<nav x-data="{ open: false, searchOpen: false }" class="bg-maroon-dark border-b border-gold sticky top-0 z-50 shadow-lg" aria-label="Main navigation">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-20">
      <!-- Logo -->
      <div class="flex items-center">
        <a href="{{ route('dashboard') }}" aria-label="Khalifa Crafted Home" class="shrink-0 flex items-center focus:outline-none focus:ring-2 focus:ring-gold focus:ring-offset-2 focus:ring-offset-maroon-dark rounded-md">
          <img src="{{ asset('images/logo.png') }}" alt="Khalifa Crafted Logo" class="h-12 sm:h-16 w-auto object-contain transition-transform duration-300 hover:scale-105" />
        </a>
      </div>

      <!-- Centered Navigation Links on Desktop -->
      <div class="hidden sm:flex sm:flex-1 sm:justify-center sm:space-x-10 lg:space-x-14">
        @php
          $navLinks = [
            ['href' => route('dashboard'), 'label' => 'Home'],
            ['href' => url('/about'), 'label' => 'About'],
            ['href' => url('/shop'), 'label' => 'Shop'],
            ['href' => url('/faqs'), 'label' => 'FAQs'],
            ['href' => url('/gallery'), 'label' => 'Gallery'],
            ['href' => url('/contact'), 'label' => 'Contact'],
          ];
        @endphp

        @foreach ($navLinks as $link)
          <x-nav-link
            href="{{ $link['href'] }}"
            class="text-white font-serif-elegant text-[17px] lg:text-[18px] font-medium hover:text-white hover:scale-105 transition-transform-opacity"
          >
            {{ __($link['label']) }}
          </x-nav-link>
        @endforeach
      </div>

      <!-- Right controls: Search + Cart + Mobile Search Toggle + Hamburger -->
      <div class="flex items-center space-x-4 sm:space-x-6">
        <!-- Search input on desktop -->
        <div class="hidden sm:block relative">
          <input 
            type="search" 
            placeholder="Search..." 
            aria-label="Search"
            class="w-40 lg:w-56 rounded-md py-1.5 px-4 text-maroon-dark placeholder:text-maroon-medium/80 focus:outline-none focus:ring-2 focus:ring-gold transition-all duration-300"
          />
          <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-maroon-dark">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
            </svg>
          </button>
        </div>

        <!-- Cart icon with badge -->
        <div class="relative">
          <a href="/cart" aria-label="Shopping Cart" class="text-white hover:text-white transition-transform duration-300 hover:scale-110 focus:outline-none focus:ring-2 focus:ring-gold focus:ring-offset-2 focus:ring-offset-maroon-dark rounded-full p-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2 6m12-6l2 6m-8 0a2 2 0 11-4 0 2 2 0 014 0zm8 0a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span class="absolute -top-1 -right-1 bg-gold text-maroon-dark text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center">3</span>
          </a>
        </div>

        <!-- Mobile Search toggle -->
        <button 
          @click="searchOpen = !searchOpen" 
          class="sm:hidden text-white hover:text-white focus:outline-none focus:ring-2 focus:ring-gold focus:ring-offset-2 focus:ring-offset-maroon-dark rounded-full p-1 transition-colors duration-300" 
          aria-label="Toggle Search"
          :aria-expanded="searchOpen"
        >
          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </button>

        <!-- Hamburger Menu for Mobile -->
        <div class="sm:hidden">
          <button 
            @click="open = !open" 
            class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-maroon-medium focus:outline-none focus:ring-2 focus:ring-gold focus:ring-offset-2 focus:ring-offset-maroon-medium transition-all duration-300" 
            aria-label="Toggle navigation"
            :aria-expanded="open"
          >
            <span class="sr-only">Open main menu</span>
            <svg class="h-8 w-8" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Mobile Search bar -->
  <div 
    x-show="searchOpen" 
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 -translate-y-2"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-2"
    class="sm:hidden bg-maroon-dark px-4 py-3 border-b border-gold"
  >
    <div class="relative">
      <input 
        type="search" 
        placeholder="Search..." 
        aria-label="Search"
        class="w-full rounded-md py-2.5 px-4 text-maroon-dark placeholder:text-maroon-medium/80 focus:outline-none focus:ring-2 focus:ring-gold"
      />
      <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-maroon-dark">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Responsive Navigation Menu -->
  <div 
    x-show="open" 
    @click.away="open = false"
    class="sm:hidden bg-maroon-dark shadow-lg"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 -translate-y-4"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 -translate-y-4"
  >
    <div class="pt-2 pb-3 space-y-1">
      @foreach ($navLinks as $link)
        <x-responsive-nav-link
          href="{{ $link['href'] }}"
          class="text-white font-serif-elegant text-[16px] font-medium px-6 py-3 hover:bg-maroon-medium/50 transition-colors duration-300 focus:outline-none focus:bg-maroon-medium/50"
        >
          {{ __($link['label']) }}
        </x-responsive-nav-link>
      @endforeach
    </div>

    <!-- Responsive Settings Options for Authenticated User -->
    @auth
    <div class="pt-4 pb-3 border-t border-gold/50">
      <div class="px-6">
        <div class="font-medium text-[16px] text-white font-serif-elegant">{{ Auth::user()->name }}</div>
        <div class="font-medium text-sm text-gray-200">{{ Auth::user()->email }}</div>
      </div>
      <div class="mt-3 space-y-1">
        <x-responsive-nav-link 
          :href="route('profile.edit')" 
          class="text-white font-serif-elegant text-[16px] font-medium px-6 py-3 hover:bg-maroon-medium/50 transition-colors duration-300 focus:outline-none focus:bg-maroon-medium/50"
        >
          {{ __('Profile') }}
        </x-responsive-nav-link>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <x-responsive-nav-link 
            :href="route('logout')"
            onclick="event.preventDefault(); this.closest('form').submit();"
            class="text-white font-serif-elegant text-[16px] font-medium px-6 py-3 hover:bg-maroon-medium/50 transition-colors duration-300 focus:outline-none focus:bg-maroon-medium/50"
          >
            {{ __('Log Out') }}
          </x-responsive-nav-link>
        </form>
      </div>
    </div>
    @endauth
  </div>
</nav>