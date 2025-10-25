@extends('layouts.app')

@section('title', $service->name . ' - Faster')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#0000ff] via-[#0000cc] to-[#2BD834] text-white overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute w-96 h-96 bg-white rounded-full -top-48 -left-48"></div>
        <div class="absolute w-96 h-96 bg-white rounded-full -bottom-48 -right-48"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-32">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mr-4">
                        @if($service->icon === 'car')
                            <span class="text-4xl">🚗</span>
                        @elseif($service->icon === 'truck')
                            <span class="text-4xl">🚚</span>
                        @else
                            <span class="text-4xl">💼</span>
                        @endif
                    </div>
                    <h1 class="text-5xl md:text-6xl font-bold">
                        {{ $service->name }}
                    </h1>
                </div>
                
                <p class="text-xl md:text-2xl mb-8 text-orange-100">
                    {{ $service->full_description }}
                </p>
                
                <a href="#download" class="inline-block px-8 py-4 bg-white text-[#2BD834] rounded-full font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition duration-200">
                    📱 Télécharger l'app
                </a>
            </div>
            
            <div class="hidden md:block" data-aos="fade-left">
                <div class="w-full h-96 bg-white/10 backdrop-blur rounded-3xl flex items-center justify-center">
                    @if($service->icon === 'car')
                        <span class="text-9xl">🚗</span>
                    @elseif($service->icon === 'truck')
                        <span class="text-9xl">🚚</span>
                    @else
                        <span class="text-9xl">💼</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Fonctionnalités
            </h2>
            <p class="text-xl text-gray-600">
                Tout ce dont vous avez besoin, en un seul endroit
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($service->features as $index => $feature)
            <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl p-8 hover:shadow-xl transition-shadow" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                <div class="w-12 h-12 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">
                    {{ $feature }}
                </h3>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- How it works Section -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-green-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Comment ça marche ?
            </h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center" data-aos="fade-up" data-aos-delay="0">
                <div class="w-20 h-20 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                    1
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Téléchargez l'app</h3>
                <p class="text-gray-600">Installez Faster sur votre smartphone en quelques secondes</p>
            </div>
            
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-20 h-20 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                    2
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Passez votre commande</h3>
                <p class="text-gray-600">Choisissez votre destination ou vos articles à livrer</p>
            </div>
            
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-20 h-20 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mx-auto mb-6 text-white text-2xl font-bold">
                    3
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Suivez en temps réel</h3>
                <p class="text-gray-600">Suivez votre trajet ou livraison en direct</p>
            </div>
        </div>
    </div>
</section>

@if($service->slug === 'ride')
<!-- Ride Specific Features -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Voyagez en toute sérénité
                </h2>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <div>
                            <div class="font-semibold text-gray-900">Conducteurs professionnels</div>
                            <div class="text-gray-600">Tous nos conducteurs sont vérifiés et formés</div>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <div>
                            <div class="font-semibold text-gray-900">Véhicules confortables</div>
                            <div class="text-gray-600">Des voitures propres et bien entretenues</div>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <div>
                            <div class="font-semibold text-gray-900">Tarifs transparents</div>
                            <div class="text-gray-600">Connaissez le prix avant de commander</div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="text-center" data-aos="fade-left">
                <div class="text-9xl">🚗</div>
            </div>
        </div>
    </div>
</section>
@elseif($service->slug === 'delivery')
<!-- Delivery Specific Features -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div class="text-center order-2 md:order-1" data-aos="fade-right">
                <div class="text-9xl">🚚</div>
            </div>
            <div class="order-1 md:order-2" data-aos="fade-left">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Livraison rapide et fiable
                </h2>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <div>
                            <div class="font-semibold text-gray-900">Livraison express</div>
                            <div class="text-gray-600">Recevez vos commandes en moins de 30 minutes</div>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <div>
                            <div class="font-semibold text-gray-900">Large réseau de partenaires</div>
                            <div class="text-gray-600">Restaurants, épiceries et boutiques</div>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <div>
                            <div class="font-semibold text-gray-900">Suivi en temps réel</div>
                            <div class="text-gray-600">Sachez exactement où est votre commande</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@else
<!-- Business Specific Features -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-4xl font-bold text-gray-900 mb-6">
                    Solutions professionnelles
                </h2>
                <ul class="space-y-4">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <div>
                            <div class="font-semibold text-gray-900">Gestion de flotte</div>
                            <div class="text-gray-600">Gérez tous vos véhicules depuis un tableau de bord</div>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <div>
                            <div class="font-semibold text-gray-900">API d'intégration</div>
                            <div class="text-gray-600">Intégrez Faster à vos systèmes existants</div>
                        </div>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-green-500 mr-3 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <div>
                            <div class="font-semibold text-gray-900">Tarifs entreprise</div>
                            <div class="text-gray-600">Des prix préférentiels pour votre organisation</div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="text-center" data-aos="fade-left">
                <div class="text-9xl">💼</div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-[#0000ff] via-[#0000cc] to-[#2BD834] text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">
            Prêt à commencer ?
        </h2>
        <p class="text-xl mb-8 text-orange-100">
            Téléchargez l'application Faster maintenant et profitez de nos services
        </p>
        <a href="#download" class="inline-block px-8 py-4 bg-white text-[#2BD834] rounded-full font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition duration-200">
            📱 Télécharger l'app
        </a>
    </div>
</section>

<!-- Download App Section -->
<section id="download" class="py-20 bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Téléchargez l'application Faster
                </h2>
                <p class="text-xl text-gray-300 mb-8">
                    Disponible sur iOS et Android
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="flex items-center px-6 py-3 bg-black rounded-xl hover:bg-gray-800 transition">
                        <span class="text-3xl mr-3">🍎</span>
                        <div>
                            <div class="text-xs">Télécharger sur</div>
                            <div class="text-lg font-bold">App Store</div>
                        </div>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 bg-black rounded-xl hover:bg-gray-800 transition">
                        <span class="text-3xl mr-3">🤖</span>
                        <div>
                            <div class="text-xs">Disponible sur</div>
                            <div class="text-lg font-bold">Google Play</div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="hidden md:block" data-aos="fade-left">
                <div class="text-center">
                    <div class="text-9xl">📱</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AOS Animation Library -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
    });
</script>

@endsection
