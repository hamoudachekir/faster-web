<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') - Faster Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100" x-data="{ sidebarOpen: false }">
    
    <!-- Sidebar -->
    <div class="fixed inset-y-0 left-0 z-50 w-64 bg-gradient-to-b from-[#0000ff] to-[#0000cc] shadow-xl transform transition-transform duration-300 ease-in-out lg:translate-x-0" 
         :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
        
        <!-- Logo -->
        <div class="p-6 border-b border-white/10">
            <div class="flex items-center space-x-3">
                <div class="w-12 h-12 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-xl flex items-center justify-center">
                    <span class="text-white font-bold text-xl">F</span>
                </div>
                <div>
                    <div class="text-white font-bold text-xl">Faster</div>
                    <div class="text-blue-200 text-sm">Admin Panel</div>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <nav class="p-4 space-y-2">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center space-x-3 px-4 py-3 text-white rounded-xl hover:bg-white/10 transition {{ request()->routeIs('admin.dashboard') ? 'bg-white/20' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span class="font-medium">Dashboard</span>
            </a>
            <a href="{{ route('admin.drivers.index') }}" class="flex items-center space-x-3 px-4 py-3 text-white rounded-xl hover:bg-white/10 transition {{ request()->routeIs('admin.drivers.*') ? 'bg-white/20' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                <span class="font-medium">Conducteurs</span>
            </a>
            <a href="{{ route('admin.partners.index') }}" class="flex items-center space-x-3 px-4 py-3 text-white rounded-xl hover:bg-white/10 transition {{ request()->routeIs('admin.partners.*') ? 'bg-white/20' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span class="font-medium">Partenaires</span>
            </a>
            <a href="{{ route('admin.contacts.index') }}" class="flex items-center space-x-3 px-4 py-3 text-white rounded-xl hover:bg-white/10 transition {{ request()->routeIs('admin.contacts.*') ? 'bg-white/20' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
                <span class="font-medium">Messages</span>
            </a>
            <a href="{{ route('admin.users.index') }}" class="flex items-center space-x-3 px-4 py-3 text-white rounded-xl hover:bg-white/10 transition {{ request()->routeIs('admin.users.*') ? 'bg-white/20' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                <span class="font-medium">Utilisateurs</span>
            </a>
            <a href="{{ route('admin.feedback.index') }}" class="flex items-center space-x-3 px-4 py-3 text-white rounded-xl hover:bg-white/10 transition {{ request()->routeIs('admin.feedback.*') ? 'bg-white/20' : '' }}">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/>
                </svg>
                <span class="font-medium">Commentaires</span>
            </a>
        </nav>

        <!-- Logout -->
        <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-white/10">
            <a href="{{ route('admin.logout') }}" class="flex items-center space-x-3 px-4 py-3 text-white rounded-xl hover:bg-red-500/20 transition">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                </svg>
                <span class="font-medium">Déconnexion</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="lg:ml-64">
        <!-- Top Bar -->
        <div class="bg-white shadow-sm border-b border-gray-200 p-4 sticky top-0 z-40">
            <div class="flex items-center justify-between">
                <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden px-3 py-2 rounded-lg hover:bg-gray-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <div class="flex-1 lg:ml-4">
                    <h1 class="text-2xl font-bold text-gray-900">@yield('title', 'Dashboard')</h1>
                </div>
                <a href="{{ route('home') }}" target="_blank" class="px-4 py-2 bg-[#2BD834] text-white rounded-xl font-medium hover:bg-[#22b028] transition">
                    🌐 Voir le site
                </a>
            </div>
        </div>

        <!-- Page Content -->
        <div class="p-6">
            @if(session('success'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </div>
    </div>

</body>
</html>
