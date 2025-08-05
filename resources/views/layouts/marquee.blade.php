@php
    // Fetch announcements from the database
    $announcements = App\Models\Announcement::where('is_active', true)->get();
@endphp

<div class="bg-white text-maroon-dark py-2 overflow-hidden" role="region" aria-label="Promotional Announcements" x-data="slider">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="slider overflow-hidden">
            <div class="slider__track flex transition-transform duration-500 ease-in-out" x-ref="track" :style="{ transform: `translateX(-${currentIndex * 100}%)` }">
                @foreach ($announcements as $announcement)
                    <div class="slider__item flex-shrink-0 w-full flex items-center justify-center space-x-3">
                        <span class="text-lg">{{ $announcement->icon }}</span>
                        <span>{{ $announcement->message }}</span>
                        <a href="{{ $announcement->link }}" class="underline hover:text-maroon-medium">{{ $announcement->cta }}</a>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Navigation Arrows (Desktop) -->
        <button class="hidden sm:block absolute left-0 top-1/2 -translate-y-1/2 text-maroon-dark hover:text-maroon-medium focus:outline-none focus:ring-2 focus:ring-maroon-medium" @click="prev" aria-label="Previous announcement">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button class="hidden sm:block absolute right-0 top-1/2 -translate-y-1/2 text-maroon-dark hover:text-maroon-medium focus:outline-none focus:ring-2 focus:ring-maroon-medium" @click="next" aria-label="Next announcement">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('slider', () => ({
            currentIndex: 0,
            interval: null,
            init() {
                this.startAutoSlide();
                this.setupTouch();
            },
            startAutoSlide() {
                this.interval = setInterval(() => {
                    this.next();
                }, 5000); // Slide every 5 seconds
            },
            stopAutoSlide() {
                clearInterval(this.interval);
            },
            next() {
                this.currentIndex = (this.currentIndex + 1) % {{ $announcements->count() }};
            },
            prev() {
                this.currentIndex = (this.currentIndex - 1 + {{ $announcements->count() }}) % {{ $announcements->count() }};
            },
            setupTouch() {
                const track = this.$refs.track;
                let startX = 0;
                let isDragging = false;

                track.addEventListener('touchstart', (e) => {
                    startX = e.touches[0].clientX;
                    isDragging = true;
                    this.stopAutoSlide();
                });

                track.addEventListener('touchmove', (e) => {
                    if (!isDragging) return;
                    const currentX = e.touches[0].clientX;
                    const diff = startX - currentX;
                    if (Math.abs(diff) > 50) {
                        if (diff > 0) this.next();
                        else this.prev();
                        isDragging = false;
                    }
                });

                track.addEventListener('touchend', () => {
                    isDragging = false;
                    this.startAutoSlide();
                });
            },
        }));
    });
</script>
