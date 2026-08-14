@extends('layouts.app')

@section('content')

<!-- Header -->
<section class="pt-20 pb-12 px-4 sm:px-6 lg:px-8 text-center max-w-4xl mx-auto">
    <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-appleTextDark mb-4">
        Apparel Services
    </h1>
    <p class="text-lg md:text-xl text-appleTextMuted">
        End-to-end design, sustainable textile sourcing, and custom apparel production.
    </p>
</section>

<!-- Services Grid (6 Required Services) -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <!-- 1. Custom Apparel Design -->
        <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-appleBg text-appleAccent rounded-2xl flex items-center justify-center mb-6">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 0A3 3 0 104.5 13.5l2.121-2.121m2.5-2.258a3 3 0 10-4.242-4.243L7 7.121"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-appleTextDark mb-2">Custom Apparel Design</h3>
            <p class="text-appleTextMuted leading-relaxed">Tailored garment concepts from initial sketch to final pattern making, tailored to your brand's unique style.</p>
        </div>

        <!-- 2. Sustainable Fabric Sourcing -->
        <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-appleBg text-appleAccent rounded-2xl flex items-center justify-center mb-6">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-appleTextDark mb-2">Sustainable Fabric Sourcing</h3>
            <p class="text-appleTextMuted leading-relaxed">Direct access to organic cotton, linen, hemp, and recycled polyester fabrics from certified eco-friendly mills.</p>
        </div>

        <!-- 3. Private Label Production -->
        <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-appleBg text-appleAccent rounded-2xl flex items-center justify-center mb-6">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-appleTextDark mb-2">Private Label Production</h3>
            <p class="text-appleTextMuted leading-relaxed">Small-batch and bulk clothing manufacturing for emerging brands looking for premium, ethically made apparel.</p>
        </div>

        <!-- 4. Eco-Friendly Printing & Embroidery -->
        <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-appleBg text-appleAccent rounded-2xl flex items-center justify-center mb-6">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-appleTextDark mb-2">Eco Printing & Embroidery</h3>
            <p class="text-appleTextMuted leading-relaxed">Water-based screen printing and high-density embroidery using non-toxic, non-fade dyes and recycled threads.</p>
        </div>

        <!-- 5. Wardrobe & Brand Styling -->
        <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-appleBg text-appleAccent rounded-2xl flex items-center justify-center mb-6">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-appleTextDark mb-2">Wardrobe & Brand Styling</h3>
            <p class="text-appleTextMuted leading-relaxed">Expert fashion styling and lookbook curation for corporate apparel, merch drops, or retail catalog launches.</p>
        </div>

        <!-- 6. Zero-Waste Packaging -->
        <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm hover:shadow-md transition">
            <div class="w-12 h-12 bg-appleBg text-appleAccent rounded-2xl flex items-center justify-center mb-6">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
            </div>
            <h3 class="text-xl font-bold text-appleTextDark mb-2">Zero-Waste Packaging</h3>
            <p class="text-appleTextMuted leading-relaxed">100% biodegradable and compostable packaging solutions to ship your products safely and responsibly.</p>
        </div>

    </div>
</section>

@endsection