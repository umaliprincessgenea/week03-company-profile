@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="pt-24 pb-20 px-4 sm:px-6 lg:px-8 text-center max-w-5xl mx-auto">
    <h1 class="text-5xl md:text-7xl font-bold tracking-tight text-appleTextDark mb-6">
        Elevate Your Everyday Wear
    </h1>
    <p class="text-xl md:text-2xl text-appleTextMuted max-w-3xl mx-auto mb-10 leading-relaxed">
        Ethical fashion meets modern minimalism. Discover high-quality, eco-friendly apparel built to last.
    </p>
    <div>
        <a href="{{ route('services') }}" class="inline-block bg-appleTextDark text-white font-medium text-lg px-8 py-3.5 rounded-full hover:bg-black hover:shadow-lg transition duration-300">
            Explore Our Collections
        </a>
    </div>
</section>

<!-- Company Introduction Section -->
<section class="bg-white py-20 border-y border-gray-200/80">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-sm uppercase tracking-widest font-semibold text-appleTextMuted mb-4">Our Essence</h2>
        <p class="text-2xl md:text-3xl font-medium text-appleTextDark leading-relaxed">
            ThreadCraft Apparel is a contemporary fashion startup on a mission to redefine everyday clothing. We combine zero-waste manufacturing, organic fabrics, and modern silhouettes to create timeless garments that look good, feel great, and respect the planet.
        </p>
    </div>
</section>

<!-- Featured Services Teaser Section -->
<section class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center mb-16">
        <h2 class="text-4xl font-bold tracking-tight text-appleTextDark">Featured Studio Services</h2>
        <p class="mt-4 text-lg text-appleTextMuted">Craftsmanship and sustainability integrated into every step.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Service Teaser 1 -->
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="w-12 h-12 bg-appleBg text-appleAccent rounded-2xl flex items-center justify-center mb-6">
                <!-- Scissors / Design Icon -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 0A3 3 0 104.5 13.5l2.121-2.121m2.5-2.258a3 3 0 10-4.242-4.243L7 7.121"></path></svg>
            </div>
            <h3 class="text-xl font-semibold text-appleTextDark mb-3">Custom Garment Design</h3>
            <p class="text-appleTextMuted leading-relaxed">Tailored garment concepts from initial sketch to final pattern making, aligned with modern cuts.</p>
        </div>

        <!-- Service Teaser 2 -->
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="w-12 h-12 bg-appleBg text-appleAccent rounded-2xl flex items-center justify-center mb-6">
                <!-- Leaf Icon -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
            </div>
            <h3 class="text-xl font-semibold text-appleTextDark mb-3">Sustainable Fabric Sourcing</h3>
            <p class="text-appleTextMuted leading-relaxed">Direct access to organic cotton, linen, hemp, and recycled polyester fabrics from certified eco-friendly mills.</p>
        </div>

        <!-- Service Teaser 3 -->
        <div class="bg-white p-8 rounded-3xl shadow-sm border border-gray-100 hover:shadow-md transition">
            <div class="w-12 h-12 bg-appleBg text-appleAccent rounded-2xl flex items-center justify-center mb-6">
                <!-- Tag / Machine Icon -->
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
            </div>
            <h3 class="text-xl font-semibold text-appleTextDark mb-3">Private Label Production</h3>
            <p class="text-appleTextMuted leading-relaxed">Small-batch and bulk clothing manufacturing for emerging brands looking for premium, ethically made apparel.</p>
        </div>
    </div>
    
    <div class="mt-12 text-center">
        <a href="{{ route('services') }}" class="text-appleAccent font-medium hover:underline inline-flex items-center gap-1">
            Explore all 6 services
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </a>
    </div>
</section>

@endsection