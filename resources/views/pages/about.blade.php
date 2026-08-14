@extends('layouts.app')

@section('content')

<!-- Header -->
<section class="pt-20 pb-12 px-4 sm:px-6 lg:px-8 text-center max-w-4xl mx-auto">
    <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-appleTextDark mb-4">
        Our Story & Craft
    </h1>
    <p class="text-lg md:text-xl text-appleTextMuted">
        Reimagining apparel with zero-waste philosophy and conscious tailoring.
    </p>
</section>

<!-- History Section -->
<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
    <div class="bg-white p-8 md:p-12 rounded-3xl border border-gray-100 shadow-sm">
        <h2 class="text-2xl font-bold text-appleTextDark mb-4">Company History</h2>
        <p class="text-appleTextMuted leading-relaxed text-lg">
            Started in 2023 out of a small design loft, ThreadCraft Apparel began as a passion project focused on combatting fast fashion. Frustrated by throwaway clothing culture, our founders set out to build a brand centered on durability, transparent sourcing, and ethical craftsmanship. Today, we partner with sustainable mills globally to produce conscious clothing for individuals and indie brands alike.
        </p>
    </div>
</section>

<!-- Mission & Vision -->
<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm">
            <div class="w-10 h-10 bg-emerald-50 text-appleAccent rounded-xl flex items-center justify-center mb-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            </div>
            <h2 class="text-xl font-bold text-appleTextDark mb-2">Our Mission</h2>
            <p class="text-appleTextMuted leading-relaxed">
                To design and produce ethically crafted garments that empower personal expression without compromising environmental integrity.
            </p>
        </div>

        <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm">
            <div class="w-10 h-10 bg-emerald-50 text-appleAccent rounded-xl flex items-center justify-center mb-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h1.5a2.5 2.5 0 002.5-2.5V7a2 2 0 00-2-2h-1.5a.5.5 0 01-.5-.5V4a2 2 0 00-2-2H9c-.6 0-1.168.266-1.556.712z"></path></svg>
            </div>
            <h2 class="text-xl font-bold text-appleTextDark mb-2">Our Vision</h2>
            <p class="text-appleTextMuted leading-relaxed">
                To lead the transition toward a fully circular fashion industry where zero-waste production is the global standard.
            </p>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mb-20">
    <h2 class="text-3xl font-bold text-appleTextDark mb-10 text-center">Core Values</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-2xl border border-gray-100">
            <h3 class="font-semibold text-lg text-appleTextDark mb-1">Sustainability</h3>
            <p class="text-appleTextMuted">Every thread is chosen with the planet in mind.</p>
        </div>
        <div class="bg-white p-6 rounded-2xl border border-gray-100">
            <h3 class="font-semibold text-lg text-appleTextDark mb-1">Craftsmanship</h3>
            <p class="text-appleTextMuted">Uncompromising stitch quality and modern tailor-fit cuts.</p>
        </div>
        <div class="bg-white p-6 rounded-2xl border border-gray-100">
            <h3 class="font-semibold text-lg text-appleTextDark mb-1">Transparency</h3>
            <p class="text-appleTextMuted">Complete honesty about our supply chain and fair-wage factories.</p>
        </div>
        <div class="bg-white p-6 rounded-2xl border border-gray-100">
            <h3 class="font-semibold text-lg text-appleTextDark mb-1">Inclusivity</h3>
            <p class="text-appleTextMuted">Clothes engineered for every body type and lifestyle.</p>
        </div>
    </div>
</section>

<!-- Team Introduction -->
<section class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
    <h2 class="text-3xl font-bold text-appleTextDark mb-10 text-center">Creative Team</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-3xl border border-gray-100 text-center">
            <div class="w-20 h-20 bg-stone-200 rounded-full mx-auto mb-4 flex items-center justify-center text-appleTextMuted font-bold text-xl">ML</div>
            <h3 class="font-semibold text-lg text-appleTextDark">Maya Lin</h3>
            <p class="text-appleAccent text-sm mb-2">Founder & Creative Director</p>
            <p class="text-appleTextMuted text-sm">A fashion design veteran passionate about slow fashion and minimalist aesthetics.</p>
        </div>
        <div class="bg-white p-6 rounded-3xl border border-gray-100 text-center">
            <div class="w-20 h-20 bg-stone-200 rounded-full mx-auto mb-4 flex items-center justify-center text-appleTextMuted font-bold text-xl">JV</div>
            <h3 class="font-semibold text-lg text-appleTextDark">Julian Vance</h3>
            <p class="text-appleAccent text-sm mb-2">Head of Sustainable Sourcing</p>
            <p class="text-appleTextMuted text-sm">Expert in organic textiles, hemp blends, and eco-friendly dye processes.</p>
        </div>
        <div class="bg-white p-6 rounded-3xl border border-gray-100 text-center">
            <div class="w-20 h-20 bg-stone-200 rounded-full mx-auto mb-4 flex items-center justify-center text-appleTextMuted font-bold text-xl">CA</div>
            <h3 class="font-semibold text-lg text-appleTextDark">Chloe Alcantara</h3>
            <p class="text-appleAccent text-sm mb-2">Lead Production Manager</p>
            <p class="text-appleTextMuted text-sm">Oversees fair-wage manufacturing and strict quality control.</p>
        </div>
    </div>
</section>

@endsection