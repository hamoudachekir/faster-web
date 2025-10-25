@extends('layouts.app')

@section('title', 'Notifications - Faster')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-[#0000ff]/5 via-white to-[#2BD834]/5 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="{{ route('user.dashboard') }}" class="inline-flex items-center text-gray-600 hover:text-[#2BD834] transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Retour au tableau de bord
            </a>
        </div>

        <div class="bg-white rounded-3xl shadow-xl p-8">
            <div class="flex items-center justify-between mb-8">
                <div class="flex items-center space-x-4">
                    <div class="relative w-16 h-16 bg-gradient-to-br from-[#0000ff] to-[#0000cc] rounded-xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                        <span class="absolute -top-2 -right-2 w-6 h-6 bg-red-500 rounded-full flex items-center justify-center text-xs text-white font-bold">3</span>
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold text-gray-900">Notifications</h1>
                        <p class="text-gray-600">Restez informé de toutes vos activités</p>
                    </div>
                </div>
                <button class="text-sm text-[#0000ff] hover:text-[#0000cc] font-semibold">
                    Tout marquer comme lu
                </button>
            </div>

            <!-- Notifications List -->
            <div class="space-y-4">
                <div class="flex items-start p-4 bg-blue-50 border-l-4 border-[#0000ff] rounded-lg">
                    <div class="flex-shrink-0 mr-4 text-3xl">🎉</div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-900">Bienvenue sur Faster!</h3>
                        <p class="text-sm text-gray-600 mt-1">Merci de nous avoir rejoint. Découvrez tous nos services.</p>
                        <p class="text-xs text-gray-500 mt-2">Il y a 5 minutes</p>
                    </div>
                </div>

                <div class="flex items-start p-4 bg-green-50 border-l-4 border-[#2BD834] rounded-lg">
                    <div class="flex-shrink-0 mr-4 text-3xl">✅</div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-900">Compte vérifié</h3>
                        <p class="text-sm text-gray-600 mt-1">Votre compte a été vérifié avec succès.</p>
                        <p class="text-xs text-gray-500 mt-2">Il y a 10 minutes</p>
                    </div>
                </div>

                <div class="flex items-start p-4 bg-yellow-50 border-l-4 border-yellow-500 rounded-lg opacity-60">
                    <div class="flex-shrink-0 mr-4 text-3xl">🏷️</div>
                    <div class="flex-1">
                        <h3 class="font-semibold text-gray-900">Nouvelle promotion disponible</h3>
                        <p class="text-sm text-gray-600 mt-1">Profitez de 20% de réduction sur votre première course!</p>
                        <p class="text-xs text-gray-500 mt-2">Il y a 1 heure</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
