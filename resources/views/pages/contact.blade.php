@extends('layouts.app')

@section('content')

<!-- Hero Header Section -->
<section class="relative pt-16 pb-12 sm:pt-20 sm:pb-16 px-4 sm:px-6 lg:px-8 text-center max-w-4xl mx-auto">
    <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-apparelCardWarm text-apparelAccent text-xs sm:text-sm font-semibold tracking-wider uppercase mb-6 border border-apparelBorder shadow-sm animate-fade-in-up">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
        Get In Touch
    </div>
    
    <h1 class="text-4xl sm:text-6xl md:text-7xl font-bold tracking-tight text-apparelDark mb-6 leading-tight animate-fade-in-up delay-100">
        Let's Start a <br class="hidden sm:block">Conversation
    </h1>
    
    <p class="text-base sm:text-lg md:text-xl text-apparelMuted max-w-2xl mx-auto leading-relaxed animate-fade-in-up delay-200">
        Have questions about custom apparel orders, private label production, or sustainable fabric sourcing? Our studio team is here to assist.
    </p>
</section>

<!-- Main Contact Layout -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20 sm:pb-24 animate-fade-in-up delay-300">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
        
        <!-- Left Column: Interactive Contact Form (7 cols on Desktop) -->
        <div class="lg:col-span-7 bg-apparelCard p-6 sm:p-10 md:p-12 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-md transition duration-300 relative overflow-hidden">
            <div class="absolute -right-10 -top-10 w-40 h-40 bg-apparelCardWarm/50 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="relative z-10">
                <span class="text-xs uppercase tracking-widest font-bold text-apparelAccent block mb-2">Send Message</span>
                <h2 class="text-2xl sm:text-3xl font-bold text-apparelDark mb-6">Tell us about your project</h2>
                
                <form onsubmit="event.preventDefault();" class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs sm:text-sm font-semibold text-apparelDark uppercase tracking-wider mb-2">Full Name</label>
                            <input type="text" placeholder="Jane Smith" class="w-full px-4 py-3.5 rounded-2xl bg-apparelBg border border-apparelBorder focus:outline-none focus:border-apparelAccent focus:ring-2 focus:ring-apparelAccent/20 transition text-sm text-apparelDark placeholder-apparelMuted/60 shadow-inner">
                        </div>

                        <div>
                            <label class="block text-xs sm:text-sm font-semibold text-apparelDark uppercase tracking-wider mb-2">Email Address</label>
                            <input type="email" placeholder="jane@example.com" class="w-full px-4 py-3.5 rounded-2xl bg-apparelBg border border-apparelBorder focus:outline-none focus:border-apparelAccent focus:ring-2 focus:ring-apparelAccent/20 transition text-sm text-apparelDark placeholder-apparelMuted/60 shadow-inner">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-xs sm:text-sm font-semibold text-apparelDark uppercase tracking-wider mb-2">Inquiry Type</label>
                            <select class="w-full px-4 py-3.5 rounded-2xl bg-apparelBg border border-apparelBorder focus:outline-none focus:border-apparelAccent focus:ring-2 focus:ring-apparelAccent/20 transition text-sm text-apparelDark shadow-inner">
                                <option>Custom Apparel Order</option>
                                <option>Private Label Production</option>
                                <option>Sustainable Fabric Sourcing</option>
                                <option>Eco Printing & Embroidery</option>
                                <option>General Studio Inquiry</option>
                            </select>
                        </div>

                        <div>
                            <label class="block text-xs sm:text-sm font-semibold text-apparelDark uppercase tracking-wider mb-2">Estimated Quantity</label>
                            <select class="w-full px-4 py-3.5 rounded-2xl bg-apparelBg border border-apparelBorder focus:outline-none focus:border-apparelAccent focus:ring-2 focus:ring-apparelAccent/20 transition text-sm text-apparelDark shadow-inner">
                                <option>Sample / Individual Piece</option>
                                <option>Small Batch (50 - 200 units)</option>
                                <option>Medium Batch (200 - 1,000 units)</option>
                                <option>Bulk / Private Label (1,000+ units)</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs sm:text-sm font-semibold text-apparelDark uppercase tracking-wider mb-2">Project Details</label>
                        <textarea rows="5" placeholder="Share timeline, fabric preferences, design concepts, or specific requirements..." class="w-full px-4 py-3.5 rounded-2xl bg-apparelBg border border-apparelBorder focus:outline-none focus:border-apparelAccent focus:ring-2 focus:ring-apparelAccent/20 transition text-sm text-apparelDark placeholder-apparelMuted/60 shadow-inner resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full bg-apparelDark text-apparelBg font-semibold py-4 rounded-full hover:bg-apparelAccent transition duration-300 shadow-md hover:shadow-lg hover:-translate-y-0.5 flex items-center justify-center gap-2">
                        <span>Send Studio Inquiry</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    </button>
                </form>
            </div>
        </div>

        <!-- Right Column: Studio Info & Map (5 cols on Desktop) -->
        <div class="lg:col-span-5 space-y-6 sm:space-y-8">
            
            <!-- Contact Info Box -->
            <div class="bg-apparelCard p-6 sm:p-8 rounded-3xl border border-apparelBorder shadow-sm hover:shadow-md transition duration-300 space-y-6">
                <div>
                    <span class="text-xs uppercase tracking-widest font-bold text-apparelAccent block mb-1">Direct Contact</span>
                    <h2 class="text-2xl font-bold text-apparelDark">Studio Headquarters</h2>
                </div>
                
                <!-- Address -->
                <div class="flex items-start gap-4 group">
                    <div class="w-12 h-12 bg-apparelCardWarm text-apparelAccent rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:bg-apparelAccent group-hover:text-white transition duration-300 border border-apparelBorder shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-apparelDark text-base">Visit Our Loft</h3>
                        <p class="text-apparelMuted text-sm leading-relaxed mt-0.5">742 Fashion Avenue, Suite 200<br>Design District, New York, NY 10018</p>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-start gap-4 group">
                    <div class="w-12 h-12 bg-apparelCardWarm text-apparelAccent rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:bg-apparelAccent group-hover:text-white transition duration-300 border border-apparelBorder shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-apparelDark text-base">Email Us</h3>
                        <p class="text-apparelMuted text-sm mt-0.5">hello@threadcraftapparel.fake</p>
                        <p class="text-apparelMuted/70 text-xs mt-0.5">We reply within 24 business hours.</p>
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-start gap-4 group">
                    <div class="w-12 h-12 bg-apparelCardWarm text-apparelAccent rounded-2xl flex items-center justify-center flex-shrink-0 group-hover:bg-apparelAccent group-hover:text-white transition duration-300 border border-apparelBorder shadow-sm">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-apparelDark text-base">Call / WhatsApp</h3>
                        <p class="text-apparelMuted text-sm mt-0.5">+1 (555) 014-9821</p>
                        <p class="text-apparelMuted/70 text-xs mt-0.5">Mon - Fri, 9am - 6pm EST</p>
                    </div>
                </div>

                <div class="pt-6 border-t border-apparelBorder">
                    <h3 class="font-bold text-apparelDark text-sm uppercase tracking-wider mb-3">Connect On Social</h3>
                    <div class="flex flex-wrap gap-2">
                        <a href="#" class="px-4 py-2 rounded-full bg-apparelBg border border-apparelBorder text-xs font-semibold text-apparelDark hover:bg-apparelAccent hover:text-white hover:border-apparelAccent transition duration-300">Instagram</a>
                        <a href="#" class="px-4 py-2 rounded-full bg-apparelBg border border-apparelBorder text-xs font-semibold text-apparelDark hover:bg-apparelAccent hover:text-white hover:border-apparelAccent transition duration-300">Pinterest</a>
                        <a href="#" class="px-4 py-2 rounded-full bg-apparelBg border border-apparelBorder text-xs font-semibold text-apparelDark hover:bg-apparelAccent hover:text-white hover:border-apparelAccent transition duration-300">TikTok</a>
                        <a href="#" class="px-4 py-2 rounded-full bg-apparelBg border border-apparelBorder text-xs font-semibold text-apparelDark hover:bg-apparelAccent hover:text-white hover:border-apparelAccent transition duration-300">LinkedIn</a>
                    </div>
                </div>
            </div>

            <!-- Embedded Google Map -->
            <div class="bg-apparelCard p-3 rounded-3xl border border-apparelBorder shadow-sm overflow-hidden h-64 sm:h-72 relative">
                <iframe 
                    class="w-full h-full rounded-2xl filter saturate-[0.85] contrast-[1.05]"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.217707328102!2d-73.9882!3d40.7532!2m3!1f0!2f0!3f0!2m3!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259ac10000001%3A0x1d3f0a1c8d234567!2sFashion%20Ave%2C%20New%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1620000000000!5m2!1sen!2sus" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>

        </div>

    </div>
</section>

@endsection