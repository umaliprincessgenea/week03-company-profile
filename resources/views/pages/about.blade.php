@extends('layouts.app')

@section('content')

<!-- Hero Header Section -->
<section class="relative pt-16 pb-12 sm:pt-20 sm:pb-16 px-4 sm:px-6 lg:px-8 text-center max-w-4xl mx-auto">
    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-apparelCardWarm text-apparelAccent text-xs sm:text-sm font-semibold tracking-wider uppercase mb-6 border border-apparelBorder shadow-sm animate-fade-in-up">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
        Our Story & Heritage
    </div>
    
    <h1 class="text-4xl sm:text-6xl md:text-7xl font-bold tracking-tight text-apparelDark mb-6 leading-tight animate-fade-in-up delay-100">
        Crafting Purpose <br class="hidden sm:block">Into Every Thread
    </h1>
    
    <p class="text-base sm:text-lg md:text-xl text-apparelMuted max-w-2xl mx-auto leading-relaxed animate-fade-in-up delay-200">
        Reimagining contemporary apparel through zero-waste philosophy, eco-conscious textiles, and modern tailored fits.
    </p>
</section>

<!-- Company History Section -->
<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 sm:mb-24">
    <div class="bg-apparelCard p-8 sm:p-12 md:p-16 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-md transition-all duration-300 relative overflow-hidden animate-fade-in-up delay-300">
        <!-- Decorative Ambient Glow in Background -->
        <div class="absolute -right-16 -top-16 w-64 h-64 bg-apparelCardWarm/60 rounded-full blur-2xl pointer-events-none"></div>
        
        <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            <div class="lg:col-span-4">
                <span class="text-xs uppercase tracking-widest font-bold text-apparelAccent block mb-2">Established 2023</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-apparelDark leading-tight">Driven by a Passion for Slow Fashion</h2>
            </div>
            <div class="lg:col-span-8 border-t lg:border-t-0 lg:border-l border-apparelBorder pt-6 lg:pt-0 lg:pl-10">
                <p class="text-apparelMuted leading-relaxed text-base sm:text-lg">
                    Started in 2023 out of a small design loft, ThreadCraft Apparel began as a response to fast fashion's throwaway culture. Frustrated by disposable trends and environmental waste, our founders set out to build a studio centered on durability, transparent sourcing, and ethical craftsmanship. Today, we partner with sustainable mills globally to produce conscious clothing for individuals and indie brands alike.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Cards -->
<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 sm:mb-24">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
        <!-- Mission -->
        <div class="bg-apparelCard p-8 sm:p-10 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300 flex flex-col justify-between group animate-fade-in-up">
            <div>
                <div class="w-14 h-14 bg-apparelCardWarm text-apparelAccent rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition duration-300 shadow-sm border border-apparelBorder">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <span class="text-xs uppercase tracking-widest font-bold text-apparelAccent block mb-2">Our Mission</span>
                <h2 class="text-2xl font-bold text-apparelDark mb-4">Empowering Conscious Style</h2>
                <p class="text-apparelMuted leading-relaxed text-sm sm:text-base">
                    To design and produce ethically crafted garments that empower personal expression without compromising environmental integrity or worker dignity.
                </p>
            </div>
        </div>

        <!-- Vision -->
        <div class="bg-apparelCard p-8 sm:p-10 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300 flex flex-col justify-between group animate-fade-in-up delay-100">
            <div>
                <div class="w-14 h-14 bg-apparelCardWarm text-apparelAccent rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition duration-300 shadow-sm border border-apparelBorder">
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 002 2h1.5a2.5 2.5 0 002.5-2.5V7a2 2 0 00-2-2h-1.5a.5.5 0 01-.5-.5V4a2 2 0 00-2-2H9c-.6 0-1.168.266-1.556.712z"></path></svg>
                </div>
                <span class="text-xs uppercase tracking-widest font-bold text-apparelAccent block mb-2">Our Vision</span>
                <h2 class="text-2xl font-bold text-apparelDark mb-4">Pioneering Circularity</h2>
                <p class="text-apparelMuted leading-relaxed text-sm sm:text-base">
                    To lead the transition toward a fully circular fashion industry where zero-waste production, organic textiles, and fair wages are the universal standard.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values Section -->
