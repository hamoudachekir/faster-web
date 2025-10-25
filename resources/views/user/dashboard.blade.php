@extends('layouts.app')

@section('title', 'Mon Tableau de Bord - Faster')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-[#0000ff]/5 via-white to-[#2BD834]/5 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="bg-gradient-to-r from-[#0000ff] to-[#2BD834] rounded-3xl p-8 mb-8 text-white shadow-xl">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('images/faster-logos.png') }}" alt="{{ $user->name }}" class="h-20 w-20 rounded-full object-cover ring-4 ring-white shadow-lg">
                    <div>
                        <h1 class="text-3xl font-bold">Bonjour, {{ $user->name }} 👋</h1>
                        <p class="text-blue-100 mt-1">Bienvenue sur votre tableau de bord</p>
                        <div class="flex items-center mt-2 space-x-4 text-sm">
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                4.90
                            </span>
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                {{ $user->email }}
                            </span>
                            @if($user->phone)
                            <span class="flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                                {{ $user->phone }}
                            </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-sm text-blue-100">Membre depuis</p>
                    <p class="text-xl font-bold">{{ $user->created_at->format('M Y') }}</p>
                </div>
            </div>
        </div>

        <!-- Menu Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Profil -->
            <a href="{{ route('user.profile') }}" class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex items-center space-x-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#2BD834] transition">Profil</h3>
                        <p class="text-sm text-gray-600">Gérer votre profil</p>
                    </div>
                </div>
            </a>

            <!-- Notifications -->
            <a href="{{ route('user.notifications') }}" class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex items-center space-x-4">
                    <div class="relative w-14 h-14 bg-gradient-to-br from-[#0000ff] to-[#0000cc] rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                        <span class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 rounded-full flex items-center justify-center text-xs text-white font-bold">3</span>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#0000ff] transition">Notifications</h3>
                        <p class="text-sm text-gray-600">Voir vos notifications</p>
                    </div>
                </div>
            </a>

            <!-- Porte monnaie -->
            <a href="{{ route('user.wallet') }}" class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex items-center space-x-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#2BD834] transition">Porte monnaie</h3>
                        <p class="text-sm text-gray-600">Solde: 0.00 DA</p>
                    </div>
                </div>
            </a>

            <!-- Mes commandes -->
            <a href="{{ route('user.orders') }}" class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex items-center space-x-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-[#0000ff] to-[#0000cc] rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#0000ff] transition">Mes commandes</h3>
                        <p class="text-sm text-gray-600">Historique des courses</p>
                    </div>
                </div>
            </a>

            <!-- Promo -->
            <a href="{{ route('user.promos') }}" class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex items-center space-x-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#2BD834] transition">Promo</h3>
                        <p class="text-sm text-gray-600">Codes promotionnels</p>
                    </div>
                </div>
            </a>

            <!-- Réglages -->
            <a href="{{ route('user.settings') }}" class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex items-center space-x-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-gray-600 to-gray-700 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-gray-700 transition">Réglages</h3>
                        <p class="text-sm text-gray-600">Paramètres du compte</p>
                    </div>
                </div>
            </a>

            <!-- Commentaires sur l'application -->
            <a href="{{ route('user.feedback') }}" class="group bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="flex items-center space-x-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-[#0000ff] to-[#0000cc] rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold text-gray-900 group-hover:text-[#0000ff] transition">Commentaires</h3>
                        <p class="text-sm text-gray-600">Donner votre avis</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- Quick Actions -->
        <div class="mt-8 bg-white rounded-3xl p-8 shadow-lg">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Actions rapides</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <a href="{{ route('services.show', 'ride') }}" class="flex items-center p-4 bg-gradient-to-br from-[#2BD834]/10 to-[#22b028]/10 rounded-xl hover:shadow-lg transition">
                    <span class="text-4xl mr-4">🚗</span>
                    <div>
                        <h3 class="font-bold text-gray-900">Commander une course</h3>
                        <p class="text-sm text-gray-600">Faster Ride</p>
                    </div>
                </a>
                <a href="{{ route('services.show', 'delivery') }}" class="flex items-center p-4 bg-gradient-to-br from-[#0000ff]/10 to-[#0000cc]/10 rounded-xl hover:shadow-lg transition">
                    <span class="text-4xl mr-4">🚚</span>
                    <div>
                        <h3 class="font-bold text-gray-900">Livraison express</h3>
                        <p class="text-sm text-gray-600">Faster Delivery</p>
                    </div>
                </a>
                <a href="{{ route('services.show', 'business') }}" class="flex items-center p-4 bg-gradient-to-br from-[#2BD834]/10 to-[#22b028]/10 rounded-xl hover:shadow-lg transition">
                    <span class="text-4xl mr-4">💼</span>
                    <div>
                        <h3 class="font-bold text-gray-900">Solutions pro</h3>
                        <p class="text-sm text-gray-600">Faster Business</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
