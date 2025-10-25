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
                <span class="text-2xl">📊</span>
                <span class="font-medium">Dashboard</span>
            </a>
            <a href="{{ route('admin.drivers.index') }}" class="flex items-center space-x-3 px-4 py-3 text-white rounded-xl hover:bg-white/10 transition {{ request()->routeIs('admin.drivers.*') ? 'bg-white/20' : '' }}">
                <span class="text-2xl">🚗</span>
                <span class="font-medium">Conducteurs</span>
            </a>
            <a href="{{ route('admin.partners.index') }}" class="flex items-center space-x-3 px-4 py-3 text-white rounded-xl hover:bg-white/10 transition {{ request()->routeIs('admin.partners.*') ? 'bg-white/20' : '' }}">
                <span class="text-2xl">🤝</span>
                <span class="font-medium">Partenaires</span>
            </a>
            <a href="{{ route('admin.contacts.index') }}" class="flex items-center space-x-3 px-4 py-3 text-white rounded-xl hover:bg-white/10 transition {{ request()->routeIs('admin.contacts.*') ? 'bg-white/20' : '' }}">
                <span class="text-2xl">📧</span>
                <span class="font-medium">Messages</span>
            </a>
            <a href="{{ route('admin.users.index') }}" class="flex items-center space-x-3 px-4 py-3 text-white rounded-xl hover:bg-white/10 transition {{ request()->routeIs('admin.users.*') ? 'bg-white/20' : '' }}">
                <span class="text-2xl">👥</span>
                <span class="font-medium">Utilisateurs</span>
            </a>
        </nav>

        <!-- Logout -->
        <div class="absolute bottom-0 left-0 right-0 p-4 border-t border-white/10">
            <a href="{{ route('admin.logout') }}" class="flex items-center space-x-3 px-4 py-3 text-white rounded-xl hover:bg-red-500/20 transition">
                <span class="text-2xl">🚪</span>
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
