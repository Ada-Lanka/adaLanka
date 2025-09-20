<!-- resources/views/components/site-footer.blade.php -->
<footer class="w-full text-white py-10" style="background: linear-gradient(90deg, #5F0055, #C500B1);">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Desktop (4 columns) -->
        <div class="hidden md:grid grid-cols-4 gap-8">

            <!-- Logo + Left Menu -->
            <div>
                <img src="{{ asset('images/logo.png') }}" alt="Ada Lanka" class="w-50 mb-4">
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">Home</a></li>
                    <li><a href="#" class="hover:underline">Ada Lanka Hub</a></li>
                    <li><a href="#" class="hover:underline">Gallery</a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div>
                <h3 class="font-semibold mb-3">Explore</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">Politics & Policy</a></li>
                    <li><a href="#" class="hover:underline">Business</a></li>
                    <li><a href="#" class="hover:underline">Health</a></li>
                    <li><a href="#" class="hover:underline">Energy & Climate</a></li>
                    <li><a href="#" class="hover:underline">Tech</a></li>
                    <li><a href="#" class="hover:underline">Sports</a></li>
                    <li><a href="#" class="hover:underline">Entertainment</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="font-semibold mb-3">Contact us</h3>
                <p>Example@gmail.com</p>
                <p>Example@gmail.com</p>
                <div class="flex space-x-4 mt-3">
                    <a href="#"><img src="{{ asset('images/fb.png') }}" alt="Facebook" class="w-7 h-7"></a>
                    <a href="#"><img src="{{ asset('images/in.png') }}" alt="Instagram" class="w-7 h-7"></a>
                    <a href="#"><img src="{{ asset('images/wp.png') }}" alt="WhatsApp" class="w-7 h-7"></a>
                    <a href="#"><img src="{{ asset('images/x.png') }}" alt="X" class="w-7 h-7"></a>
                </div>
            </div>

            <!-- Policies -->
            <div>
                <h3 class="font-semibold mb-3">Legal</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:underline">Privacy & Policy</a></li>
                    <li><a href="#" class="hover:underline">Terms Of Services</a></li>
                    <li><a href="#" class="hover:underline">DMCA</a></li>
                </ul>
            </div>
        </div>

        <!-- Mobile (stacked layout) -->
        <div class="md:hidden text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Ada Lanka" class="mx-auto w-28 mb-3">
            <h3 class="font-semibold mb-2">Contact us</h3>
            <p>Example@gmail.com</p>
            <p>Example@gmail.com</p>
            <div class="flex justify-center space-x-4 mt-3 mb-6">
                <a href="#"><img src="{{ asset('images/fb.png') }}" alt="Facebook" class="w-7 h-7"></a>
                <a href="#"><img src="{{ asset('images/in.png') }}" alt="Instagram" class="w-7 h-7"></a>
                <a href="#"><img src="{{ asset('images/wp.png') }}" alt="WhatsApp" class="w-7 h-7"></a>
                <a href="#"><img src="{{ asset('images/x.png') }}" alt="X" class="w-7 h-7"></a>
            </div>

            <div class="grid grid-cols-2 gap-6 border-t border-b border-white/30 py-6">
                <div>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:underline">Home</a></li>
                        <li><a href="#" class="hover:underline">Ada Lanka Hub</a></li>
                        <li><a href="#" class="hover:underline">Gallery</a></li>
                    </ul>
                </div>
                <div>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:underline">Politics & Policy</a></li>
                        <li><a href="#" class="hover:underline">Business</a></li>
                        <li><a href="#" class="hover:underline">Health</a></li>
                        <li><a href="#" class="hover:underline">Energy & Climate</a></li>
                        <li><a href="#" class="hover:underline">Tech</a></li>
                        <li><a href="#" class="hover:underline">Sports</a></li>
                        <li><a href="#" class="hover:underline">Entertainment</a></li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row justify-center items-center gap-4 mt-4 text-sm">
                <a href="#" class="hover:underline">Privacy & Policy</a>
                <a href="#" class="hover:underline">Terms Of Services</a>
                <a href="#" class="hover:underline">DMCA</a>
            </div>
        </div>

        <!-- Bottom copyright -->
        <div class="border-t border-white/20 mt-6 pt-4 text-center text-xs">
            © 2025 ADALanka.com. All rights reserved.
        </div>
    </div>
</footer>
