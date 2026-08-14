<nav class="sticky top-0 z-50 bg-white/70 backdrop-blur-md border-b border-gray-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-14">
            <!-- Brand Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="text-xl font-semibold tracking-tight text-appleTextDark">
                    ThreadCraft<span class="text-appleAccent">.</span>
                </a>
            </div>
            
            <!-- Navigation Links -->
            <div class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-appleAccent font-semibold' : 'text-appleTextMuted hover:text-appleTextDark' }} transition">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-appleAccent font-semibold' : 'text-appleTextMuted hover:text-appleTextDark' }} transition">About</a>
                <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-appleAccent font-semibold' : 'text-appleTextMuted hover:text-appleTextDark' }} transition">Services</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-appleAccent font-semibold' : 'text-appleTextMuted hover:text-appleTextDark' }} transition">Contact</a>
            </div>

            <!-- CTA Button -->
            <div class="hidden md:flex">
                <a href="{{ route('services') }}" class="bg-appleTextDark text-white px-4 py-1.5 rounded-full text-sm font-medium hover:bg-black transition">
                    Explore Studio
                </a>
            </div>
        </div>
    </div>
</nav>