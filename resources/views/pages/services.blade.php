@extends('layouts.app')

@section('content')

<!-- Hero Header Section -->
<section class="relative pt-16 pb-12 sm:pt-20 sm:pb-16 px-4 sm:px-6 lg:px-8 text-center max-w-4xl mx-auto">
    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-apparelCardWarm text-apparelAccent text-xs sm:text-sm font-semibold tracking-wider uppercase mb-6 border border-apparelBorder shadow-sm animate-fade-in-up">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
        Our Studio Expertise
    </div>
    
    <h1 class="text-4xl sm:text-6xl md:text-7xl font-bold tracking-tight text-apparelDark mb-6 leading-tight animate-fade-in-up delay-100">
        Apparel Services <br class="hidden sm:block">Tailored for You
    </h1>
    
    <p class="text-base sm:text-lg md:text-xl text-apparelMuted max-w-2xl mx-auto leading-relaxed animate-fade-in-up delay-200">
        End-to-end design, sustainable textile sourcing, and custom apparel production engineered to elevate your brand.
    </p>
</section>

<!-- Services Grid (6 Required Services) -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20 sm:pb-24 animate-fade-in-up delay-300">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        
        <!-- 1. Custom Apparel Design -->
        <div class="bg-apparelCard p-8 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-lg hover:-translate-y-2 transition-all duration-300 group relative overflow-hidden flex flex-col justify-between">
            <div class="absolute -right-6 -top-6 w-32 h-32 bg-apparelCardWarm/40 rounded-full blur-2xl pointer-events-none group-hover:bg-apparelAccent/10 transition duration-500"></div>
            <div>
                <div class="w-14 h-14 bg-apparelCardWarm text-apparelAccent rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-apparelAccent group-hover:text-white transition duration-300 shadow-sm border border-apparelBorder">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 0A3 3 0 104.5 13.5l2.121-2.121m2.5-2.258a3 3 0 10-4.242-4.243L7 7.121"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-apparelDark mb-3">Custom Apparel Design</h3>
                <p class="text-apparelMuted leading-relaxed text-sm sm:text-base">Tailored garment concepts from initial sketch to final pattern making, meticulously designed to align with your brand's unique aesthetic.</p>
            </div>
        </div>

        <!-- 2. Sustainable Fabric Sourcing -->
        <div class="bg-apparelCard p-8 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-lg hover:-translate-y-2 transition-all duration-300 group relative overflow-hidden flex flex-col justify-between">
            <div class="absolute -right-6 -top-6 w-32 h-32 bg-apparelCardWarm/40 rounded-full blur-2xl pointer-events-none group-hover:bg-apparelAccent/10 transition duration-500"></div>
            <div>
                <div class="w-14 h-14 bg-apparelCardWarm text-apparelAccent rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-apparelAccent group-hover:text-white transition duration-300 shadow-sm border border-apparelBorder">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-apparelDark mb-3">Sustainable Fabric Sourcing</h3>
                <p class="text-apparelMuted leading-relaxed text-sm sm:text-base">Gain direct access to organic cotton, premium linen, durable hemp, and recycled polyester fabrics from certified eco-friendly mills.</p>
            </div>
        </div>

        <!-- 3. Private Label Production -->
        <div class="bg-apparelCard p-8 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-lg hover:-translate-y-2 transition-all duration-300 group relative overflow-hidden flex flex-col justify-between">
            <div class="absolute -right-6 -top-6 w-32 h-32 bg-apparelCardWarm/40 rounded-full blur-2xl pointer-events-none group-hover:bg-apparelAccent/10 transition duration-500"></div>
            <div>
                <div class="w-14 h-14 bg-apparelCardWarm text-apparelAccent rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-apparelAccent group-hover:text-white transition duration-300 shadow-sm border border-apparelBorder">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-apparelDark mb-3">Private Label Production</h3>
                <p class="text-apparelMuted leading-relaxed text-sm sm:text-base">Small-batch and bulk clothing manufacturing designed for emerging brands looking for premium, ethically made apparel at scale.</p>
            </div>
        </div>

        <!-- 4. Eco-Friendly Printing & Embroidery -->
        <div class="bg-apparelCard p-8 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-lg hover:-translate-y-2 transition-all duration-300 group relative overflow-hidden flex flex-col justify-between">
            <div class="absolute -right-6 -top-6 w-32 h-32 bg-apparelCardWarm/40 rounded-full blur-2xl pointer-events-none group-hover:bg-apparelAccent/10 transition duration-500"></div>
            <div>
                <div class="w-14 h-14 bg-apparelCardWarm text-apparelAccent rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-apparelAccent group-hover:text-white transition duration-300 shadow-sm border border-apparelBorder">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-apparelDark mb-3">Eco Printing & Embroidery</h3>
                <p class="text-apparelMuted leading-relaxed text-sm sm:text-base">Water-based screen printing and high-density embroidery utilizing non-toxic, non-fade dyes and recycled threads.</p>
            </div>
        </div>

        <!-- 5. Wardrobe & Brand Styling -->
        <div class="bg-apparelCard p-8 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-lg hover:-translate-y-2 transition-all duration-300 group relative overflow-hidden flex flex-col justify-between">
            <div class="absolute -right-6 -top-6 w-32 h-32 bg-apparelCardWarm/40 rounded-full blur-2xl pointer-events-none group-hover:bg-apparelAccent/10 transition duration-500"></div>
            <div>
                <div class="w-14 h-14 bg-apparelCardWarm text-apparelAccent rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-apparelAccent group-hover:text-white transition duration-300 shadow-sm border border-apparelBorder">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-apparelDark mb-3">Wardrobe & Brand Styling</h3>
                <p class="text-apparelMuted leading-relaxed text-sm sm:text-base">Expert fashion styling and lookbook curation for corporate apparel, limited merch drops, or entire retail catalog launches.</p>
            </div>
        </div>

        <!-- 6. Zero-Waste Packaging -->
        <div class="bg-apparelCard p-8 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-lg hover:-translate-y-2 transition-all duration-300 group relative overflow-hidden flex flex-col justify-between">
            <div class="absolute -right-6 -top-6 w-32 h-32 bg-apparelCardWarm/40 rounded-full blur-2xl pointer-events-none group-hover:bg-apparelAccent/10 transition duration-500"></div>
            <div>
                <div class="w-14 h-14 bg-apparelCardWarm text-apparelAccent rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:bg-apparelAccent group-hover:text-white transition duration-300 shadow-sm border border-apparelBorder">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-apparelDark mb-3">Zero-Waste Packaging</h3>
                <p class="text-apparelMuted leading-relaxed text-sm sm:text-base">100% biodegradable and compostable packaging solutions to ship your products safely and responsibly to consumers.</p>
            </div>
        </div>

    </div>
    
    <!-- Bottom CTA -->
    <div class="mt-16 text-center animate-fade-in-up delay-300">
        <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-8 py-3.5 text-base sm:text-lg font-medium text-white bg-apparelDark rounded-full shadow-lg hover:bg-apparelAccent transition-all duration-300 hover:-translate-y-0.5">
            Discuss Your Project With Us
        </a>
    </div>
</section>

@endsection