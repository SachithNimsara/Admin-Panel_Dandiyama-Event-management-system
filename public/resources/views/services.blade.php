@extends('layouts.app')

@section('title', 'Services - Dandiyama')

@section('content')
    <div class="bg-maroon-mid py-20 text-center text-ivory relative overflow-hidden">
        <div class="absolute inset-0 bg-maroon-deep opacity-60"></div>
        <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
        <div class="relative z-10 max-w-4xl mx-auto px-4">
            <h1 class="text-4xl md:text-6xl font-cinzel font-bold text-gold-light mb-4">Our Services</h1>
            <p class="text-xl text-gray-100">Comprehensive event solutions tailored to your traditions.</p>
        </div>
    </div>

    <section class="py-16 bg-ivory">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-16">
                {{-- Service 1 --}}
                <div class="flex flex-col md:flex-row items-center gap-8 bg-white p-6 rounded-2xl shadow-lg border-l-4 border-gold-primary">
                    <div class="w-full md:w-1/3">
                        <div class="h-64 rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1555243896-c709bfa0b564?q=80&w=2070&auto=format&fit=crop" alt="Catering" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="w-full md:w-2/3">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="p-2 bg-green-100 rounded-full text-maroon-deep">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 15.546c-.523 0-1.046.151-1.5.454a2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.704 2.704 0 00-3 0 2.704 2.704 0 01-3 0 2.701 2.701 0 00-1.5-.454M9 6v2m3-2v2m3-2v2M9 3h.01M12 3h.01M15 3h.01M21 21v-7a2 2 0 00-2-2H5a2 2 0 00-2 2v7h18zm-3-9v-2a2 2 0 00-2-2H8a2 2 0 00-2 2v2h12z"/></svg>
                            </div>
                            <h2 class="text-3xl font-cinzel font-bold text-maroon-deep">Authentic Catering</h2>
                        </div>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            Delight your guests with the rich flavors of Sri Lanka. We offer curated menus featuring traditional rice and curry feasts, sweets (Kevum, Kokis), and refreshing herbal drinks. 
                            Our catering partners are experts in authentic preparation methods, using clay pots and banana leaves to enhance the experience.
                        </p>
                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-sm text-gray-700">
                            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-gold-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Traditional Buffet Spreads</li>
                            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-gold-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> High Tea with Local Delicacies</li>
                            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-gold-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Live Hoppers/Kottu Stations</li>
                            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-gold-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Customized Menu Planning</li>
                        </ul>
                    </div>
                </div>

                {{-- Service 2 --}}
                <div class="flex flex-col md:flex-row-reverse items-center gap-8 bg-white p-6 rounded-2xl shadow-lg border-r-4 border-gold-primary">
                    <div class="w-full md:w-1/3">
                        <div class="h-64 rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1595188764032-4d01b97b0542?q=80&w=2070&auto=format&fit=crop" alt="Decor" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="w-full md:w-2/3 text-right md:text-left"> <!-- Text stays left on md? Actually let's keep text left for readability or right for symmetry. Let's keep strictly text-left but maybe align items right on wrapper? No, standardized layout is better. Text alignment class removed. -->
                        <div class="flex items-center gap-3 mb-3 md:justify-end">
                            <h2 class="text-3xl font-cinzel font-bold text-maroon-deep">Decorations & Themes</h2>
                            <div class="p-2 bg-green-100 rounded-full text-maroon-mid">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4 leading-relaxed md:text-right">
                             We transform venues into culturally immersive spaces. Using fresh flowers (Lotus, Jasmine), traditional motifs (Liyavel), Gokkola art, and oil lamps, we create breathtaking environments that reflect the grandeur of Sri Lankan history.
                        </p>
                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-sm text-gray-700 md:text-right" dir="ltr"> <!-- Simple list -->
                            <li class="flex items-center gap-2 md:flex-row-reverse"><svg class="w-4 h-4 text-gold-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Poruwa Construction & Decor</li>
                            <li class="flex items-center gap-2 md:flex-row-reverse"><svg class="w-4 h-4 text-gold-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Settee Back Designs</li>
                            <li class="flex items-center gap-2 md:flex-row-reverse"><svg class="w-4 h-4 text-gold-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Outdoor Lighting & Oil Lamps</li>
                            <li class="flex items-center gap-2 md:flex-row-reverse"><svg class="w-4 h-4 text-gold-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Table Settings</li>
                        </ul>
                    </div>
                </div>

                {{-- Service 3 --}}
                <div class="flex flex-col md:flex-row items-center gap-8 bg-white p-6 rounded-2xl shadow-lg border-l-4 border-gold-primary">
                    <div class="w-full md:w-1/3">
                        <div class="h-64 rounded-xl overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1514533450685-4493e01d1fdc?q=80&w=1974&auto=format&fit=crop" alt="Music" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="w-full md:w-2/3">
                         <div class="flex items-center gap-3 mb-3">
                            <div class="p-2 bg-green-100 rounded-full text-maroon-deep">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/></svg>
                            </div>
                            <h2 class="text-3xl font-cinzel font-bold text-maroon-deep">Traditional Drumming & Dance</h2>
                        </div>
                        <p class="text-gray-600 mb-4 leading-relaxed">
                            No traditional event is complete without the rhythmic beats of the Geta Bera or the grace of Kandyan dancers. We connect you with the country's finest cultural troupes to perform welcome dances, Pooja dances, and drum fusion acts.
                        </p>
                        <ul class="grid grid-cols-1 sm:grid-cols-2 gap-2 text-sm text-gray-700">
                             <li class="flex items-center gap-2"><svg class="w-4 h-4 text-gold-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Kandyan & Low Country Dancers</li>
                            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-gold-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Magul Bera (Welcome Drumming)</li>
                            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-gold-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Jayawangala Gatha Recital</li>
                            <li class="flex items-center gap-2"><svg class="w-4 h-4 text-gold-primary" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg> Flute & Oriental Music</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection