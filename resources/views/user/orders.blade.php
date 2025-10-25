@extends('layouts.app')

@section('title', 'Mes Commandes - Faster')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-[#0000ff]/5 via-white to-[#2BD834]/5 py-12">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="{{ route('user.dashboard') }}" class="inline-flex items-center text-gray-600 hover:text-[#2BD834] transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Retour au tableau de bord
            </a>
        </div>

        <div class="bg-white rounded-3xl shadow-xl p-8">
            <div class="flex items-center space-x-4 mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-[#0000ff] to-[#0000cc] rounded-xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Mes Commandes</h1>
                    <p class="text-gray-600">Historique de toutes vos courses et livraisons</p>
                </div>
            </div>

            <!-- Empty State -->
            <div class="text-center py-16">
                <svg class="w-24 h-24 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                <p class="text-xl font-semibold text-gray-900 mb-2">Aucune commande pour le moment</p>
                <p class="text-gray-600 mb-8">Commencez à utiliser nos services dès maintenant!</p>
                <div class="flex gap-4 justify-center">
                    <a href="{{ route('services.show', 'ride') }}" class="px-6 py-3 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-xl font-semibold hover:shadow-xl transition">
                        Commander une course
                    </a>
                    <a href="{{ route('services.show', 'delivery') }}" class="px-6 py-3 bg-gradient-to-r from-[#0000ff] to-[#0000cc] text-white rounded-xl font-semibold hover:shadow-xl transition">
                        Demander une livraison
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
