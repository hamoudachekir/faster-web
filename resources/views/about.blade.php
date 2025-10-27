@extends('layouts.app')

@section('title', 'À Propos - Faster')

@section('content')

<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-[#0000ff] via-[#0000cc] to-[#2BD834] text-white overflow-hidden">
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <div class="text-center" data-aos="fade-up">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                À propos de Faster
            </h1>
            <p class="text-xl md:text-2xl text-green-100 max-w-3xl mx-auto">
                Révolutionner le transport et la livraison en Afrique
            </p>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <div data-aos="fade-right">
                <div class="w-16 h-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Notre Mission</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Chez Faster, notre mission est de connecter les gens et les entreprises à travers des solutions de transport et de livraison innovantes, rapides et accessibles.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Nous croyons que chacun mérite un accès facile et abordable aux services de mobilité et de livraison, et nous travaillons chaque jour pour rendre cela possible.
                </p>
            </div>
            
            <div data-aos="fade-left">
                <div class="w-16 h-16 bg-gradient-to-br from-[#0000ff] to-[#0000cc] rounded-2xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">Notre Vision</h2>
                <p class="text-lg text-gray-600 leading-relaxed mb-4">
                    Devenir la plateforme de référence pour le transport et la livraison en Afrique, en créant des opportunités économiques pour des milliers de conducteurs et partenaires.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Nous visons à construire un écosystème où technologie et humanité se rencontrent pour améliorer la vie quotidienne de millions de personnes.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Our Story -->
<section class="py-20 bg-gradient-to-br from-gray-50 to-green-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-gray-900 mb-8">L'histoire de Faster</h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-6">
                Faster a été fondé avec une vision simple : faciliter la vie des gens en leur offrant des services de transport et de livraison fiables, rapides et abordables.
            </p>
            <p class="text-lg text-gray-600 leading-relaxed mb-6">
                Depuis nos débuts, nous avons grandi pour devenir une plateforme de confiance qui connecte des milliers d'utilisateurs, de conducteurs et de partenaires commerciaux.
            </p>
            <p class="text-lg text-gray-600 leading-relaxed">
                Aujourd'hui, Faster continue d'innover pour offrir la meilleure expérience possible à tous nos utilisateurs, tout en créant des opportunités économiques durables dans nos communautés.
            </p>
        </div>
    </div>
</section>

<!-- Technology & Innovation -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">
                Technologie & Innovation
            </h2>
            <p class="text-xl text-gray-600">
                Des solutions technologiques au service de tous
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-8 bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl" data-aos="fade-up" data-aos-delay="0">
                <div class="w-16 h-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">📱</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Application Mobile</h3>
                <p class="text-gray-600">Une interface intuitive et facile à utiliser pour tous</p>
            </div>
            
            <div class="text-center p-8 bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">🗺️</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Suivi GPS</h3>
                <p class="text-gray-600">Suivez vos trajets et livraisons en temps réel</p>
            </div>
            
            <div class="text-center p-8 bg-gradient-to-br from-green-50 to-blue-50 rounded-2xl" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-3xl">💳</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Paiement Sécurisé</h3>
                <p class="text-gray-600">Multiples options de paiement sûres et pratiques</p>
            </div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-20 bg-gradient-to-br from-[#0000ff] via-[#0000cc] to-[#2BD834] text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-bold mb-4">Nos Valeurs</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center" data-aos="fade-up" data-aos-delay="0">
                <svg class="w-24 h-24 text-white mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                </svg>
                <h3 class="text-xl font-bold mb-2">Confiance</h3>
                <p class="text-green-100">Nous construisons des relations durables basées sur la confiance</p>
            </div>
            
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <svg class="w-24 h-24 text-white mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                <h3 class="text-xl font-bold mb-2">Rapidité</h3>
                <p class="text-green-100">Nous valorisons votre temps et agissons rapidement</p>
            </div>
            
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <svg class="w-24 h-24 text-white mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                </svg>
                <h3 class="text-xl font-bold mb-2">Excellence</h3>
                <p class="text-green-100">Nous visons l'excellence dans tout ce que nous faisons</p>
            </div>
            
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <svg class="w-24 h-24 text-white mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
                <h3 class="text-xl font-bold mb-2">Impact Social</h3>
                <p class="text-green-100">Nous créons des opportunités et soutenons nos communautés</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gray-800 text-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <h2 class="text-4xl md:text-5xl font-bold mb-6">
            Rejoignez l'aventure Faster
        </h2>
        <p class="text-xl mb-8 text-gray-100">
            Que vous soyez utilisateur, conducteur ou partenaire, faites partie de notre histoire
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('home') }}#download" class="px-8 py-4 bg-gradient-to-r from-[#2BD834] to-[#22b028] rounded-full font-bold text-lg hover:shadow-2xl transform hover:scale-105 transition duration-200">
                Télécharger l'app
            </a>
            <a href="{{ route('contact') }}" class="px-8 py-4 border-2 border-white rounded-full font-bold text-lg hover:bg-white hover:text-gray-900 transition duration-200">
                Nous contacter
            </a>
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
