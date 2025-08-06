<x-layouts.guest>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-b from-maroon-dark to-maroon-medium text-center py-20 md:py-32" style="background-image: url('{{ asset('images/bg.jpg') }}'); background-size: cover; background-position: center;">
        <!-- Overlay for better text readability -->
        <div class="absolute inset-0 bg-black opacity-40"></div>
        <div class="relative max-w-5xl mx-auto px-4 md:px-8">
            <h1 class="text-4xl md:text-6xl font-playfair text-white mb-6 leading-tight drop-shadow-2xl">
                Discover Timeless <span class="block md:inline-block">Leather Craftsmanship</span>
            </h1>
            <p class="text-lg md:text-2xl text-white mb-10 font-light drop-shadow-lg max-w-3xl mx-auto">
                Customize wallets, belts, and much more—crafted to perfection, personalized for you.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-4">
                <a href="/products" class="bg-white text-maroon-dark font-playfair px-6 py-3 md:px-8 md:py-3 rounded-md text-lg hover:bg-beige-light hover:text-maroon-dark transition-all shadow-md w-full sm:w-auto text-center">
                    Shop Now
                </a>
                <a href="/customize" class="bg-transparent border-2 border-gold text-gold font-playfair px-6 py-3 md:px-8 md:py-3 rounded-md text-lg hover:bg-gold hover:text-maroon-dark transition-all w-full sm:w-auto text-center">
                    Customize
                </a>
            </div>
        </div>
    </section>

    <!-- Product Highlights -->
    <section class="py-16 md:py-20 bg-beige-light">
        <div class="max-w-6xl mx-auto px-4 md:px-8">
            <h2 class="text-3xl md:text-4xl font-playfair text-maroon-dark mb-10 md:mb-12 text-center">Featured Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                <!-- Product Card 1: Grey Wallet -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="{{ asset('images/products/wallet1.jpg') }}" alt="Grey Leather Wallet" class="w-full h-48 md:h-60 object-cover lazyload" loading="lazy">
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl md:text-2xl font-playfair text-maroon-dark mb-2">Grey Leather Wallet</h3>
                        <p class="text-beige-dark mb-4 text-sm md:text-base">Modern, sleek, and customizable.</p>
                        <p class="text-lg md:text-xl text-gold font-semibold mb-4">$48.00</p>
                        <a href="/products/wallet-grey" class="inline-block bg-maroon-dark text-gold px-4 py-2 rounded-md hover:bg-maroon-medium transition text-sm md:text-base">View Details</a>
                    </div>
                </div>
                <!-- Product Card 2: Zipped Wallet -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="{{ asset('images/products/wallet2.jpg') }}" alt="Zipped Leather Wallet" class="w-full h-48 md:h-60 object-cover lazyload" loading="lazy">
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl md:text-2xl font-playfair text-maroon-dark mb-2">Zipped Leather Wallet</h3>
                        <p class="text-beige-dark mb-4 text-sm md:text-base">Secure zipped design for everyday use.</p>
                        <p class="text-lg md:text-xl text-gold font-semibold mb-4">$55.00</p>
                        <a href="/products/wallet-zipped" class="inline-block bg-maroon-dark text-gold px-4 py-2 rounded-md hover:bg-maroon-medium transition text-sm md:text-base">View Details</a>
                    </div>
                </div>
                <!-- Product Card 3: Brown Wallet -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="{{ asset('images/products/wallet3.jpg') }}" alt="Brown Leather Wallet" class="w-full h-48 md:h-60 object-cover lazyload" loading="lazy">
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl md:text-2xl font-playfair text-maroon-dark mb-2">Brown Leather Wallet</h3>
                        <p class="text-beige-dark mb-4 text-sm md:text-base">Rich brown finish, timeless style.</p>
                        <p class="text-lg md:text-xl text-gold font-semibold mb-4">$50.00</p>
                        <a href="/products/wallet-brown" class="inline-block bg-maroon-dark text-gold px-4 py-2 rounded-md hover:bg-maroon-medium transition text-sm md:text-base">View Details</a>
                    </div>
                </div>
                <!-- Product Card 4: Brown Classic Wallet -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="{{ asset('images/products/wallet4.jpg') }}" alt="Brown Classic Leather Wallet" class="w-full h-48 md:h-60 object-cover lazyload" loading="lazy">
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl md:text-2xl font-playfair text-maroon-dark mb-2">Brown Classic Wallet</h3>
                        <p class="text-beige-dark mb-4 text-sm md:text-base">Classic design, premium craftsmanship.</p>
                        <p class="text-lg md:text-xl text-gold font-semibold mb-4">$52.00</p>
                        <a href="/products/wallet-brown-classic" class="inline-block bg-maroon-dark text-gold px-4 py-2 rounded-md hover:bg-maroon-medium transition text-sm md:text-base">View Details</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="/products" class="bg-maroon-dark text-gold font-playfair px-6 py-3 rounded-md text-lg hover:bg-maroon-medium transition-all">View All Products</a>
            </div>
        </div>
    </section>

    <!-- Personalization Showcase -->
    <section class="py-16 md:py-20 bg-maroon-medium text-beige-light">
        <div class="max-w-6xl mx-auto px-4 md:px-8">
            <h2 class="text-3xl md:text-4xl font-playfair text-gold mb-10 md:mb-12 text-center">Make It Yours</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
                <div class="p-4 md:p-6 bg-maroon-dark rounded-xl shadow-md">
                    <h3 class="text-xl md:text-2xl font-playfair mb-4 text-gold">Custom Engraving & Logos</h3>
                    <p class="text-sm md:text-base">Upload your logo or add personal text and enjoy a truly unique accessory.</p>
                </div>
                <div class="p-4 md:p-6 bg-maroon-dark rounded-xl shadow-md">
                    <h3 class="text-xl md:text-2xl font-playfair mb-4 text-gold">Color & Stitching Options</h3>
                    <p class="text-sm md:text-base">Match your piece to your style with rich color choices and stitch details.</p>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="/customize" class="bg-gold text-maroon-dark font-playfair px-6 py-3 md:px-8 md:py-3 rounded-md text-lg hover:bg-beige-light transition-all">Start Customizing</a>
            </div>
        </div>
    </section>

    <!-- Latest Blogs Section -->
    <section class="py-16 md:py-20 bg-beige-lighter">
        <div class="max-w-6xl mx-auto px-4 md:px-8">
            <h2 class="text-3xl md:text-4xl font-playfair text-maroon-dark mb-10 md:mb-12 text-center">Latest Blog Posts</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <!-- Blog Card 1 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="{{ asset('images/blogs/blog1.jpg') }}" alt="The Art of Leather Craftsmanship" class="w-full h-48 object-cover lazyload" loading="lazy">
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl md:text-2xl font-playfair text-maroon-dark mb-2">The Art of Leather Craftsmanship</h3>
                        <p class="text-beige-dark mb-4 text-sm md:text-base">Explore the timeless techniques behind our premium leather goods and how we blend tradition with modern design.</p>
                        <a href="/blog/art-of-leather-craftsmanship" class="inline-block text-gold font-semibold hover:underline">Read More →</a>
                    </div>
                </div>
                <!-- Blog Card 2 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="{{ asset('images/blogs/blog2.jpg') }}" alt="Customization Tips for Your Wallet" class="w-full h-48 object-cover lazyload" loading="lazy">
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl md:text-2xl font-playfair text-maroon-dark mb-2">Customization Tips for Your Wallet</h3>
                        <p class="text-beige-dark mb-4 text-sm md:text-base">Learn how to personalize your wallet with engravings, colors, and more to make it uniquely yours.</p>
                        <a href="/blog/customization-tips-wallet" class="inline-block text-gold font-semibold hover:underline">Read More →</a>
                    </div>
                </div>
                <!-- Blog Card 3 -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all transform hover:scale-105">
                    <img src="{{ asset('images/blogs/blog3.jpg') }}" alt="Sustainable Leather Sourcing" class="w-full h-48 object-cover lazyload" loading="lazy">
                    <div class="p-4 md:p-6">
                        <h3 class="text-xl md:text-2xl font-playfair text-maroon-dark mb-2">Sustainable Leather Sourcing</h3>
                        <p class="text-beige-dark mb-4 text-sm md:text-base">Discover our commitment to ethical and sustainable practices in sourcing the finest leather materials.</p>
                        <a href="/blog/sustainable-leather-sourcing" class="inline-block text-gold font-semibold hover:underline">Read More →</a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="/blog" class="bg-maroon-dark text-gold font-playfair px-6 py-3 rounded-md text-lg hover:bg-maroon-medium transition-all">View All Blogs</a>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section class="py-16 md:py-20 bg-maroon-dark text-beige-light">
        <div class="max-w-2xl mx-auto px-4 md:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-playfair text-gold mb-4">Stay Updated</h2>
            <p class="mb-8 text-sm md:text-base">Subscribe for promotions, new launches, and exclusive offers.</p>
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            @if($errors->has('email'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    {{ $errors->first('email') }}
                </div>
            @endif
            <form action="{{ route('subscribe') }}" method="POST" class="flex flex-col sm:flex-row gap-2 justify-center items-center">
                @csrf
                <input type="email" name="email" placeholder="Enter your email" required class="px-4 py-2 rounded-l-md bg-beige-lighter text-maroon-dark focus:outline-none focus:ring-2 focus:ring-gold w-full sm:w-auto">
                <button type="submit" class="bg-gold text-maroon-dark px-6 py-2 rounded-r-md hover:bg-beige-light transition">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Social Proof / Testimonials -->
    <section class="py-16 md:py-20 bg-beige-light">
        <div class="max-w-5xl mx-auto px-4 md:px-8">
            <h2 class="text-3xl md:text-4xl font-playfair text-maroon-dark mb-10 md:mb-12 text-center">What Our Customers Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">
                <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all transform hover:scale-105 relative">
                    <span class="absolute top-4 left-4 text-gold text-4xl opacity-50">“</span>
                    <p class="text-maroon-dark mb-4 text-sm md:text-base italic pl-6">Exceptional quality and perfect customization!</p>
                    <span class="absolute bottom-4 right-4 text-gold text-4xl opacity-50">”</span>
                    <div class="flex items-center mt-4">
                        <span class="text-gold font-bold text-lg">★★★★★</span>
                        <span class="ml-2 text-beige-dark">- Kevin Gaitho</span>
                    </div>
                </div>
                <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all transform hover:scale-105 relative">
                    <span class="absolute top-4 left-4 text-gold text-4xl opacity-50">“</span>
                    <p class="text-maroon-dark mb-4 text-sm md:text-base italic pl-6">The leather feels premium, and the engraving is spot on.</p>
                    <span class="absolute bottom-4 right-4 text-gold text-4xl opacity-50">”</span>
                    <div class="flex items-center mt-4">
                        <span class="text-gold font-bold text-lg">★★★★★</span>
                        <span class="ml-2 text-beige-dark">- Jane Doe</span>
                    </div>
                </div>
                <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all transform hover:scale-105 relative">
                    <span class="absolute top-4 left-4 text-gold text-4xl opacity-50">“</span>
                    <p class="text-maroon-dark mb-4 text-sm md:text-base italic pl-6">Fast delivery and beautiful craftsmanship. Highly recommend!</p>
                    <span class="absolute bottom-4 right-4 text-gold text-4xl opacity-50">”</span>
                    <div class="flex items-center mt-4">
                        <span class="text-gold font-bold text-lg">★★★★★</span>
                        <span class="ml-2 text-beige-dark">- John Smith</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.guest>