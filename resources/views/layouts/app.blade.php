<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Faster - Transport et livraison rapide">
    <!-- Favicon / App Icons -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/faster-icon-blue.svg') }}">
    <link rel="alternate icon" type="image/png" href="{{ asset('images/faster-logos.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/faster-logos.png') }}">
    <link rel="mask-icon" href="{{ asset('images/faster-icon-green.svg') }}" color="#2BD834">
    <meta name="theme-color" content="#0000ff" />
    <title>@yield('title', 'Faster - Transport et Livraison')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Alpine.js for interactivity -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="antialiased bg-gray-50">
    
    @include('partials.navbar')
    
    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>
    
    @include('partials.footer')
    
</body>
</html>
