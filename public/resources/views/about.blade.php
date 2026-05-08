@extends('layouts.app')

@section('title', 'About Us - Dandiyama')

@section('content')
    <div class="relative bg-maroon-deep py-24 text-center text-ivory">
        <h1 class="text-4xl md:text-6xl font-cinzel font-bold text-gold-light mb-4 relative z-10">About Dandiyama</h1>
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/floral-linen.png')] opacity-10"></div>
    </div>

    <section class="py-16 bg-ivory">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Mission / Vision --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-20">
                <div class="relative">
                     <div class="absolute -top-4 -left-4 w-20 h-20 bg-gold-primary/20 rounded-full z-0"></div>
                     <div class="absolute -bottom-4 -right-4 w-32 h-32 bg-maroon-mid/20 rounded-full z-0"></div>
                     <img src="https://images.unsplash.com/photo-1596700868852-257a08b97067?q=80&w=2070&auto=format&fit=crop" class="relative z-10 rounded-2xl shadow-xl w-full" alt="About Us">
                </div>
                <div>
                    <h2 class="text-3xl font-cinzel font-bold text-maroon-deep mb-6">Our Story</h2>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Dandiyama was born from a deep love for Sri Lanka's rich cultural heritage. In a world that is rapidly modernizing, we identified a need to preserve the sanctity and elegance of our traditional celebrations.
                    </p>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        What started as a small team organizing community pirith ceremonies has grown into a premier event management service, dedicated to bringing the grandeur of ancient kingdoms to modern-day celebrations.
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">
                        <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-gold-primary">
                            <h3 class="font-cinzel font-bold text-maroon-deep text-lg mb-2">Our Mission</h3>
                            <p class="text-sm text-gray-500">To create authentic, culturally rich, and seamlessly executed events that honor Sri Lankan traditions while exceeding modern expectations.</p>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-md border-l-4 border-maroon-deep">
                            <h3 class="font-cinzel font-bold text-maroon-deep text-lg mb-2">Our Vision</h3>
                            <p class="text-sm text-gray-500">To be the global benchmark for Sri Lankan traditional event management, ensuring our heritage is celebrated for generations to come.</p>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Team / Culture --}}
            <div class="bg-maroon-deep/5 rounded-3xl p-8 md:p-12 text-center">
                <h2 class="text-3xl font-cinzel font-bold text-maroon-deep mb-4">Dedicated to Tradition</h2>
                <div class="w-16 h-1 bg-gold-primary mx-auto mb-8"></div>
                <p class="text-gray-700 max-w-3xl mx-auto mb-10 text-lg">
                    Our team consists of cultural experts, seasoned event planners, and creative artisans who understand the nuances of every ritual. We don't just organize events; we curate experiences that touch the soul.
                </p>
                <a href="{{ url('/contact') }}" class="inline-block px-8 py-3 bg-maroon-deep text-white font-bold rounded-full hover:bg-gold-primary hover:text-maroon-deep transition-colors shadow-lg">Work With Us</a>
            </div>
        </div>
    </section>
@endsection