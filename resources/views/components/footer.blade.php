<footer class="bg-white border-t border-gray-200/80 pt-12 pb-8 text-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div class="md:col-span-2">
                <span class="text-lg font-semibold tracking-tight text-appleTextDark">ThreadCraft Apparel</span>
                <p class="mt-2 text-appleTextMuted max-w-sm leading-relaxed">
                    Sustainable Style, Seamlessly Crafted. Redefining everyday clothing with zero-waste manufacturing and organic fabrics.
                </p>
            </div>
            <div>
                <h3 class="font-semibold text-appleTextDark mb-3">Navigation</h3>
                <ul class="space-y-2 text-appleTextMuted">
                    <li><a href="{{ route('home') }}" class="hover:text-appleTextDark transition">Home</a></li>
                    <li><a href="{{ route('about') }}" class="hover:text-appleTextDark transition">About Us</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-appleTextDark transition">Services</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-appleTextDark transition">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-appleTextDark mb-3">Follow Us</h3>
                <ul class="space-y-2 text-appleTextMuted">
                    <li><a href="#" class="hover:text-appleTextDark transition">Instagram</a></li>
                    <li><a href="#" class="hover:text-appleTextDark transition">Pinterest</a></li>
                    <li><a href="#" class="hover:text-appleTextDark transition">TikTok</a></li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-gray-100 pt-6 flex flex-col md:flex-row justify-between items-center text-appleTextMuted text-xs">
            <p>&copy; {{ date('Y') }} ThreadCraft Apparel Studio. All rights reserved.</p>
            <div class="space-x-4 mt-2 md:mt-0">
                <a href="#" class="hover:text-appleTextDark">Sustainability Standard</a>
                <a href="#" class="hover:text-appleTextDark">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>