<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mb-16 sm:mb-24">
    <div class="text-center mb-12 animate-fade-in-up">
        <span class="text-xs uppercase tracking-widest font-bold text-apparelAccent block mb-2">Guiding Principles</span>
        <h2 class="text-3xl sm:text-4xl font-bold text-apparelDark">Our Core Values</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Value 1 -->
        <div class="bg-apparelCard p-6 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300 group">
            <div class="w-10 h-10 bg-apparelCardWarm text-apparelAccent rounded-xl flex items-center justify-center mb-4 font-bold text-sm border border-apparelBorder group-hover:bg-apparelAccent group-hover:text-white transition duration-300">
                01
            </div>
            <h3 class="font-bold text-lg text-apparelDark mb-2">Sustainability</h3>
            <p class="text-apparelMuted text-sm leading-relaxed">Every fiber is consciously chosen from certified eco-friendly sources.</p>
        </div>

        <!-- Value 2 -->
        <div class="bg-apparelCard p-6 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300 group">
            <div class="w-10 h-10 bg-apparelCardWarm text-apparelAccent rounded-xl flex items-center justify-center mb-4 font-bold text-sm border border-apparelBorder group-hover:bg-apparelAccent group-hover:text-white transition duration-300">
                02
            </div>
            <h3 class="font-bold text-lg text-apparelDark mb-2">Craftsmanship</h3>
            <p class="text-apparelMuted text-sm leading-relaxed">Uncompromising stitch quality, reinforced seams, and modern precision fit.</p>
        </div>

        <!-- Value 3 -->
        <div class="bg-apparelCard p-6 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300 group">
            <div class="w-10 h-10 bg-apparelCardWarm text-apparelAccent rounded-xl flex items-center justify-center mb-4 font-bold text-sm border border-apparelBorder group-hover:bg-apparelAccent group-hover:text-white transition duration-300">
                03
            </div>
            <h3 class="font-bold text-lg text-apparelDark mb-2">Transparency</h3>
            <p class="text-apparelMuted text-sm leading-relaxed">Complete openness about our supply chain, mill locations, and wage practices.</p>
        </div>

        <!-- Value 4 -->
        <div class="bg-apparelCard p-6 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300 group">
            <div class="w-10 h-10 bg-apparelCardWarm text-apparelAccent rounded-xl flex items-center justify-center mb-4 font-bold text-sm border border-apparelBorder group-hover:bg-apparelAccent group-hover:text-white transition duration-300">
                04
            </div>
            <h3 class="font-bold text-lg text-apparelDark mb-2">Inclusivity</h3>
            <p class="text-apparelMuted text-sm leading-relaxed">Thoughtfully engineered apparel crafted to flatter every silhouette and lifestyle.</p>
        </div>
    </div>
</section>

<!-- Creative Team Section with Aesthetic Icons -->
<section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 pb-20 sm:pb-24">
    <div class="text-center mb-12 sm:mb-16 animate-fade-in-up">
        <span class="text-xs uppercase tracking-widest font-bold text-apparelAccent block mb-2">The Minds Behind ThreadCraft</span>
        <h2 class="text-3xl sm:text-4xl font-bold text-apparelDark">Our Creative Team</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 sm:gap-8">
        
        <!-- Team Member 1: Maya Lin -->
        <div class="bg-apparelCard p-8 rounded-3xl border border-apparelBorder text-center shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300 group flex flex-col items-center animate-fade-in-up">
            <div class="w-20 h-20 bg-apparelCardWarm text-apparelAccent rounded-full flex items-center justify-center mb-6 border border-apparelBorder shadow-inner group-hover:scale-110 group-hover:bg-apparelAccent group-hover:text-white transition duration-300">
                <!-- Aesthetic Icon: Creative Direction / Styling Wand -->
                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"></path></svg>
            </div>
            <h3 class="font-bold text-xl text-apparelDark mb-1">Maya Lin</h3>
            <p class="text-apparelAccent text-sm font-semibold mb-3">Founder & Creative Director</p>
            <p class="text-apparelMuted text-sm leading-relaxed">A fashion design veteran passionate about slow fashion, organic textures, and minimalist aesthetics.</p>
        </div>

        <!-- Team Member 2: Julian Vance -->
        <div class="bg-apparelCard p-8 rounded-3xl border border-apparelBorder text-center shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300 group flex flex-col items-center animate-fade-in-up delay-100">
            <div class="w-20 h-20 bg-apparelCardWarm text-apparelAccent rounded-full flex items-center justify-center mb-6 border border-apparelBorder shadow-inner group-hover:scale-110 group-hover:bg-apparelAccent group-hover:text-white transition duration-300">
                <!-- Aesthetic Icon: Eco Leaf & Sustainable Sourcing -->
                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
            </div>
            <h3 class="font-bold text-xl text-apparelDark mb-1">Julian Vance</h3>
            <p class="text-apparelAccent text-sm font-semibold mb-3">Head of Sustainable Sourcing</p>
            <p class="text-apparelMuted text-sm leading-relaxed">Expert in raw organic textiles, hemp fiber blends, and zero-chemical eco dye processes.</p>
        </div>

        <!-- Team Member 3: Chloe Alcantara -->
        <div class="bg-apparelCard p-8 rounded-3xl border border-apparelBorder text-center shadow-sm hover:shadow-md hover:-translate-y-1 transition duration-300 group flex flex-col items-center sm:col-span-2 md:col-span-1 animate-fade-in-up delay-200">
            <div class="w-20 h-20 bg-apparelCardWarm text-apparelAccent rounded-full flex items-center justify-center mb-6 border border-apparelBorder shadow-inner group-hover:scale-110 group-hover:bg-apparelAccent group-hover:text-white transition duration-300">
                <!-- Aesthetic Icon: Tailoring / Scissors Craftsmanship -->
                <svg class="w-9 h-9" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 0A3 3 0 104.5 13.5l2.121-2.121m2.5-2.258a3 3 0 10-4.242-4.243L7 7.121"></path></svg>
            </div>
            <h3 class="font-bold text-xl text-apparelDark mb-1">Chloe Alcantara</h3>
            <p class="text-apparelAccent text-sm font-semibold mb-3">Lead Production Manager</p>
            <p class="text-apparelMuted text-sm leading-relaxed">Oversees fair-wage manufacturing partnerships and maintains rigorous studio quality control.</p>
        </div>

    </div>
</section>

@endsection