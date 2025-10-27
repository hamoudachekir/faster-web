<!-- Navigation -->
<nav class="fixed top-0 w-full bg-white/95 backdrop-blur-md shadow-sm z-50" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                <div class="relative">
                    <img src="{{ asset('images/faster-logos.png') }}" alt="Faster" class="h-14 w-14 object-cover rounded-2xl shadow-md group-hover:shadow-lg transition-all duration-300">
                </div>
                <span class="text-2xl font-bold text-gray-900">Faster</span>
            </a>
            
            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="{{ route('home') }}" class="text-gray-900 hover:text-[#2BD834] font-medium transition">Accueil</a>
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="text-gray-900 hover:text-[#2BD834] font-medium transition flex items-center">
                        Services
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 transform scale-95"
                         x-transition:enter-end="opacity-100 transform scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 transform scale-100"
                         x-transition:leave-end="opacity-0 transform scale-95"
                         class="absolute left-0 w-64 bg-white rounded-lg shadow-xl mt-2 py-2 z-50"
                         style="display: none;">
                        <a href="{{ route('services.show', 'ride') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                                <div>
                                    <div class="font-semibold text-gray-900">Faster Ride</div>
                                    <div class="text-sm text-gray-600">Se déplacer facilement</div>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('services.show', 'delivery') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                </svg>
                                <div>
                                    <div class="font-semibold text-gray-900">Faster Delivery</div>
                                    <div class="text-sm text-gray-600">Livrer tout, partout</div>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('services.show', 'business') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <div>
                                    <div class="font-semibold text-gray-900">Faster Business</div>
                                    <div class="text-sm text-gray-600">Solutions entreprises</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @guest
                    @if(!session('driver_id') && !session('partner_id'))
                    <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                        <button class="text-gray-900 hover:text-[#2BD834] font-medium transition flex items-center">
                            Rejoindre
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="open" 
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 transform scale-95"
                             x-transition:enter-end="opacity-100 transform scale-100"
                             x-transition:leave="transition ease-in duration-150"
                             x-transition:leave-start="opacity-100 transform scale-100"
                             x-transition:leave-end="opacity-0 transform scale-95"
                             class="absolute left-0 w-64 bg-white rounded-lg shadow-xl mt-2 py-2 z-50"
                             style="display: none;">
                            <a href="{{ route('join.driver') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                    </svg>
                                    <div>
                                        <div class="font-semibold text-gray-900">Devenir Conducteur</div>
                                        <div class="text-sm text-gray-600">Rejoignez notre équipe</div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('join.partner') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                                <div class="flex items-center">
                                    <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                                    </svg>
                                    <div>
                                        <div class="font-semibold text-gray-900">Devenir Partenaire</div>
                                        <div class="text-sm text-gray-600">Développez votre activité</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                @endguest
                <a href="{{ route('about') }}" class="text-gray-900 hover:text-[#2BD834] font-medium transition">À propos</a>
                <a href="{{ route('contact') }}" class="text-gray-900 hover:text-[#2BD834] font-medium transition">Contact</a>
                
                @auth
                <!-- Authenticated User Menu -->
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="flex items-center space-x-2 text-gray-900 hover:text-[#2BD834] font-medium transition">
                        <img src="{{ asset('images/faster-logos.png') }}" alt="{{ auth()->user()->name }}" class="h-10 w-10 rounded-full object-cover ring-2 ring-[#2BD834]">
                        <span>{{ auth()->user()->name }}</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 transform scale-95"
                         x-transition:enter-end="opacity-100 transform scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 transform scale-100"
                         x-transition:leave-end="opacity-0 transform scale-95"
                         class="absolute right-0 w-64 bg-white rounded-lg shadow-xl mt-2 py-2 z-50"
                         style="display: none;">
                        <a href="{{ route('user.profile') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <span class="font-semibold text-gray-900">Profil</span>
                            </div>
                        </a>
                        <a href="{{ route('user.notifications') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                                </svg>
                                <span class="font-semibold text-gray-900">Notifications</span>
                            </div>
                        </a>
                        <a href="{{ route('user.wallet') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                                </svg>
                                <span class="font-semibold text-gray-900">Porte monnaie</span>
                            </div>
                        </a>
                        <a href="{{ route('user.orders') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                </svg>
                                <span class="font-semibold text-gray-900">Mes commandes</span>
                            </div>
                        </a>
                        <a href="{{ route('user.promos') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                </svg>
                                <span class="font-semibold text-gray-900">Promo</span>
                            </div>
                        </a>
                        <a href="{{ route('user.settings') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="font-semibold text-gray-900">Réglages</span>
                            </div>
                        </a>
                        <a href="{{ route('user.feedback') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                </svg>
                                <span class="font-semibold text-gray-900">Commentaires</span>
                            </div>
                        </a>
                        <hr class="my-2">
                        <a href="{{ route('user.logout') }}" class="block px-4 py-3 hover:bg-red-50 transition text-red-600 font-semibold">
                            Déconnexion
                        </a>
                    </div>
                </div>
                @elseif(session('driver_id'))
                <!-- Driver Menu -->
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="flex items-center space-x-2 text-gray-900 hover:text-[#2BD834] font-medium transition">
                        <img src="{{ asset('images/LOGO CHAUFFEUR FASTER_Plan de travail 1.png') }}" alt="Conducteur" class="h-10 w-10 rounded-full object-cover ring-2 ring-[#2BD834]">
                        <span>Conducteur</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 transform scale-95"
                         x-transition:enter-end="opacity-100 transform scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 transform scale-100"
                         x-transition:leave-end="opacity-0 transform scale-95"
                         class="absolute right-0 w-64 bg-white rounded-lg shadow-xl mt-2 py-2 z-50"
                         style="display: none;">
                        <a href="{{ route('driver.profile') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <span class="font-semibold text-gray-900">Profil</span>
                            </div>
                        </a>
                        <a href="{{ route('driver.dashboard') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                                <span class="font-semibold text-gray-900">Tableau de bord</span>
                            </div>
                        </a>
                        <a href="{{ route('driver.settings') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="font-semibold text-gray-900">Réglages</span>
                            </div>
                        </a>
                        <hr class="my-2">
                        <a href="{{ route('driver.logout') }}" class="block px-4 py-3 hover:bg-red-50 transition text-red-600 font-semibold">
                            Déconnexion
                        </a>
                    </div>
                </div>
                @elseif(session('partner_id'))
                <!-- Partner Menu -->
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="flex items-center space-x-2 text-gray-900 hover:text-[#2BD834] font-medium transition">
                        <img src="{{ asset('images/faster-logos.png') }}" alt="Partenaire" class="h-10 w-10 rounded-full object-cover ring-2 ring-[#0000ff]">
                        <span>Partenaire</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 transform scale-95"
                         x-transition:enter-end="opacity-100 transform scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 transform scale-100"
                         x-transition:leave-end="opacity-0 transform scale-95"
                         class="absolute right-0 w-64 bg-white rounded-lg shadow-xl mt-2 py-2 z-50"
                         style="display: none;">
                        <a href="{{ route('partner.profile') }}" class="block px-4 py-3 hover:bg-blue-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#0000ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <span class="font-semibold text-gray-900">Profil</span>
                            </div>
                        </a>
                        <a href="{{ route('partner.dashboard') }}" class="block px-4 py-3 hover:bg-blue-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#0000ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                                </svg>
                                <span class="font-semibold text-gray-900">Tableau de bord</span>
                            </div>
                        </a>
                        <a href="{{ route('partner.settings') }}" class="block px-4 py-3 hover:bg-blue-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#0000ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="font-semibold text-gray-900">Réglages</span>
                            </div>
                        </a>
                        <hr class="my-2">
                        <a href="{{ route('partner.logout') }}" class="block px-4 py-3 hover:bg-red-50 transition text-red-600 font-semibold">
                            Déconnexion
                        </a>
                    </div>
                </div>
                @else
                <!-- Guest Login Menu -->
                <div class="relative group" x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false">
                    <button class="text-gray-900 hover:text-[#0000ff] font-medium transition flex items-center">
                        Connexion
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0 transform scale-95"
                         x-transition:enter-end="opacity-100 transform scale-100"
                         x-transition:leave="transition ease-in duration-150"
                         x-transition:leave-start="opacity-100 transform scale-100"
                         x-transition:leave-end="opacity-0 transform scale-95"
                         class="absolute left-0 w-64 bg-white rounded-lg shadow-xl mt-2 py-2 z-50"
                         style="display: none;">
                        <a href="{{ route('user.login') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <div>
                                    <div class="font-semibold text-gray-900">Utilisateur</div>
                                    <div class="text-sm text-gray-600">Se connecter</div>
                                </div>
                            </div>
                        </a>
                        <hr class="my-1">
                        <a href="{{ route('driver.login') }}" class="block px-4 py-3 hover:bg-green-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                                <div>
                                    <div class="font-semibold text-gray-900">Espace Conducteur</div>
                                    <div class="text-sm text-gray-600">Connexion conducteur</div>
                                </div>
                            </div>
                        </a>
                        <a href="{{ route('partner.login') }}" class="block px-4 py-3 hover:bg-blue-50 transition">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 mr-2 text-[#0000ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <div>
                                    <div class="font-semibold text-gray-900">Espace Partenaire</div>
                                    <div class="text-sm text-gray-600">Connexion partenaire</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endauth
            </div>
            
            <!-- CTA Button -->
            <div class="hidden md:block">
                @auth
                    <a href="{{ route('user.dashboard') }}" class="px-6 py-3 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-full font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition duration-200">
                        Mon tableau de bord
                    </a>
                @else
                    @if(!session('driver_id') && !session('partner_id'))
                    <a href="{{ route('user.register') }}" class="px-6 py-3 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-full font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition duration-200">
                        S'inscrire
                    </a>
                    @endif
                @endauth
            </div>
            
            <!-- Mobile Menu Button -->
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden p-2 rounded-lg hover:bg-gray-100">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div x-show="mobileMenuOpen" x-transition class="md:hidden bg-white border-t">
        <div class="px-4 py-4 space-y-4">
            <a href="{{ route('home') }}" class="block text-gray-900 font-medium">Accueil</a>
            <div>
                <div class="font-semibold text-gray-900 mb-2">Services</div>
                <a href="{{ route('services.show', 'ride') }}" class="block pl-4 py-2 text-gray-600">Faster Ride</a>
                <a href="{{ route('services.show', 'delivery') }}" class="block pl-4 py-2 text-gray-600">Faster Delivery</a>
                <a href="{{ route('services.show', 'business') }}" class="block pl-4 py-2 text-gray-600">Faster Business</a>
            </div>
            @guest
            <div>
                <div class="font-semibold text-gray-900 mb-2">Rejoindre</div>
                <a href="{{ route('join.driver') }}" class="block pl-4 py-2 text-gray-600">Devenir Conducteur</a>
                <a href="{{ route('join.partner') }}" class="block pl-4 py-2 text-gray-600">Devenir Partenaire</a>
            </div>
            @endguest
            @if(!session('driver_id') && !session('partner_id'))
            <a href="{{ route('about') }}" class="block text-gray-900 font-medium">À propos</a>
            <a href="{{ route('contact') }}" class="block text-gray-900 font-medium">Contact</a>
            @endif
            @guest
                @if(!session('driver_id') && !session('partner_id'))
                <div>
                    <div class="font-semibold text-gray-900 mb-2">Connexion</div>
                    <a href="{{ route('user.login') }}" class="flex items-center pl-4 py-2 text-gray-600">
                        <svg class="w-4 h-4 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Utilisateur
                    </a>
                    <a href="{{ route('driver.login') }}" class="flex items-center pl-4 py-2 text-gray-600">
                        <svg class="w-4 h-4 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        Espace Conducteur
                    </a>
                    <a href="{{ route('partner.login') }}" class="flex items-center pl-4 py-2 text-gray-600">
                        <svg class="w-4 h-4 mr-2 text-[#0000ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Espace Partenaire
                    </a>
                </div>
                @endif
            @endguest
            @auth
            <!-- Authenticated User Mobile Menu -->
            <div class="border-t pt-4 space-y-2">
                <div class="flex items-center space-x-2 mb-3">
                    <img src="{{ asset('images/faster-logos.png') }}" alt="{{ auth()->user()->name }}" class="h-10 w-10 rounded-full object-cover ring-2 ring-[#2BD834]">
                    <span class="font-semibold text-gray-900">{{ auth()->user()->name }}</span>
                </div>
                <a href="{{ route('user.profile') }}" class="flex items-center pl-4 py-2 text-gray-600">
                    <svg class="w-4 h-4 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    Profil
                </a>
                <a href="{{ route('user.wallet') }}" class="flex items-center pl-4 py-2 text-gray-600">
                    <svg class="w-4 h-4 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                    </svg>
                    Porte monnaie
                </a>
                <a href="{{ route('user.orders') }}" class="flex items-center pl-4 py-2 text-gray-600">
                    <svg class="w-4 h-4 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                    Mes commandes
                </a>
                <a href="{{ route('user.settings') }}" class="flex items-center pl-4 py-2 text-gray-600">
                    <svg class="w-4 h-4 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Réglages
                </a>
                <a href="{{ route('user.logout') }}" class="flex items-center pl-4 py-2 text-red-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    Déconnexion
                </a>
            </div>
            @elseif(session('driver_id'))
            <!-- Driver Mobile Menu -->
            <div class="border-t pt-4 space-y-2">
                <div class="flex items-center space-x-2 mb-3">
                    <img src="{{ asset('images/LOGO CHAUFFEUR FASTER_Plan de travail 1.png') }}" alt="Conducteur" class="h-10 w-10 rounded-full object-cover ring-2 ring-[#2BD834]">
                    <span class="font-semibold text-gray-900">Conducteur</span>
                </div>
                <a href="{{ route('driver.dashboard') }}" class="flex items-center pl-4 py-2 text-gray-600">
                    <svg class="w-4 h-4 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    Tableau de bord
                </a>
                <a href="{{ route('driver.profile') }}" class="flex items-center pl-4 py-2 text-gray-600">
                    <svg class="w-4 h-4 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    Profil
                </a>
                <a href="{{ route('driver.settings') }}" class="flex items-center pl-4 py-2 text-gray-600">
                    <svg class="w-4 h-4 mr-2 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Réglages
                </a>
                <a href="{{ route('driver.logout') }}" class="flex items-center pl-4 py-2 text-red-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    Déconnexion
                </a>
            </div>
            @elseif(session('partner_id'))
            <!-- Partner Mobile Menu -->
            <div class="border-t pt-4 space-y-2">
                <div class="flex items-center space-x-2 mb-3">
                    <img src="{{ asset('images/faster-logos.png') }}" alt="Partenaire" class="h-10 w-10 rounded-full object-cover ring-2 ring-[#0000ff]">
                    <span class="font-semibold text-gray-900">Partenaire</span>
                </div>
                <a href="{{ route('partner.dashboard') }}" class="flex items-center pl-4 py-2 text-gray-600">
                    <svg class="w-4 h-4 mr-2 text-[#0000ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    Tableau de bord
                </a>
                <a href="{{ route('partner.profile') }}" class="flex items-center pl-4 py-2 text-gray-600">
                    <svg class="w-4 h-4 mr-2 text-[#0000ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    Profil
                </a>
                <a href="{{ route('partner.settings') }}" class="flex items-center pl-4 py-2 text-gray-600">
                    <svg class="w-4 h-4 mr-2 text-[#0000ff]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    Réglages
                </a>
                <a href="{{ route('partner.logout') }}" class="flex items-center pl-4 py-2 text-red-600">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                    </svg>
                    Déconnexion
                </a>
            </div>
            @endauth
            <a href="#download" class="block w-full px-6 py-3 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-full font-semibold text-center">
                Télécharger l'app
            </a>
        </div>
    </div>
</nav>
