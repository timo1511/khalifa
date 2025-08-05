<x-layouts.guest>
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-b from-maroon-dark to-maroon-medium text-center py-20" style="background-image: url('{{ asset('images/bg.jpg') }}'); background-size: cover; background-position: center;">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-5xl md:text-6xl font-playfair text-white mb-6 leading-tight drop-shadow-2xl">
                Discover Timeless <span class="inline-block">Leather Craftsmanship</span>
            </h1>
            <p class="text-xl md:text-2xl text-white mb-10 font-light drop-shadow-lg">
                Customize wallets, belts, and more—crafted to perfection, personalized for you.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-4">
                <a href="/products" class="bg-white text-maroon-dark font-playfair px-8 py-3 rounded-md text-lg hover:bg-beige-light hover:text-maroon-dark transition-all shadow-md w-full sm:w-auto text-center">
                    Shop Now
                </a>
                <a href="/customize" class="bg-white border border-gold text-gold font-playfair px-8 py-3 rounded-md text-lg hover:bg-gold hover:text-maroon-dark transition-all w-full sm:w-auto text-center">
                    Customize
                </a>
            </div>
        </div>
    </section>

    <!-- Product Highlights -->
    <section class="py-16 bg-beige-light">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-playfair text-maroon-dark mb-10 text-center">Featured Products</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Product Card 1: Grey Wallet -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <img src="{{ asset('images/products/wallet1.jpg') }}" alt="Grey Leather Wallet" class="w-full h-60 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-playfair text-maroon-dark mb-2">Grey Leather Wallet</h3>
                        <p class="text-beige-dark mb-4">Modern, sleek, and customizable.</p>
                        <p class="text-xl text-gold font-semibold mb-4">$48.00</p>
                        <a href="/products/wallet-grey" class="inline-block bg-maroon-dark text-gold px-4 py-2 rounded-md hover:bg-maroon-medium transition">View Details</a>
                    </div>
                </div>
                <!-- Product Card 2: Zipped Wallet -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <img src="{{ asset('images/products/wallet2.jpg') }}" alt="Zipped Leather Wallet" class="w-full h-60 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-playfair text-maroon-dark mb-2">Zipped Leather Wallet</h3>
                        <p class="text-beige-dark mb-4">Secure zipped design for everyday use.</p>
                        <p class="text-xl text-gold font-semibold mb-4">$55.00</p>
                        <a href="/products/wallet-zipped" class="inline-block bg-maroon-dark text-gold px-4 py-2 rounded-md hover:bg-maroon-medium transition">View Details</a>
                    </div>
                </div>
                <!-- Product Card 3: Brown Wallet -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <img src="{{ asset('images/products/wallet3.jpg') }}" alt="Brown Leather Wallet" class="w-full h-60 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-playfair text-maroon-dark mb-2">Brown Leather Wallet</h3>
                        <p class="text-beige-dark mb-4">Rich brown finish, timeless style.</p>
                        <p class="text-xl text-gold font-semibold mb-4">$50.00</p>
                        <a href="/products/wallet-brown" class="inline-block bg-maroon-dark text-gold px-4 py-2 rounded-md hover:bg-maroon-medium transition">View Details</a>
                    </div>
                </div>
                <!-- Product Card 4: Brown Classic Wallet -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition-all">
                    <img src="{{ asset('images/products/wallet4.jpg') }}" alt="Brown Classic Leather Wallet" class="w-full h-60 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-playfair text-maroon-dark mb-2">Brown Classic Wallet</h3>
                        <p class="text-beige-dark mb-4">Classic design, premium craftsmanship.</p>
                        <p class="text-xl text-gold font-semibold mb-4">$52.00</p>
                        <a href="/products/wallet-brown-classic" class="inline-block bg-maroon-dark text-gold px-4 py-2 rounded-md hover:bg-maroon-medium transition">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Personalization Showcase -->
    <section class="py-16 bg-maroon-medium text-beige-light">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-4xl font-playfair text-gold mb-10 text-center">Make It Yours</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-playfair mb-4">Custom Engraving & Logos</h3>
                    <p>Upload your logo or add personal text and enjoy a truly unique accessory.</p>
                </div>
                <div>
                    <h3 class="text-2xl font-playfair mb-4">Color & Stitching Options</h3>
                    <p>Match your piece to your style with rich color choices and stitch details.</p>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="/customize" class="bg-gold text-maroon-dark font-playfair px-8 py-3 rounded-md text-lg hover:bg-beige-light transition-all">Start Customizing</a>
            </div>
        </div>
    </section>

    <!-- Social Proof / Testimonials -->
    <section class="py-16 bg-beige-lighter">
        <div class="max-w-5xl mx-auto px-4">
            <h2 class="text-4xl font-playfair text-maroon-dark mb-10 text-center">What Our Customers Say</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <p class="text-maroon-dark mb-4">"Exceptional quality and perfect customization!"</p>
                    <div class="flex items-center">
                        <span class="text-gold font-bold text-lg">★★★★★</span>
                        <span class="ml-2 text-beige-dark">- John Doe</span>
                    </div>
                </div>
                <!-- Add more testimonials as needed -->
            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section class="py-16 bg-maroon-dark text-beige-light">
        <div class="max-w-2xl mx-auto px-4 text-center">
            <h2 class="text-4xl font-playfair text-gold mb-4">Stay Updated</h2>
            <p class="mb-8">Subscribe for promotions, new launches, and exclusive offers.</p>
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{ route('subscribe') }}" method="POST" class="flex flex-col sm:flex-row gap-2 justify-center items-center">
                @csrf
                <input type="email" name="email" placeholder="Enter your email" required class="px-4 py-2 rounded-l-md bg-beige-lighter text-maroon-dark focus:outline-none w-full sm:w-auto">
                <button type="submit" class="bg-gold text-maroon-dark px-6 py-2 rounded-r-md hover:bg-beige-light transition">Subscribe</button>
            </form>
        </div>
    </section>
</x-layouts.guest>
