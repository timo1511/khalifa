@php
    use App\Models\Announcement;
    $announcements = Announcement::where('is_active', true)->get();
@endphp

@if ($announcements->count() > 0)
<div class="bg-maroon-medium text-gold py-2 overflow-hidden select-none relative" role="region" aria-live="polite" aria-label="Announcements" x-data="announcementSlider({{ $announcements->count() }})">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Mobile Indicators --}}
        <div class="sm:hidden flex justify-center space-x-2 mb-2">
            @foreach ($announcements as $index => $announcement)
            <button @click="goToSlide({{ $index }})"
                class="w-2 h-2 rounded-full transition-all duration-300"
                :class="{ 'bg-gold': currentIndex === {{ $index }}, 'bg-gold/50': currentIndex !== {{ $index }} }"
                aria-label="Go to announcement {{ $index + 1 }}">
            </button>
            @endforeach
        </div>

        <div class="slider overflow-hidden relative">
            <div class="slider__track flex transition-transform duration-500 ease-in-out" 
                x-ref="track" 
                :style="{ transform: `translateX(-${currentIndex * 100}%)` }">
                @foreach ($announcements as $announcement)
                <div class="slider__item flex-shrink-0 w-full flex items-center justify-center space-x-3 px-4"
                     role="group" aria-label="Announcement">
                    @if ($announcement->icon)
                        <span class="text-lg flex-shrink-0" aria-hidden="true">{!! $announcement->icon !!}</span>
                    @endif
                    <span class="text-sm sm:text-base text-center">{{ $announcement->message }}</span>
                    @if ($announcement->link && $announcement->cta)
                        <a href="{{ $announcement->link }}" class="underline hover:text-beige-light transition-colors duration-200 flex-shrink-0">
                            {{ $announcement->cta }}
                        </a>
                    @endif
                </div>
                @endforeach
            </div>
        </div>

        {{-- Arrow Buttons desktop --}}
        @if ($announcements->count() > 1)
        <button class="hidden sm:block absolute left-2 top-1/2 -translate-y-1/2 bg-gold hover:bg-gold/80 text-maroon-dark p-1 rounded-full focus:outline-none focus:ring-2 focus:ring-maroon-dark transition" 
            @click="prev" 
            :disabled="currentIndex === 0"
            :class="{ 'opacity-50 cursor-not-allowed': currentIndex === 0 }"
            aria-label="Previous announcement">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button class="hidden sm:block absolute right-2 top-1/2 -translate-y-1/2 bg-gold hover:bg-gold/80 text-maroon-dark p-1 rounded-full focus:outline-none focus:ring-2 focus:ring-maroon-dark transition" 
            @click="next" 
            :disabled="currentIndex === {{ $announcements->count() - 1 }}"
            :class="{ 'opacity-50 cursor-not-allowed': currentIndex === {{ $announcements->count() - 1 }} }"
            aria-label="Next announcement">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
        @endif
    </div>
</div>

{{-- Alpine JS for the slider --}}
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
                }, 5000);
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
@endif
