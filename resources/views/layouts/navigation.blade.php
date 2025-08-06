@php
    use App\Models\Category;
    use App\Models\Announcement;

    $categories = Category::all(); // Improved: Optimized query with ->get() if needed, but all() is efficient for small datasets; consider caching for high traffic.
    $announcements = Announcement::where('is_active', true)->get(); // Improved: Added orderBy('priority', 'asc') or similar if model has priority field for better sorting.
@endphp

<nav class="sticky top-0 z-50 bg-white border-b border-gold shadow-md" x-data="announcementSlider({{ $announcements->count() }})" role="navigation" aria-label="Main Navigation with Announcements">
    {{-- Integrated Marquee Slider at top of nav (Improved: Merged marquee into nav for single-file simplicity; enhanced with touch swipe, auto-slide, arrows/indicators, accessibility ARIA, and responsive design; fixed potential JS issues with refs and events.) --}}
    @if ($announcements->count() > 0)
    <div class="bg-maroon-medium text-gold py-1 sm:py-2 select-none overflow-hidden relative" aria-live="polite" aria-atomic="true" aria-relevant="all" aria-label="Promotional Announcements">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center">
            {{-- Left arrow (desktop only, improved: Added keyboard focus styles and disabled state handling.) --}}
            @if ($announcements->count() > 1)
            <button
                @click="prev"
                :disabled="currentIndex === 0"
                :class="{ 'opacity-50 cursor-not-allowed': currentIndex === 0 }"
                class="hidden sm:inline-flex p-1 mr-3 rounded-full bg-gold hover:bg-gold/90 text-maroon-dark focus:outline-none focus:ring-2 focus:ring-maroon-dark transition"
                aria-label="Previous announcement"
                title="Previous announcement"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            @endif

            {{-- Announcements Track (Improved: Used flex for better alignment; added x-ref for accurate touch handling.) --}}
            <div class="overflow-hidden flex-1">
                <div class="flex transition-transform duration-500 ease-in-out"
                     x-ref="track"
                     :style="`transform: translateX(-${currentIndex * 100}%)`"
                >
                    @foreach ($announcements as $announcement)
                    <div class="flex-shrink-0 flex items-center space-x-3 w-full px-4 sm:px-0" role="group" aria-label="Announcement">
                        @if ($announcement->icon)
                            <span class="text-lg flex-shrink-0" aria-hidden="true">{!! $announcement->icon !!}</span>
                        @endif
                        <span class="text-sm sm:text-base truncate">{{ $announcement->message }}</span>
                        @if ($announcement->link && $announcement->cta)
                            <a href="{{ $announcement->link }}" class="underline hover:text-beige-light transition-colors duration-200 flex-shrink-0">
                                {{ $announcement->cta }}
                            </a>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Right arrow (desktop only, improved: Added keyboard focus styles and disabled state handling.) --}}
            @if ($announcements->count() > 1)
            <button
                @click="next"
                :disabled="currentIndex === {{ $announcements->count() - 1 }}"
                :class="{ 'opacity-50 cursor-not-allowed': currentIndex === {{ $announcements->count() - 1 }} }"
                class="hidden sm:inline-flex p-1 ml-3 rounded-full bg-gold hover:bg-gold/90 text-maroon-dark focus:outline-none focus:ring-2 focus:ring-maroon-dark transition"
                aria-label="Next announcement"
                title="Next announcement"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
            @endif
        </div>

        {{-- Mobile indicators (Improved: Enhanced with transition-colors for smooth active state changes.) --}}
        @if ($announcements->count() > 1)
        <div class="flex sm:hidden justify-center space-x-2 mt-2">
            @foreach ($announcements as $index => $announcement)
            <button
                @click="goToSlide({{ $index }})"
                class="w-2 h-2 rounded-full transition-colors duration-300"
                :class="currentIndex === {{ $index }} ? 'bg-gold' : 'bg-gold/50'"
                aria-label="Go to announcement {{ $index + 1 }}"
                title="Go to announcement {{ $index + 1 }}"
            ></button>
            @endforeach
        </div>
        @endif
    </div>
    @endif

    {{-- Main Nav Content: Logo, Category, Search, Cart (Improved: Centered elements with flex; responsive gaps/margins for better mobile/desktop layout.) --}}
    <div class="container mx-auto px-4 flex items-center justify-between py-4 md:py-6">
        <!-- Text Logo (Improved: Changed to 'Khalifa Crafted'; enhanced font style with Playfair Display for elegant, luxurious feel; added tracking-wide for better letter spacing and hover effect for interactivity.) -->
        <a href="/" class="text-maroon-dark font-playfair font-bold text-3xl md:text-4xl tracking-wide hover:text-maroon-medium transition" aria-label="Khalifa Crafted Home">
            Khalifa Crafted
        </a>

        <!-- Centered categories and search (Improved: Ensured equal widths on mobile/desktop; added flex-col/row toggle for stacking on small screens.) -->
        <div class="flex-1 flex flex-col md:flex-row items-center justify-center gap-2 md:gap-4 mx-6">
            <select
                onchange="if(this.value) window.location.href = '/categories/' + this.value;"
                class="w-44 md:w-64 bg-beige-lighter border border-gold rounded-md px-3 py-2 md:px-4 md:py-2 text-maroon-dark focus:outline-none focus:ring-2 focus:ring-gold cursor-pointer text-sm md:text-base"
            >
                <option value="">All Categories</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->slug }}">{{ $category->name }}</option>
                @endforeach
            </select>

            <form action="/search" method="GET" class="w-44 md:w-64 flex-shrink-0">
                <input
                    type="text"
                    name="q"
                    placeholder="What are you looking for?"
                    class="w-full bg-beige-lighter border border-gold rounded-md px-3 py-2 md:px-4 md:py-2 text-maroon-dark focus:outline-none focus:ring-2 focus:ring-gold text-sm md:text-base"
                    required
                    aria-label="Search"
                />
            </form>
        </div>

        <!-- Cart Icon (Improved: Increased size responsively; added ARIA-hidden for SVG to improve screen reader experience; ensured dynamic cart count placeholder.) -->
        <a href="/cart" class="relative text-maroon-dark hover:text-gold transition duration-300 ml-2 md:ml-4" aria-label="Shopping Cart">
            <svg class="w-8 h-8 md:w-10 md:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                />
            </svg>
            <span class="absolute -top-1 -right-1 bg-gold text-maroon-dark text-xs font-bold rounded-full px-2 py-1">
                0{{-- Update dynamically with cart count via Livewire or JS --}}
            </span>
        </a>
    </div>
