<nav x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = (window.pageYOffset > 20)"
     :class="{ 'bg-maroon-deep shadow-lg': scrolled, 'bg-maroon-deep/90 backdrop-blur-sm': !scrolled }"
     class="fixed w-full z-50 transition-all duration-300 ease-in-out text-ivory">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center space-x-2">
                <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 bg-gold-primary rounded-full flex items-center justify-center transform group-hover:rotate-12 transition-transform duration-300">
                        <span class="text-maroon-deep font-cinzel font-bold text-2xl">D</span>
                    </div>
                    <span class="font-cinzel text-2xl font-bold text-gold-light tracking-wide group-hover:text-white transition-colors">Dandiyama</span>
                </a>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-8">
                    <a href="{{ url('/') }}" class="nav-link {{ request()->is('/') ? 'text-gold-light' : 'text-ivory hover:text-gold-pale' }} px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Home</a>
                         <a href="{{ route('clients.create') }}" class="nav-link {{ request()->is('/') ? 'text-gold-light' : 'text-ivory hover:text-gold-pale' }} px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">client</a>
                    <a href="{{ url('/events') }}" class="nav-link {{ request()->is('events') ? 'text-gold-light' : 'text-ivory hover:text-gold-pale' }} px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Events</a>
                    <a href="{{ url('/services') }}" class="nav-link {{ request()->is('services') ? 'text-gold-light' : 'text-ivory hover:text-gold-pale' }} px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Services</a>
                    <a href="{{ url('/gallery') }}" class="nav-link {{ request()->is('gallery') ? 'text-gold-light' : 'text-ivory hover:text-gold-pale' }} px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Gallery</a>
                    <a href="{{ url('/about') }}" class="nav-link {{ request()->is('about') ? 'text-gold-light' : 'text-ivory hover:text-gold-pale' }} px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">About</a>
                    <a href="{{ url('/contact') }}" class="nav-link {{ request()->is('contact') ? 'text-gold-light' : 'text-ivory hover:text-gold-pale' }} px-3 py-2 rounded-md text-sm font-medium transition-colors duration-200">Contact</a>
                    
                    <a href="{{ url('/admin') }}" class="ml-4 bg-gold-primary text-maroon-deep px-4 py-2 rounded-full text-sm font-bold hover:bg-gold-light hover:scale-105 transform transition-all duration-300 shadow-lg">
                        Admin Panel
                    </a>
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="-mr-2 flex md:hidden">
                <button @click="open = !open" type="button" class="bg-maroon-mid inline-flex items-center justify-center p-2 rounded-md text-gold-light hover:text-white hover:bg-maroon-deep focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-maroon-deep focus:ring-white">
                    <span class="sr-only">Open main menu</span>
                    <svg class="h-6 w-6" x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         class="md:hidden bg-maroon-deep border-t border-maroon-mid" style="display: none;">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="{{ url('/') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-maroon-mid hover:text-gold-light">Home</a>
            <a href="{{ url('/events') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-maroon-mid hover:text-gold-light">Events</a>
            <a href="{{ url('/services') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-maroon-mid hover:text-gold-light">Services</a>
            <a href="{{ url('/gallery') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-maroon-mid hover:text-gold-light">Gallery</a>
            <a href="{{ url('/about') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-maroon-mid hover:text-gold-light">About</a>
            <a href="{{ url('/contact') }}" class="block px-3 py-2 rounded-md text-base font-medium text-white hover:bg-maroon-mid hover:text-gold-light">Contact</a>
            
            <a href="{{ url('/admin') }}" class="block w-full text-center mt-4 bg-gold-primary text-maroon-deep px-4 py-2 rounded-md text-base font-bold hover:bg-gold-light transition-colors">
                Admin Panel
            </a>
        </div>
    </div>
</nav>