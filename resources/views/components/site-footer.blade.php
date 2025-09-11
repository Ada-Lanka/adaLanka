<footer class="site-footer bg-primary text-white py-8 mt-auto">
    <div class="container mx-auto px-4">
        <!-- Main Footer Content -->
        <div class="flex flex-col md:flex-row gap-8 mb-6">
            
            <!-- Section 1: Logo -->
            <div class="flex-1">
                <h2 class="text-2xl font-bold mb-4">Ada Lanka</h2>
                <p class="text-purple-100 text-sm">Your trusted source for news and information across Sri Lanka.</p>
            </div>

            <!-- Section 2: Links -->
            <div class="flex-1">
                <h3 class="text-lg font-semibold mb-4">Categories</h3>
                <div class="grid grid-cols-2 gap-2">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp
                    @foreach($categories as $category)
                        <a href="/category/{{ $category->slug }}" class="footer-link text-purple-100 hover:text-white hover:underline transition-colors text-sm">{{ $category->category_name }}</a>
                    @endforeach
                </div>
            </div>

            <!-- Section 3: Contact Us -->
            <div class="flex-1">
                <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                <div class="space-y-2 mb-4">
                    <a href="mailto:info@adalanka.com" class="block text-purple-100 hover:text-white hover:underline transition-colors text-sm">info@adalanka.com</a>
                    <a href="mailto:news@adalanka.com" class="block text-purple-100 hover:text-white hover:underline transition-colors text-sm">news@adalanka.com</a>
                </div>
                
                <!-- Social Icons -->
                <div class="flex space-x-4">
                    <a href="#" class="text-purple-100 hover:text-white transition-colors">
                        <!--<x-iconpark-facebook class="w-5 h-5" />-->
                    </a>
                    <a href="#" class="text-purple-100 hover:text-white transition-colors">
                        <!--<x-iconpark-instagram-o class="w-5 h-5" />-->
                    </a>
                    <a href="#" class="text-purple-100 hover:text-white transition-colors">
                        <!--<x-iconpark-twitter class="w-5 h-5" />-->
                    </a>
                    <a href="#" class="text-purple-100 hover:text-white transition-colors">
                        <!--<x-iconpark-wechat class="w-5 h-5" />-->
                    </a>
                </div>
            </div>

            <!-- Section 4: Legal -->
            <div class="flex-1">
                <h3 class="text-lg font-semibold mb-4">Legal</h3>
                <div class="space-y-2">
                    <a href="/" class="block text-purple-100 hover:text-white hover:underline transition-colors text-sm">Privacy Policy</a>
                    <a href="/" class="block text-purple-100 hover:text-white hover:underline transition-colors text-sm">Terms & Conditions</a>
                </div>
            </div>
        </div>

        <!-- Bottom Copyright -->
        <div class="border-t border-purple-400 pt-4">
            <p class="text-center text-purple-100 text-sm">
                &copy; <span id="currentYear">2025</span> Ada Lanka - All rights reserved
            </p>
        </div>
    </div>
</footer>
