<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dandiyama - Sri Lankan Traditional Event Management')</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">

    {{-- Styles / Scripts --}}
    @vite(['public/resources/css/app.css', 'public/resources/js/app.js'])
    <style>
        body { font-family: 'Lato', sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Cinzel', serif; }
        .bg-pattern {
            background-image: url('data:image/svg+xml,%3Csvg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%239C92AC" fill-opacity="0.05" fill-rule="evenodd"%3E%3Ccircle cx="3" cy="3" r="3"/%3E%3Ccircle cx="13" cy="13" r="3"/%3E%3C/g%3E%3C/svg%3E');
        }
    </style>
</head>
<body class="font-lato text-text-dark bg-ivory antialiased">
    <div class="min-h-screen flex flex-col">
        @include('partials.navbar')

        <main class="flex-grow">
            @yield('content')
        </main>

        @include('partials.footer')
    </div>
    
    {{-- Scripts --}}
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>