@extends('layouts.app')

@section('content')

<!-- Header -->
<section class="pt-20 pb-12 px-4 sm:px-6 lg:px-8 text-center max-w-4xl mx-auto">
    <h1 class="text-4xl md:text-6xl font-bold tracking-tight text-appleTextDark mb-4">
        Connect With Our Studio
    </h1>
    <p class="text-lg md:text-xl text-appleTextMuted">
        Inquire about custom orders, private label runs, or general studio questions.
    </p>
</section>

<!-- Main Grid -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-24">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        
        <!-- Contact Form (UI Only) -->
        <div class="bg-white p-8 md:p-10 rounded-3xl border border-gray-100 shadow-sm">
            <h2 class="text-2xl font-bold text-appleTextDark mb-6">Send an Inquiry</h2>
            
            <form onsubmit="event.preventDefault();" class="space-y-6">
                <div>
                    <label class="block text-sm font-medium text-appleTextDark mb-2">Full Name</label>
                    <input type="text" placeholder="Jane Smith" class="w-full px-4 py-3 rounded-xl bg-appleBg border border-gray-200 focus:outline-none focus:border-appleAccent transition text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-appleTextDark mb-2">Email Address</label>
                    <input type="email" placeholder="jane@example.com" class="w-full px-4 py-3 rounded-xl bg-appleBg border border-gray-200 focus:outline-none focus:border-appleAccent transition text-sm">
                </div>

                <div>
                    <label class="block text-sm font-medium text-appleTextDark mb-2">Inquiry Type</label>
                    <select class="w-full px-4 py-3 rounded-xl bg-appleBg border border-gray-200 focus:outline-none focus:border-appleAccent transition text-sm text-appleTextDark">
                        <option>Custom Order</option>
                        <option>Private Label Production</option>
                        <option>General Question</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium text-appleTextDark mb-2">Message Details</label>
                    <textarea rows="4" placeholder="Tell us about your apparel needs..." class="w-full px-4 py-3 rounded-xl bg-appleBg border border-gray-200 focus:outline-none focus:border-appleAccent transition text-sm"></textarea>
                </div>

                <button type="submit" class="w-full bg-appleTextDark text-white font-medium py-3 rounded-full hover:bg-black transition">
                    Send Message
                </button>
            </form>
        </div>

        <!-- Contact Info & Map -->
        <div class="space-y-8">
            <!-- Contact Info Box -->
            <div class="bg-white p-8 rounded-3xl border border-gray-100 shadow-sm space-y-6">
                <h2 class="text-2xl font-bold text-appleTextDark">Studio Location</h2>
                
                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-appleBg text-appleAccent rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-appleTextDark">Address</h3>
                        <p class="text-appleTextMuted text-sm">742 Fashion Avenue, Suite 200<br>Design District, New York, NY 10018</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-appleBg text-appleAccent rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-appleTextDark">Email</h3>
                        <p class="text-appleTextMuted text-sm">hello@threadcraftapparel.fake</p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="w-10 h-10 bg-appleBg text-appleAccent rounded-xl flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-appleTextDark">Phone</h3>
                        <p class="text-appleTextMuted text-sm">+1 (555) 014-9821</p>
                    </div>
                </div>

                <div class="pt-4 border-t border-gray-100">
                    <h3 class="font-semibold text-appleTextDark mb-3">Social Profiles</h3>
                    <div class="flex gap-4 text-appleAccent text-sm font-medium">
                        <a href="#" class="hover:underline">Instagram</a>
                        <a href="#" class="hover:underline">Pinterest</a>
                        <a href="#" class="hover:underline">TikTok</a>
                    </div>
                </div>
            </div>

            <!-- Embedded Google Map UI -->
            <div class="bg-white p-4 rounded-3xl border border-gray-100 shadow-sm overflow-hidden h-64 flex items-center justify-center relative">
                <iframe 
                    class="w-full h-full rounded-2xl"
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