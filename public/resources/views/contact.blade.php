@extends('layouts.app')

@section('title', 'Contact Us - Dandiyama')

@section('content')
    <div class="relative bg-maroon-deep pt-24 pb-32 text-center text-ivory">
        <h1 class="text-4xl md:text-6xl font-cinzel font-bold text-gold-light mb-4 relative z-10">Get in Touch</h1>
        <p class="relative z-10 text-gray-300">We'd love to hear about your upcoming event.</p>
        
        <div class="absolute bottom-0 left-0 right-0 h-16 bg-ivory" style="border-radius: 50% 50% 0 0 / 100% 100% 0 0;"></div>
    </div>

    <section class="pb-20 bg-ivory">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 -mt-10">
                
                {{-- Contact Info --}}
                <div class="bg-maroon-deep text-ivory rounded-2xl shadow-xl p-8 md:p-12 relative overflow-hidden z-10">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -mr-16 -mt-16 blur-2xl"></div>
                    
                    <h2 class="text-2xl font-cinzel font-bold text-gold-light mb-8">Contact Information</h2>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="bg-white/10 p-3 rounded-lg">
                                <svg class="w-6 h-6 text-gold-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Our Office</h3>
                                <p class="text-gray-300 leading-relaxed">No. 123, Temple Road,<br>Colombo 07, Sri Lanka</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="bg-white/10 p-3 rounded-lg">
                                <svg class="w-6 h-6 text-gold-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Phone</h3>
                                <p class="text-gray-300">
                                    <a href="tel:+94112345678" class="hover:text-gold-light transition-colors">+94 11 234 5678</a>
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="bg-white/10 p-3 rounded-lg">
                                <svg class="w-6 h-6 text-gold-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg">Email</h3>
                                <p class="text-gray-300">
                                    <a href="mailto:info@dandiyama.com" class="hover:text-gold-light transition-colors">info@dandiyama.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    {{-- Social Icons --}}
                    <div class="mt-12 flex space-x-4">
                         <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-gold-primary transition-all text-white hover:text-maroon-deep">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-gold-primary transition-all text-white hover:text-maroon-deep">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Contact Form --}}
                <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                    <h2 class="text-2xl font-cinzel font-bold text-maroon-deep mb-6">Send us a Message</h2>
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Your Name</label>
                                <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-gold-primary focus:border-gold-primary bg-gray-50 text-gray-900" placeholder="John Doe">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-gold-primary focus:border-gold-primary bg-gray-50 text-gray-900" placeholder="john@example.com">
                            </div>
                        </div>
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <select id="subject" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-gold-primary focus:border-gold-primary bg-gray-50 text-gray-900">
                                <option>General Inquiry</option>
                                <option>Event Booking</option>
                                <option>Vendor Partnership</option>
                            </select>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-gold-primary focus:border-gold-primary bg-gray-50 text-gray-900" placeholder="Tell us about your event..."></textarea>
                        </div>
                        <button type="submit" class="w-full px-8 py-3 bg-maroon-mid text-white font-bold rounded-lg hover:bg-maroon-deep transition-colors shadow-md">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

            {{-- Map Placeholder --}}
            <div class="mt-16 rounded-xl overflow-hidden shadow-lg h-96 relative bg-gray-200">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63371.80385598642!2d79.82118600867499!3d6.921922576115978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo%2C%20Sri%20Lanka!5e0!3m2!1sen!2sus!4v1695276587425!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection