@extends('layouts.app')

@section('title', 'Page non trouvée - Faster')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-[#2BD834]/10 via-white to-[#0000ff]/10 flex items-center justify-center px-4">
    <div class="max-w-2xl w-full text-center">
        <!-- 404 Animation -->
        <div class="mb-8">
            <h1 class="text-9xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-[#2BD834] to-[#0000ff] animate-pulse">
                404
            </h1>
        </div>

        <!-- Error Message -->
        <div class="bg-white rounded-3xl shadow-2xl p-8 mb-8">
            <div class="mb-6">
                <svg class="w-24 h-24 mx-auto text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
            
            <h2 class="text-3xl font-bold text-gray-900 mb-4">
                Oups ! Page non trouvée
            </h2>
            
            <p class="text-gray-600 text-lg mb-8">
                Désolé, la page que vous recherchez n'existe pas ou a été déplacée.
            </p>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('home') }}" class="inline-flex items-center justify-center px-6 py-3 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white font-semibold rounded-xl hover:shadow-xl transition duration-300 transform hover:scale-105">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    Retour à l'accueil
                </a>
                
                <button onclick="window.history.back()" class="inline-flex items-center justify-center px-6 py-3 bg-white border-2 border-gray-300 text-gray-700 font-semibold rounded-xl hover:bg-gray-50 transition duration-300">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Page précédente
                </button>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="bg-white/50 backdrop-blur-sm rounded-2xl p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Pages populaires</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="{{ route('home') }}" class="flex flex-col items-center p-3 rounded-lg hover:bg-white transition">
                    <svg class="w-8 h-8 text-[#2BD834] mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                    <span class="text-sm font-medium text-gray-700">Accueil</span>
                </a>
                
                <a href="{{ route('about') }}" class="flex flex-col items-center p-3 rounded-lg hover:bg-white transition">
                    <svg class="w-8 h-8 text-[#0000ff] mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="text-sm font-medium text-gray-700">À propos</span>
                </a>
                
                <a href="{{ route('contact') }}" class="flex flex-col items-center p-3 rounded-lg hover:bg-white transition">
                    <svg class="w-8 h-8 text-[#2BD834] mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    <span class="text-sm font-medium text-gray-700">Contact</span>
                </a>
                
                <a href="{{ route('join.driver') }}" class="flex flex-col items-center p-3 rounded-lg hover:bg-white transition">
                    <svg class="w-8 h-8 text-[#0000ff] mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                    <span class="text-sm font-medium text-gray-700">Rejoindre</span>
                </a>
            </div>
        </div>

        <!-- Help Text -->
        <p class="mt-8 text-gray-600">
            Besoin d'aide ? <a href="{{ route('contact') }}" class="text-[#2BD834] font-semibold hover:underline">Contactez-nous</a>
        </p>
    </div>
</div>
@endsection