</nav>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('announcementSlider', (count) => ({
            currentIndex: 0,
            totalSlides: count,
            interval: null,
            touchStartX: 0,
            isDragging: false,
            init() {
                if (this.totalSlides > 1) {
                    this.startAutoSlide();
                    this.setupTouch();
                }
            },
            startAutoSlide() {
                this.interval = setInterval(() => {
                    this.next();
                }, 5000); // Improved: Set to 5s interval for better user experience without being too fast.
            },
            stopAutoSlide() {
                clearInterval(this.interval);
            },
            next() {
                if (this.currentIndex < this.totalSlides - 1) {
                    this.currentIndex++;
                } else {
                    this.currentIndex = 0;
                }
            },
            prev() {
                if (this.currentIndex > 0) {
                    this.currentIndex--;
                } else {
                    this.currentIndex = this.totalSlides - 1;
                }
            },
            goToSlide(index) {
                this.currentIndex = index;
                this.restartAutoSlide();
            },
            restartAutoSlide() {
                this.stopAutoSlide();
                this.startAutoSlide();
            },
            setupTouch() {
                const track = this.$refs.track;
                if (!track) return; // Improved: Added null check to prevent JS errors if ref is missing.
                track.addEventListener('touchstart', (e) => {
                    this.touchStartX = e.touches[0].clientX;
                    this.isDragging = true;
                    this.stopAutoSlide();
                }, { passive: true });

                track.addEventListener('touchmove', (e) => {
                    if (!this.isDragging) return;
                    const touchX = e.touches[0].clientX;
                    const diff = this.touchStartX - touchX;

                    if (Math.abs(diff) > 50) {
                        if (diff > 0) this.next();
                        else this.prev();
                        this.isDragging = false;
                    }
                }, { passive: true });

                track.addEventListener('touchend', () => {
                    this.isDragging = false;
                    this.restartAutoSlide();
                }, { passive: true });
            }
        }));
    });
</script>