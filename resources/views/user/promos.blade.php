@extends('layouts.app')

@section('title', 'Promotions - Faster')

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

        <div class="bg-white rounded-3xl shadow-xl p-8 mb-8">
            <div class="flex items-center space-x-4 mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Codes Promo</h1>
                    <p class="text-gray-600">Profitez de nos offres exclusives</p>
                </div>
            </div>

            <!-- Promo Input -->
            <div class="mb-8">
                <label class="block text-sm font-medium text-gray-700 mb-2">Avez-vous un code promo?</label>
                <div class="flex gap-2">
                    <input type="text" placeholder="Entrez votre code" class="flex-1 px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                    <button class="px-6 py-3 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white rounded-xl font-semibold hover:shadow-xl transition">
                        Appliquer
                    </button>
                </div>
            </div>

            <hr class="my-8">

            <!-- Available Promos -->
            <h2 class="text-xl font-bold text-gray-900 mb-6">Promotions disponibles</h2>
            <div class="space-y-4">
                <div class="bg-gradient-to-r from-[#2BD834]/10 to-[#22b028]/10 border-2 border-[#2BD834] rounded-2xl p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">BIENVENUE20</h3>
                            <p class="text-gray-600 mt-1">20% de réduction sur votre première course</p>
                            <p class="text-sm text-gray-500 mt-2">Valable jusqu'au 31/12/2025</p>
                        </div>
                        <button class="px-6 py-2 bg-[#2BD834] text-white rounded-xl font-semibold hover:bg-[#22b028] transition">
                            Utiliser
                        </button>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-[#0000ff]/10 to-[#0000cc]/10 border-2 border-[#0000ff] rounded-2xl p-6">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">DELIVERY10</h3>
                            <p class="text-gray-600 mt-1">10% de réduction sur toutes les livraisons</p>
                            <p class="text-sm text-gray-500 mt-2">Valable jusqu'au 30/11/2025</p>
                        </div>
                        <button class="px-6 py-2 bg-[#0000ff] text-white rounded-xl font-semibold hover:bg-[#0000cc] transition">
                            Utiliser
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
