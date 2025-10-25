@extends('layouts.app')

@section('title', 'Porte Monnaie - Faster')

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

        <!-- Wallet Balance Card -->
        <div class="bg-gradient-to-r from-[#2BD834] to-[#22b028] rounded-3xl shadow-xl p-8 mb-8 text-white">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-lg opacity-90 mb-2">Solde actuel</p>
                    <h1 class="text-5xl font-bold">0.00 DA</h1>
                </div>
                <svg class="w-24 h-24 text-white opacity-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/>
                </svg>
            </div>
            <div class="mt-8 grid grid-cols-2 gap-4">
                <button class="bg-white/20 backdrop-blur-sm px-6 py-3 rounded-xl font-semibold hover:bg-white/30 transition">
                    Recharger
                </button>
                <button class="bg-white/20 backdrop-blur-sm px-6 py-3 rounded-xl font-semibold hover:bg-white/30 transition">
                    Transférer
                </button>
            </div>
        </div>

        <!-- Transaction History -->
        <div class="bg-white rounded-3xl shadow-xl p-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Historique des transactions</h2>
            <div class="text-center py-12">
                <div class="text-6xl mb-4">💰</div>
                <p class="text-gray-600">Aucune transaction pour le moment</p>
                <p class="text-sm text-gray-500 mt-2">Rechargez votre porte-monnaie pour commencer</p>
            </div>
        </div>
    </div>
</div>
@endsection
