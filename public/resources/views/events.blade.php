@extends('layouts.app')

@section('title', 'Events - Dandiyama')

@section('content')
    <div class="bg-maroon-deep py-24 text-center text-ivory relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1548013146-72479768bada?q=80&w=2076&auto=format&fit=crop')] bg-cover bg-center opacity-20"></div>
        <div class="relative z-10 max-w-4xl mx-auto px-4">
            <h1 class="text-4xl md:text-6xl font-cinzel font-bold text-gold-light mb-4">Our Traditional Events</h1>
            <p class="text-xl font-light text-gray-200">Preserving the sacred customs of Sri Lanka through every celebration.</p>
        </div>
    </div>

    <section class="py-16 bg-ivory bg-pattern">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                {{-- Event 1 --}}
                <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1627918344605-645398242a77?q=80&w=2070&auto=format&fit=crop" alt="Poruwa Wedding" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-cinzel font-bold text-maroon-deep mb-3 group-hover:text-gold-primary transition-colors">Poruwa Weddings</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Experience the sanctity of the Poruwa ceremony. We arrange the traditional wooden platform (Poruwa), coordinate Ashtaka recitals, and manage the ceremonial proceedings such as the exchange of sheaves of betel and lighting of the oil lamp.</p>
                        <a href="{{ url('/contact') }}" class="inline-block px-4 py-2 bg-maroon-deep text-white rounded-full text-sm font-bold hover:bg-gold-primary transition-colors">Book Consultation</a>
                    </div>
                </div>

                {{-- Event 2 --}}
                <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1515934751635-c81c6bc9a2d8?q=80&w=1740&auto=format&fit=crop" alt="Homecoming" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-cinzel font-bold text-maroon-deep mb-3 group-hover:text-gold-primary transition-colors">Homecoming Ceremonies</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">The second leg of the wedding journey, welcomed with warmth and tradition. We organize elegant reception setups, traditional oil lamp ceremonies, and catering that brings families together.</p>
                        <a href="{{ url('/contact') }}" class="inline-block px-4 py-2 bg-maroon-deep text-white rounded-full text-sm font-bold hover:bg-gold-primary transition-colors">Book Consultation</a>
                    </div>
                </div>

                {{-- Event 3 --}}
                <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1605218427368-35b8898145a8?q=80&w=1576&auto=format&fit=crop" alt="Pirith Ceremony" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-cinzel font-bold text-maroon-deep mb-3 group-hover:text-gold-primary transition-colors">Pirith Ceremonies</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Spiritual blessings for your home or business. We construct the Pirith Mandapaya according to traditional designs and coordinate with the temple for the Sangha, ensuring a respectful and serene environment.</p>
                        <a href="{{ url('/contact') }}" class="inline-block px-4 py-2 bg-maroon-deep text-white rounded-full text-sm font-bold hover:bg-gold-primary transition-colors">Book Consultation</a>
                    </div>
                </div>

                {{-- Event 4 --}}
                <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1514328826620-e222fb208225?q=80&w=1858&auto=format&fit=crop" alt="Puberty Ceremony" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-cinzel font-bold text-maroon-deep mb-3 group-hover:text-gold-primary transition-colors">Puberty Ceremonies</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Celebrating the transition to womanhood with the traditional "Kotahalu" ceremony. We provide appropriate decor, traditional attire guidance, and manage the rituals with cultural sensitivity.</p>
                        <a href="{{ url('/contact') }}" class="inline-block px-4 py-2 bg-maroon-deep text-white rounded-full text-sm font-bold hover:bg-gold-primary transition-colors">Book Consultation</a>
                    </div>
                </div>

                {{-- Event 5 --}}
                <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1566737236500-c8ac43014a67?q=80&w=1740&auto=format&fit=crop" alt="Cultural Shows" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-cinzel font-bold text-maroon-deep mb-3 group-hover:text-gold-primary transition-colors">Cultural Shows</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Spectacular showcases of Sri Lankan heritage. Featuring Kandyan, Low Country, and Sabaragamuwa dancers, drummers, and fire performers for tourism events, hotels, or special galas.</p>
                        <a href="{{ url('/contact') }}" class="inline-block px-4 py-2 bg-maroon-deep text-white rounded-full text-sm font-bold hover:bg-gold-primary transition-colors">Book Consultation</a>
                    </div>
                </div>

                {{-- Event 6 --}}
                <div class="group bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden transform hover:-translate-y-2">
                    <div class="h-64 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1510137600163-2729bc699b24?q=80&w=1770&auto=format&fit=crop" alt="Avurudu Festivals" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-cinzel font-bold text-maroon-deep mb-3 group-hover:text-gold-primary transition-colors">Avurudu Festivals</h3>
                        <p class="text-gray-600 mb-6 leading-relaxed">Bringing the joy of the New Year to communities and corporates. We organize traditional games, food tables (Avurudu Mesa), and festive decorations for Sinhala and Tamil New Year.</p>
                        <a href="{{ url('/contact') }}" class="inline-block px-4 py-2 bg-maroon-deep text-white rounded-full text-sm font-bold hover:bg-gold-primary transition-colors">Book Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection