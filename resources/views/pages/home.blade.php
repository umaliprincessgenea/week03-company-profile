@extends('layouts.app')

@section('content')

<!-- Hero Section with Piles of Clothes Background Image & Intro Animation -->
<section class="relative min-h-[85vh] flex items-center justify-center bg-cover bg-center overflow-hidden" 
         style="background-image: url('https://images.unsplash.com/photo-1489987707025-afc232f7ea0f?q=80&w=2000&auto=format&fit=crop');">
    
    <!-- Warm Earthy Overlay -->
    <div class="absolute inset-0 bg-apparelDark/65 backdrop-blur-[2px]"></div>

    <!-- Content Container -->
    <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white py-20">
        
        <!-- Animated Main Title -->
        <h1 class="text-4xl sm:text-6xl md:text-7xl font-bold tracking-tight mb-6 animate-fade-in-up leading-tight">
            Elevate Your Everyday Wear
        </h1>
        
        <!-- Animated Subtitle -->
        <p class="text-lg sm:text-xl md:text-2xl text-apparelBg/90 max-w-2xl mx-auto mb-10 leading-relaxed animate-fade-in-up delay-100 font-light">
            Ethical fashion meets warm, minimalist aesthetic. Discover sustainable apparel engineered for effortless living.
        </p>
        
        <!-- Animated CTA Button -->
        <div class="animate-fade-in-up delay-200">
            <a href="{{ route('services') }}" class="inline-block bg-apparelAccent text-white font-medium text-base sm:text-lg px-8 py-3.5 rounded-full hover:bg-apparelAccentHover hover:scale-105 transition-all duration-300 shadow-lg">
                Explore Our Collections
            </a>
        </div>
        
    </div>
</section>

<!-- Company Introduction Section (Split Layout) -->
<section class="bg-apparelCard py-16 sm:py-24 border-y border-apparelBorder overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center animate-fade-in-up">
            
            <!-- Left Column: Our Essence Message -->
            <div class="text-left space-y-6">
                <h2 class="text-xs sm:text-sm uppercase tracking-widest font-bold text-apparelAccent">Our Essence</h2>
                <h3 class="text-3xl sm:text-4xl md:text-5xl font-medium text-apparelDark leading-tight">
                    Timeless style, <br>crafted with conscience.
                </h3>
                <p class="text-lg sm:text-xl text-apparelMuted leading-relaxed">
                    ThreadCraft Apparel is a contemporary fashion startup on a mission to redefine everyday clothing. We combine zero-waste manufacturing, organic fabrics, and modern silhouettes to create timeless garments that look good, feel great, and respect the planet.
                </p>
                <div class="pt-4">
                    <a href="{{ route('about') }}" class="inline-flex items-center text-apparelAccent font-semibold hover:text-apparelDark transition duration-300">
                        Learn about our process
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </a>
                </div>
            </div>

            <!-- Right Column: 3-Image Carousel -->
            <div x-data="{ 
                    activeSlide: 1, 
                    init() { 
                        setInterval(() => { 
                            this.activeSlide = this.activeSlide === 3 ? 1 : this.activeSlide + 1 
                        }, 4000) 
                    } 
                }" 
                class="relative w-full overflow-hidden rounded-3xl shadow-lg border border-apparelBorder aspect-square sm:aspect-[4/3] lg:aspect-[4/5] bg-apparelCardWarm">
                
                <!-- Image 1 -->
                <div x-show="activeSlide === 1" x-transition.opacity.duration.1000ms class="absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1512436991641-6745cdb1723f?q=80&w=1000&auto=format&fit=crop" alt="Earthy Minimalist Apparel" class="w-full h-full object-cover">
                </div>
                
                <!-- Image 2 -->
                <div x-show="activeSlide === 2" x-transition.opacity.duration.1000ms class="absolute inset-0" style="display: none;">
                    <img src="https://images.unsplash.com/photo-1434389670869-c8873cb58c85?q=80&w=1000&auto=format&fit=crop" alt="Premium Fabric Tailoring" class="w-full h-full object-cover">
                </div>
                
                <!-- Image 3 -->
                <div x-show="activeSlide === 3" x-transition.opacity.duration.1000ms class="absolute inset-0" style="display: none;">
                    <img src="https://images.unsplash.com/photo-1485230895905-3129753c12b9?q=80&w=1000&auto=format&fit=crop" alt="Sustainable Fashion Wear" class="w-full h-full object-cover">
                </div>

                <!-- Gradient Overlay for Contrast -->
                <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-black/50 to-transparent z-10"></div>

                <!-- Carousel Navigation Dots -->
                <div class="absolute bottom-6 left-0 right-0 flex justify-center space-x-3 z-20">
                    <button @click="activeSlide = 1" :class="activeSlide === 1 ? 'bg-white w-8' : 'bg-white/50 w-2.5'" class="h-2.5 rounded-full transition-all duration-300"></button>
                    <button @click="activeSlide = 2" :class="activeSlide === 2 ? 'bg-white w-8' : 'bg-white/50 w-2.5'" class="h-2.5 rounded-full transition-all duration-300"></button>
                    <button @click="activeSlide = 3" :class="activeSlide === 3 ? 'bg-white w-8' : 'bg-white/50 w-2.5'" class="h-2.5 rounded-full transition-all duration-300"></button>
                </div>
                
            </div>

        </div>
    </div>
</section>

<!-- Featured Services Teaser Section -->
<section class="py-16 sm:py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-12 sm:mb-16 animate-fade-in-up">
        <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-apparelDark">Featured Studio Services</h2>
        <p class="mt-3 text-base sm:text-lg text-apparelMuted">Craftsmanship and sustainability integrated into every step.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        <!-- Service Teaser 1 -->
        <div class="bg-apparelCard p-8 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300 flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 bg-apparelCardWarm text-apparelAccent rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 0A3 3 0 104.5 13.5l2.121-2.121m2.5-2.258a3 3 0 10-4.242-4.243L7 7.121"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-apparelDark mb-3">Custom Garment Design</h3>
                <p class="text-apparelMuted leading-relaxed text-sm sm:text-base">Tailored garment concepts from initial sketch to final pattern making, aligned with modern cuts.</p>
            </div>
        </div>

        <!-- Service Teaser 2 -->
        <div class="bg-apparelCard p-8 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300 flex flex-col justify-between">
            <div>
                <div class="w-12 h-12 bg-apparelCardWarm text-apparelAccent rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-apparelDark mb-3">Sustainable Fabric Sourcing</h3>
                <p class="text-apparelMuted leading-relaxed text-sm sm:text-base">Direct access to organic cotton, linen, hemp, and recycled polyester fabrics from certified eco-friendly mills.</p>
            </div>
        </div>

        <!-- Service Teaser 3 -->
        <div class="bg-apparelCard p-8 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300 flex flex-col justify-between sm:col-span-2 lg:col-span-1">
            <div>
                <div class="w-12 h-12 bg-apparelCardWarm text-apparelAccent rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-apparelDark mb-3">Private Label Production</h3>
                <p class="text-apparelMuted leading-relaxed text-sm sm:text-base">Small-batch and bulk clothing manufacturing for emerging brands looking for premium, ethically made apparel.</p>
            </div>
        </div>
    </div>
    
    <div class="mt-12 text-center">
        <a href="{{ route('services') }}" class="text-apparelAccent font-semibold hover:text-apparelDark inline-flex items-center gap-1.5 transition">
            Explore all 6 studio services
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>
    </div>
</section>

@endsection