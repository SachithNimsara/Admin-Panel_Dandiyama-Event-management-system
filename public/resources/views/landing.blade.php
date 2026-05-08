@extends('layouts.app')

@section('content')
    {{-- Hero Section --}}
    <div class="relative bg-maroon-deep min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0 opacity-40">
            {{-- Background Pattern or Image Placeholder --}}
            <div class="w-full h-full bg-[url('https://images.unsplash.com/photo-1548013146-72479768bada?q=80&w=2076&auto=format&fit=crop')] bg-cover bg-center mix-blend-overlay"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-maroon-deep/80 via-transparent to-maroon-deep"></div>
        </div>

        <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 max-w-5xl mx-auto" x-data="{ show: false }" x-init="setTimeout(() => show = true, 500)">
            <h1 x-show="show" x-transition:enter="transition ease-out duration-1000" x-transition:enter-start="opacity-0 translate-y-10" x-transition:enter-end="opacity-100 translate-y-0" class="text-4xl sm:text-6xl md:text-7xl font-cinzel font-bold text-gold-light mb-6 leading-tight drop-shadow-lg">
                Celebrate Sri Lankan <br/><span class="text-white">Traditions</span> with Dandiyama
            </h1>
            <p x-show="show" x-transition:enter="transition ease-out duration-1000 delay-300" x-transition:enter-start="opacity-0 translate-y-10" x-transition:enter-end="opacity-100 translate-y-0" class="text-lg sm:text-xl md:text-2xl text-ivory max-w-3xl mx-auto mb-10 font-light tracking-wide drop-shadow-md">
                Experience the elegance of our heritage. We bring timeless cultural celebrations to life with authenticity, grace, and perfection.
            </p>
            
            <div x-show="show" x-transition:enter="transition ease-out duration-1000 delay-500" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#featured" class="px-8 py-4 bg-gold-primary text-maroon-deep font-bold font-cinzel text-lg rounded-full shadow-lg hover:bg-gold-light hover:scale-105 transform transition-all duration-300">
                    Explore Events
                </a>
                <a href="{{ url('/contact') }}" class="px-8 py-4 bg-transparent border-2 border-gold-primary text-gold-primary font-bold font-cinzel text-lg rounded-full hover:bg-gold-primary hover:text-maroon-deep transform transition-all duration-300">
                    Book Now
                </a>
            </div>
        </div>

        {{-- Scroll Down Indicator --}}
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#featured" class="text-gold-light hover:text-white transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
            </a>
        </div>
    </div>

    {{-- Featured Traditional Events --}}
    <section id="featured" class="py-20 bg-ivory relative bg-pattern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="text-maroon-mid text-sm font-bold tracking-widest uppercase">Our Expertise</span>
                <h2 class="text-3xl md:text-5xl font-cinzel font-bold text-maroon-deep mt-2 mb-4">Featured Traditional Events</h2>
                <div class="w-24 h-1 bg-gold-primary mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- Event Card 1 --}}
                <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 overflow-hidden relative">
                        {{-- Placeholder Image --}}
                        <div class="absolute inset-0 bg-maroon-deep/20 group-hover:bg-transparent transition-colors duration-300 z-10"></div>
                        <img src="https://images.unsplash.com/photo-1627918344605-645398242a77?q=80&w=2070&auto=format&fit=crop" alt="Poruwa Ceremony" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-cinzel font-bold text-maroon-deep mb-2 group-hover:text-gold-primary transition-colors">Poruwa Weddings</h3>
                        <p class="text-gray-600 text-sm mb-4">Authentic Poruwa ceremonies with traditional Ashtaka recitals and cultural rituals.</p>
                        <a href="{{ url('/events') }}" class="text-maroon-mid font-bold text-sm hover:text-gold-primary inline-flex items-center gap-1">Learn More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>

                {{-- Event Card 2 --}}
                <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 overflow-hidden relative">
                        <div class="absolute inset-0 bg-maroon-deep/20 group-hover:bg-transparent transition-colors duration-300 z-10"></div>
                        <img src="https://images.unsplash.com/photo-1596700868852-257a08b97067?q=80&w=2070&auto=format&fit=crop" alt="Cultural Festivals" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-cinzel font-bold text-maroon-deep mb-2 group-hover:text-gold-primary transition-colors">Cultural Festivals</h3>
                        <p class="text-gray-600 text-sm mb-4">Managing grand scale cultural festivals, Peraheras, and Avurudu celebrations.</p>
                        <a href="{{ url('/events') }}" class="text-maroon-mid font-bold text-sm hover:text-gold-primary inline-flex items-center gap-1">Learn More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>

                {{-- Event Card 3 --}}
                <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 overflow-hidden relative">
                        <div class="absolute inset-0 bg-maroon-deep/20 group-hover:bg-transparent transition-colors duration-300 z-10"></div>
                        <img src="https://images.unsplash.com/photo-1566737236500-c8ac43014a67?q=80&w=1740&auto=format&fit=crop" alt="Traditional Dances" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-cinzel font-bold text-maroon-deep mb-2 group-hover:text-gold-primary transition-colors">Dance Performances</h3>
                        <p class="text-gray-600 text-sm mb-4">Coordinating Kandyan, Low Country, and Sabaragamuwa dance troupes for events.</p>
                        <a href="{{ url('/events') }}" class="text-maroon-mid font-bold text-sm hover:text-gold-primary inline-flex items-center gap-1">Learn More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>

                {{-- Event Card 4 --}}
                <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100">
                    <div class="h-48 bg-gray-200 overflow-hidden relative">
                        <div class="absolute inset-0 bg-maroon-deep/20 group-hover:bg-transparent transition-colors duration-300 z-10"></div>
                        <img src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?q=80&w=1740&auto=format&fit=crop" alt="Homecomings" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-cinzel font-bold text-maroon-deep mb-2 group-hover:text-gold-primary transition-colors">Private Gatherings</h3>
                        <p class="text-gray-600 text-sm mb-4">Elegant traditional setups for homecomings, pirith ceremonies, and private parties.</p>
                        <a href="{{ url('/events') }}" class="text-maroon-mid font-bold text-sm hover:text-gold-primary inline-flex items-center gap-1">Learn More <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-12">
                <a href="{{ url('/events') }}" class="inline-block px-6 py-3 border-2 border-maroon-deep text-maroon-deep font-bold rounded-full hover:bg-maroon-deep hover:text-white transition-all duration-300">View All Events</a>
            </div>
        </div>
    </section>

    {{-- Services Section --}}
    <section class="py-20 bg-ivory-dark">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <span class="text-gold-primary text-sm font-bold tracking-widest uppercase">Everything You Need</span>
                    <h2 class="text-3xl md:text-5xl font-cinzel font-bold text-maroon-deep mt-2 mb-6">Complete Event Services</h2>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        We offer a comprehensive range of services tailored to traditional Sri Lankan events. From the first flower arrangement to the final drum beat, we handle every detail with precision and respect for tradition.
                    </p>
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 p-4 bg-white rounded-lg shadow-sm">
                            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-maroon-mid">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"/></svg>
                            </div>
                            <span class="font-bold text-maroon-deep">Traditional Catering</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-lg shadow-sm">
                            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-maroon-mid">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                            </div>
                            <span class="font-bold text-maroon-deep">Floral Decor</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-lg shadow-sm">
                            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-maroon-mid">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/></svg>
                            </div>
                            <span class="font-bold text-maroon-deep">Music & Dancing</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-lg shadow-sm">
                            <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-maroon-mid">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <span class="font-bold text-maroon-deep">Photography</span>
                        </div>
                    </div>
                </div>
                <div class="md:w-1/2 relative">
                    <div class="absolute -top-4 -left-4 w-72 h-72 bg-gold-pale rounded-full opacity-50 blur-3xl"></div>
                    <img src="https://images.unsplash.com/photo-1605273616688-251f28b4317f?q=80&w=1543&auto=format&fit=crop" alt="Traditional Services" class="relative rounded-2xl shadow-2xl z-10 w-full object-cover h-[400px]">
                </div>
            </div>
        </div>
    </section>

    {{-- Stats Section --}}
    <section class="py-16 bg-maroon-deep text-ivory">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-cinzel font-bold text-gold-primary mb-2">150+</div>
                    <div class="text-sm uppercase tracking-widest text-gray-300">Events Managed</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-cinzel font-bold text-gold-primary mb-2">98%</div>
                    <div class="text-sm uppercase tracking-widest text-gray-300">Happy Clients</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-cinzel font-bold text-gold-primary mb-2">50+</div>
                    <div class="text-sm uppercase tracking-widest text-gray-300">Expert Vendors</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl md:text-5xl font-cinzel font-bold text-gold-primary mb-2">10+</div>
                    <div class="text-sm uppercase tracking-widest text-gray-300">Years Experience</div>
                </div>
            </div>
        </div>
    </section>

    {{-- Testimonials --}}
    <section class="py-20 bg-ivory bg-pattern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-cinzel font-bold text-maroon-deep mb-4">Client Stories</h2>
                <div class="w-16 h-1 bg-gold-primary mx-auto"></div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-lg border-t-4 border-gold-primary">
                    <div class="flex items-center gap-1 mb-4 text-gold-primary">
                        @for($i=0; $i<5; $i++) <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg> @endfor
                    </div>
                    <p class="text-gray-600 mb-6 italic">"Dandiyama made our wedding day absolutely magical. The traditional Poruwa ceremony was conducted with such grace and authenticity."</p>
                    <div class="flex items-center gap-4">
                        <img class="w-12 h-12 rounded-full object-cover" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1887&auto=format&fit=crop" alt="Client">
                        <div>
                            <h4 class="font-bold text-maroon-deep">Amara & Vishwa</h4>
                            <span class="text-xs text-gray-500">Wedding Couple</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg border-t-4 border-gold-primary">
                    <div class="flex items-center gap-1 mb-4 text-gold-primary">
                        @for($i=0; $i<5; $i++) <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg> @endfor
                    </div>
                    <p class="text-gray-600 mb-6 italic">"Highly recommended for corporate cultural events. The dancers were spectacular and the organization was flawless."</p>
                    <div class="flex items-center gap-4">
                        <img class="w-12 h-12 rounded-full object-cover" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1887&auto=format&fit=crop" alt="Client">
                        <div>
                            <h4 class="font-bold text-maroon-deep">Mr. Perera</h4>
                            <span class="text-xs text-gray-500">CEO, TechLanka</span>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-lg border-t-4 border-gold-primary">
                     <div class="flex items-center gap-1 mb-4 text-gold-primary">
                        @for($i=0; $i<5; $i++) <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg> @endfor
                    </div>
                    <p class="text-gray-600 mb-6 italic">"The decorations were simply breathtaking. They captured the essence of our village traditions perfectly."</p>
                    <div class="flex items-center gap-4">
                        <img class="w-12 h-12 rounded-full object-cover" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=1961&auto=format&fit=crop" alt="Client">
                        <div>
                            <h4 class="font-bold text-maroon-deep">Mrs. Silva</h4>
                            <span class="text-xs text-gray-500">Event Host</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-20 bg-maroon-deep/90 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1548013146-72479768bada?q=80&w=2076&auto=format&fit=crop')] bg-cover bg-center mix-blend-overlay opacity-20"></div>
        <div class="max-w-4xl mx-auto text-center relative z-10 px-4">
            <h2 class="text-3xl md:text-5xl font-cinzel font-bold text-gold-light mb-6">Ready to Plan Your Event?</h2>
            <p class="text-ivory text-xl mb-10">Use our online booking system or contact us directly to discuss your requirements.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/contact') }}" class="px-8 py-3 bg-gold-primary text-maroon-deep font-bold font-cinzel text-lg rounded-full shadow-lg hover:bg-gold-light hover:scale-105 transform transition-all duration-300">
                    Contact Us Today
                </a>
            </div>
        </div>
    </section>
@endsection