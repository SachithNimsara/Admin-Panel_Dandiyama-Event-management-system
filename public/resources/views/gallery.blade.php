@extends('layouts.app')

@section('title', 'Gallery - Dandiyama')

@section('content')
    <div class="bg-ivory py-24 text-center">
         <h1 class="text-4xl md:text-5xl font-cinzel font-bold text-maroon-deep mb-4">Event Gallery</h1>
         <div class="w-24 h-1 bg-gold-primary mx-auto mb-6"></div>
         <p class="text-gray-600 max-w-2xl mx-auto px-4">A glimpse into the magical moments we've created. From intimate gatherings to grand celebrations.</p>
    </div>

    <section class="pb-20 px-4 md:px-8 bg-ivory" x-data="{ imgModal: false, imgModalSrc: '' }">
        <div class="max-w-7xl mx-auto columns-1 sm:columns-2 lg:columns-3 gap-8 space-y-8">
            
            {{-- Gallery Items --}}
            <div class="break-inside-avoid relative group rounded-xl overflow-hidden shadow-lg cursor-pointer" 
                 @click="imgModal = true; imgModalSrc = 'https://images.unsplash.com/photo-1627918344605-645398242a77?q=80&w=2070&auto=format&fit=crop'">
                <img src="https://images.unsplash.com/photo-1627918344605-645398242a77?q=80&w=2070&auto=format&fit=crop" alt="Gallery" class="w-full h-auto transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-maroon-deep/0 group-hover:bg-maroon-deep/40 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                    <span class="text-white font-cinzel font-bold text-lg"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg></span>
                </div>
            </div>

            <div class="break-inside-avoid relative group rounded-xl overflow-hidden shadow-lg cursor-pointer"
                 @click="imgModal = true; imgModalSrc = 'https://images.unsplash.com/photo-1596700868852-257a08b97067?q=80&w=2070&auto=format&fit=crop'">
                <img src="https://images.unsplash.com/photo-1596700868852-257a08b97067?q=80&w=2070&auto=format&fit=crop" alt="Gallery" class="w-full h-auto transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-maroon-deep/0 group-hover:bg-maroon-deep/40 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                     <span class="text-white font-cinzel font-bold text-lg"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg></span>
                </div>
            </div>

            <div class="break-inside-avoid relative group rounded-xl overflow-hidden shadow-lg cursor-pointer"
                 @click="imgModal = true; imgModalSrc = 'https://images.unsplash.com/photo-1546549005-3c1ea665113d?q=80&w=1740&auto=format&fit=crop'">
                <img src="https://images.unsplash.com/photo-1546549005-3c1ea665113d?q=80&w=1740&auto=format&fit=crop" alt="Gallery" class="w-full h-auto transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-maroon-deep/0 group-hover:bg-maroon-deep/40 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                     <span class="text-white font-cinzel font-bold text-lg"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg></span>
                </div>
            </div>

            <div class="break-inside-avoid relative group rounded-xl overflow-hidden shadow-lg cursor-pointer"
                 @click="imgModal = true; imgModalSrc = 'https://images.unsplash.com/photo-1510137600163-2729bc699b24?q=80&w=1770&auto=format&fit=crop'">
                <img src="https://images.unsplash.com/photo-1510137600163-2729bc699b24?q=80&w=1770&auto=format&fit=crop" alt="Gallery" class="w-full h-auto transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-maroon-deep/0 group-hover:bg-maroon-deep/40 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                     <span class="text-white font-cinzel font-bold text-lg"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg></span>
                </div>
            </div>

             <div class="break-inside-avoid relative group rounded-xl overflow-hidden shadow-lg cursor-pointer"
                 @click="imgModal = true; imgModalSrc = 'https://images.unsplash.com/photo-1469334031218-e382a71b716b?q=80&w=2070&auto=format&fit=crop'">
                <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?q=80&w=2070&auto=format&fit=crop" alt="Gallery" class="w-full h-auto transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-maroon-deep/0 group-hover:bg-maroon-deep/40 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                     <span class="text-white font-cinzel font-bold text-lg"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg></span>
                </div>
            </div>

             <div class="break-inside-avoid relative group rounded-xl overflow-hidden shadow-lg cursor-pointer"
                 @click="imgModal = true; imgModalSrc = 'https://images.unsplash.com/photo-1470225620780-dba8ba36b745?q=80&w=2070&auto=format&fit=crop'">
                <img src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?q=80&w=2070&auto=format&fit=crop" alt="Gallery" class="w-full h-auto transform group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-maroon-deep/0 group-hover:bg-maroon-deep/40 transition-colors duration-300 flex items-center justify-center opacity-0 group-hover:opacity-100">
                     <span class="text-white font-cinzel font-bold text-lg"><svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg></span>
                </div>
            </div>

        </div>

        {{-- Lightbox Modal --}}
        <div x-show="imgModal" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 scale-90"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-300"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-90"
             style="display: none;"
             class="fixed inset-0 z-[60] flex items-center justify-center p-4 bg-black/90 backdrop-blur-sm">
            
            <div @click.outside="imgModal = false" class="relative max-w-5xl max-h-screen">
                <button @click="imgModal = false" class="absolute -top-10 right-0 text-white hover:text-gold-primary">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
                <img :src="imgModalSrc" class="max-w-full max-h-[85vh] rounded-lg shadow-2xl border-2 border-gold-primary">
            </div>
        </div>
    </section>
@endsection