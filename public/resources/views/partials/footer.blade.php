<footer class="bg-maroon-deep text-ivory pt-12 pb-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            {{-- Brand Column --}}
            <div class="col-span-1 md:col-span-1">
                <a href="{{ url('/') }}" class="flex items-center gap-2 mb-4">
                    <div class="w-10 h-10 bg-gold-primary rounded-full flex items-center justify-center">
                        <span class="text-maroon-deep font-cinzel font-bold text-2xl">D</span>
                    </div>
                    <span class="font-cinzel text-2xl font-bold text-gold-light">Dandiyama</span>
                </a>
                <p class="text-gray-300 text-sm mb-4 leading-relaxed">
                    Preserving the elegance of Sri Lankan heritage through specialized event management. We bring your traditional celebrations to life with authenticity and grace.
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gold-light hover:text-white transition-colors">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="text-gold-light hover:text-white transition-colors">
                        <span class="sr-only">Instagram</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h3 class="text-gold-light font-cinzel font-bold text-lg mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="{{ url('/') }}" class="text-gray-300 hover:text-gold-primary transition-colors">Home</a></li>
                    <li><a href="{{ url('/events') }}" class="text-gray-300 hover:text-gold-primary transition-colors">Traditional Events</a></li>
                    <li><a href="{{ url('/services') }}" class="text-gray-300 hover:text-gold-primary transition-colors">Our Services</a></li>
                    <li><a href="{{ url('/about') }}" class="text-gray-300 hover:text-gold-primary transition-colors">About Us</a></li>
                    <li><a href="{{ url('/gallery') }}" class="text-gray-300 hover:text-gold-primary transition-colors">Gallery</a></li>
                </ul>
            </div>

            {{-- Services --}}
            <div>
                <h3 class="text-gold-light font-cinzel font-bold text-lg mb-4">Services</h3>
                <ul class="space-y-2">
                    <li><a href="{{ url('/services') }}" class="text-gray-300 hover:text-gold-primary transition-colors">Event Planning</a></li>
                    <li><a href="{{ url('/services') }}" class="text-gray-300 hover:text-gold-primary transition-colors">Traditional Catering</a></li>
                    <li><a href="{{ url('/services') }}" class="text-gray-300 hover:text-gold-primary transition-colors">Kandyan Dancers</a></li>
                    <li><a href="{{ url('/services') }}" class="text-gray-300 hover:text-gold-primary transition-colors">Decorations</a></li>
                    <li><a href="{{ url('/services') }}" class="text-gray-300 hover:text-gold-primary transition-colors">Poruwa Ceremonies</a></li>
                </ul>
            </div>

            {{-- Contact Info --}}
            <div>
                <h3 class="text-gold-light font-cinzel font-bold text-lg mb-4">Contact Us</h3>
                <ul class="space-y-2 text-gray-300">
                    <li class="flex items-start gap-2">
                        <svg class="w-5 h-5 text-gold-primary mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>No. 123, Temple Road,<br>Colombo 07, Sri Lanka</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-gold-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                        <span>+94 11 234 5678</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-gold-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        <span>info@dandiyama.com</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-maroon-mid pt-8 mt-8 text-center text-gray-400 text-sm">
            <p>&copy; {{ date('Y') }} Dandiyama Event Management. All rights reserved.</p>
        </div>
    </div>
</footer>