<nav x-data="{ open: false }" class="sticky top-0 z-50 bg-apparelBg/80 backdrop-blur-md border-b border-apparelBorder/80 shadow-md transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            
            <!-- Brand Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="text-xl sm:text-2xl font-bold tracking-tight text-apparelDark hover:opacity-90 transition">
                    ThreadCraft<span class="text-apparelAccent">.</span>
                </a>
            </div>
            
            <!-- Desktop Navigation Links -->
            <div class="hidden md:flex space-x-8 text-sm font-medium">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-apparelAccent font-semibold' : 'text-apparelMuted hover:text-apparelDark' }} transition-colors py-1">Home</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-apparelAccent font-semibold' : 'text-apparelMuted hover:text-apparelDark' }} transition-colors py-1">About</a>
                <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'text-apparelAccent font-semibold' : 'text-apparelMuted hover:text-apparelDark' }} transition-colors py-1">Services</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-apparelAccent font-semibold' : 'text-apparelMuted hover:text-apparelDark' }} transition-colors py-1">Contact</a>
            </div>

            <!-- Desktop CTA Button -->
            <div class="hidden md:flex items-center">
                <a href="{{ route('services') }}" class="bg-apparelDark text-apparelBg px-5 py-2 rounded-full text-sm font-medium hover:bg-apparelAccent transition duration-300 shadow-sm hover:shadow">
                    Explore Studio
                </a>
            </div>

            <!-- Mobile & Tablet Hamburger Toggle -->
            <div class="flex md:hidden items-center">
                <button @click="open = !open" type="button" class="text-apparelDark p-2 rounded-md hover:bg-apparelBorder/40 focus:outline-none transition">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="open" x-cloak stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div x-show="open" x-cloak x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="md:hidden bg-apparelBg border-b border-apparelBorder px-4 pt-3 pb-6 space-y-3 shadow-inner">
        <a href="{{ route('home') }}" class="block px-3 py-2 rounded-xl text-base font-medium {{ request()->routeIs('home') ? 'bg-apparelCard font-semibold text-apparelAccent shadow-sm' : 'text-apparelMuted hover:bg-apparelCardWarm' }}">Home</a>
        <a href="{{ route('about') }}" class="block px-3 py-2 rounded-xl text-base font-medium {{ request()->routeIs('about') ? 'bg-apparelCard font-semibold text-apparelAccent shadow-sm' : 'text-apparelMuted hover:bg-apparelCardWarm' }}">About</a>
        <a href="{{ route('services') }}" class="block px-3 py-2 rounded-xl text-base font-medium {{ request()->routeIs('services') ? 'bg-apparelCard font-semibold text-apparelAccent shadow-sm' : 'text-apparelMuted hover:bg-apparelCardWarm' }}">Services</a>
        <a href="{{ route('contact') }}" class="block px-3 py-2 rounded-xl text-base font-medium {{ request()->routeIs('contact') ? 'bg-apparelCard font-semibold text-apparelAccent shadow-sm' : 'text-apparelMuted hover:bg-apparelCardWarm' }}">Contact</a>
        <div class="pt-2">
            <a href="{{ route('services') }}" class="block text-center bg-apparelDark text-apparelBg py-2.5 rounded-full text-base font-medium hover:bg-apparelAccent transition shadow-sm">
                Explore Studio
            </a>
        </div>
    </div>
</nav>