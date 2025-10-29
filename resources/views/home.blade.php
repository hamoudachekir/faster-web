@extends('layouts.app')

@section('title', 'Faster - Transport et Livraison Rapide')

@section('content')

<!-- Hero Section (3D Parallax) -->
<section class="relative min-h-screen flex items-center overflow-hidden text-white">
    <!-- Layers background -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute inset-0 bg-gradient-to-br from-[#0000ff] via-[#0000cc] to-[#2BD834]"></div>
        <!-- Depth gradient mesh -->
        <div class="absolute -top-40 -left-32 w-[36rem] h-[36rem] bg-white/10 rounded-full blur-3xl will-change-transform" style="transform: translateZ(-200px);"></div>
        <div class="absolute -bottom-40 -right-32 w-[36rem] h-[36rem] bg-[#2BD834]/20 rounded-full blur-3xl will-change-transform" style="transform: translateZ(-200px);"></div>
        <!-- Particles grid -->
        <div class="absolute inset-0 opacity-20 pointer-events-none" style="background-image: radial-gradient(circle, rgba(255,255,255,0.35) 1px, transparent 1px); background-size: 28px 28px;"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 w-full">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <!-- Copy -->
            <div class="text-center md:text-left" data-aos="fade-right">
                <div class="inline-flex items-center bg-white/15 backdrop-blur-md rounded-full px-5 py-2 mb-6 ring-1 ring-white/20">
                    <span class="w-2 h-2 bg-[#2BD834] rounded-full mr-2 animate-pulse"></span>
                    <span class="text-sm font-semibold">Disponible 24/7</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-8">
                    L'application qui fera <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#2BD834] to-white">la différence</span>
                </h1>
                
                <!-- Key Features -->
                <div class="space-y-4 mb-8">
                    <div class="flex items-start bg-white/10 backdrop-blur-sm rounded-2xl p-4 hover:bg-white/15 transition-all duration-300 border border-white/20">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                        </div>
                        <div class="text-left">
                            <h3 class="font-bold text-lg mb-1">Unicité</h3>
                            <p class="text-blue-100 text-sm">Une application faite pour les Tunisiens par des Tunisiens.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start bg-white/10 backdrop-blur-sm rounded-2xl p-4 hover:bg-white/15 transition-all duration-300 border border-white/20">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-[#0000ff] to-[#0000cc] rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <div class="text-left">
                            <h3 class="font-bold text-lg mb-1">Sécurité</h3>
                            <p class="text-blue-100 text-sm">Un service SAV et une vérification optimale des mesures de sécurité.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start bg-white/10 backdrop-blur-sm rounded-2xl p-4 hover:bg-white/15 transition-all duration-300 border border-white/20">
                        <div class="flex-shrink-0 w-12 h-12 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-xl flex items-center justify-center mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"/>
                            </svg>
                        </div>
                        <div class="text-left">
                            <h3 class="font-bold text-lg mb-1">Confiance</h3>
                            <p class="text-blue-100 text-sm">Une transparence totale et des récompenses pour la loyauté.</p>
                        </div>
                    </div>
                </div>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                    <a href="#download" class="group px-8 py-4 bg-[#2BD834] text-white rounded-xl font-bold text-lg hover:shadow-2xl hover:bg-[#22b028] transform hover:-translate-y-0.5 transition duration-300 flex items-center justify-center">
                        Télécharger l'app
                        <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                    </a>
                    <a href="{{ route('services.show', 'ride') }}" class="px-8 py-4 bg-white/10 ring-1 ring-white/30 text-white rounded-xl font-bold text-lg hover:bg-white hover:text-[#0000ff] transition duration-300 flex items-center justify-center">
                        Découvrir nos services
                    </a>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 mt-14">
                    <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-5xl font-extrabold mb-1 bg-gradient-to-r from-white to-[#2BD834] bg-clip-text text-transparent">50K+</div>
                        <div class="text-blue-100">Utilisateurs actifs</div>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="text-5xl font-extrabold mb-1 bg-gradient-to-r from-white to-[#2BD834] bg-clip-text text-transparent">1000+</div>
                        <div class="text-blue-100">Conducteurs pro</div>
                    </div>
                    <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="text-5xl font-extrabold mb-1 bg-gradient-to-r from-white to-[#2BD834] bg-clip-text text-transparent">500+</div>
                        <div class="text-blue-100">Partenaires</div>
                    </div>
                </div>
            </div>

            <!-- 3D phone showcase -->
            <div class="hidden md:block" data-aos="fade-left">
                <div class="relative perspective-[1200px]">
                    <!-- Parallax decorative rings -->
                    <div class="absolute -top-8 -left-8 w-40 h-40 rounded-full ring-4 ring-white/20"></div>
                    <div class="absolute -bottom-10 -right-6 w-56 h-56 rounded-full ring-4 ring-[#2BD834]/30"></div>

                    <!-- Stacked cards with tilt -->
                    <div class="relative w-full max-w-md mx-auto" data-tilt data-tilt-max="12" data-tilt-speed="600" data-tilt-perspective="1200">
                        <div class="absolute -inset-1 bg-gradient-to-r from-white/30 via-[#2BD834]/30 to-white/10 blur-xl rounded-[2.5rem]"></div>
                        <div class="relative rounded-[2.5rem] p-3 bg-white/10 backdrop-blur-xl ring-1 ring-white/20 shadow-2xl">
                            <div class="rounded-[2rem] overflow-hidden bg-gradient-to-b from-gray-900 to-gray-800 aspect-[9/16]">
                                <!-- Top bar -->
                                <div class="flex justify-between items-center px-6 pt-6 text-white/70 text-xs">
                                    <span>10:42</span>
                                    <div class="flex gap-2"><span>📶</span><span>�</span><span>🔋</span></div>
                                </div>
                                <!-- App preview -->
                                <div class="px-6 pt-10">
                                    <img src="{{ asset('images/faster-wordmark.svg') }}" alt="Faster" class="h-8 opacity-90">
                                    <div class="mt-6 grid grid-cols-1 gap-3">
                                        <div class="bg-white/10 rounded-2xl p-4 flex items-center">
                                            <div class="mr-3 flex items-center justify-center">
                                                <svg class="w-8 h-8 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                                </svg>
                                            </div>
                                            <div class="text-left text-white/90">
                                                <div class="font-semibold text-sm">Faster Ride</div>
                                                <div class="text-xs text-white/60">Transport rapide</div>
                                            </div>
                                        </div>
                                        <div class="bg-white/10 rounded-2xl p-4 flex items-center">
                                            <div class="mr-3 flex items-center justify-center">
                                                <svg class="w-8 h-8 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                                </svg>
                                            </div>
                                            <div class="text-left text-white/90">
                                                <div class="font-semibold text-sm">Faster Delivery</div>
                                                <div class="text-xs text-white/60">Livraison express</div>
                                            </div>
                                        </div>
                                        <div class="bg-white/10 rounded-2xl p-4 flex items-center">
                                            <div class="mr-3 flex items-center justify-center">
                                                <svg class="w-8 h-8 text-[#2BD834]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                                </svg>
                                            </div>
                                            <div class="text-left text-white/90">
                                                <div class="font-semibold text-sm">Faster Business</div>
                                                <div class="text-xs text-white/60">Solutions pro</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Floating chips -->
                        <div class="absolute -right-8 top-20 bg-white text-gray-800 rounded-2xl p-4 shadow-2xl">
                            <svg class="w-8 h-8 text-[#2BD834] mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            <div class="text-xs font-semibold">Ultra rapide</div>
                        </div>
                        <div class="absolute -left-8 bottom-32 bg-white text-gray-800 rounded-2xl p-4 shadow-2xl">
                            <svg class="w-8 h-8 text-[#2BD834] mx-auto mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                            <div class="text-xs font-semibold">100% sécurisé</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <div class="text-white/90 text-center">
            <div class="text-sm mb-2">Découvrir</div>
            <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path></svg>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-24 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-block mb-4">
                <span class="bg-gradient-to-r from-[#2BD834] to-[#0000ff] text-white text-sm font-bold px-6 py-2 rounded-full">
                    NOS SERVICES
                </span>
            </div>
            <h2 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-6">
                Tout ce dont vous avez besoin
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Des solutions innovantes pour transformer votre quotidien et développer votre activité
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($services as $index => $service)
            <div class="group relative bg-white rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}" data-tilt data-tilt-max="10" data-tilt-speed="600">
                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-br from-[#0000ff]/5 to-[#2BD834]/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                
                <!-- Decorative Circle -->
                <div class="absolute -right-12 -top-12 w-32 h-32 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full opacity-10 group-hover:opacity-20 transition-opacity"></div>
                
                <div class="relative p-8">
                    <!-- Icon -->
                    <div class="relative mb-6">
                        <div class="w-20 h-20 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-2xl flex items-center justify-center transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg">
                            @if($service->slug === 'ride')
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            @elseif($service->slug === 'delivery')
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                                </svg>
                            @else
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            @endif
                        </div>
                        <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-[#0000ff] rounded-full flex items-center justify-center text-white text-xs font-bold shadow-lg">
                            0{{ $index + 1 }}
                        </div>
                    </div>
                    
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-[#2BD834] transition-colors">
                        {{ $service->name }}
                    </h3>
                    
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        {{ $service->short_description }}
                    </p>
                    
                    <!-- Features List -->
                    <ul class="space-y-3 mb-8">
                        @foreach(array_slice($service->features, 0, 3) as $feature)
                        <li class="flex items-start text-gray-700">
                            <div class="flex-shrink-0 w-6 h-6 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center mr-3 mt-0.5">
                                <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-sm">{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                    
                    <!-- CTA Button -->
                    <a href="{{ route('services.show', $service->slug) }}" class="group/btn inline-flex items-center justify-center w-full px-6 py-3 bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white font-semibold rounded-xl hover:shadow-xl transition-all duration-300 transform hover:scale-105 ring-1 ring-[#2BD834]/30">
                        Découvrir
                        <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Why Faster Section -->
<section class="py-24 bg-gradient-to-br from-[#0000ff]/5 via-white to-[#2BD834]/5 relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle, #2BD834 1px, transparent 1px); background-size: 40px 40px;"></div>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-block mb-4">
                <span class="bg-gradient-to-r from-[#0000ff] to-[#2BD834] text-white text-sm font-bold px-6 py-2 rounded-full">
                    POURQUOI NOUS CHOISIR
                </span>
            </div>
            <h2 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-6">
                L'excellence à votre service
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Découvrez ce qui fait de Faster le leader du transport et de la livraison en Tunisie
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="group text-center bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="0">
                <div class="relative inline-block mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-2xl flex items-center justify-center mx-auto transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-500 shadow-xl">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full animate-ping"></div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-[#2BD834] transition-colors">Ultra Rapide</h3>
                <p class="text-gray-600 leading-relaxed">Service express disponible 24/7 avec des temps d'attente minimaux</p>
                <div class="mt-4 text-[#2BD834] font-bold text-sm">En moins de 5 min</div>
            </div>
            
            <div class="group text-center bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="relative inline-block mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#0000ff] to-[#0000cc] rounded-2xl flex items-center justify-center mx-auto transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-500 shadow-xl">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-green-400 rounded-full flex items-center justify-center">
                        <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-[#0000ff] transition-colors">100% Sécurisé</h3>
                <p class="text-gray-600 leading-relaxed">Conducteurs vérifiés, assurance complète et paiement sécurisé</p>
                <div class="mt-4 text-[#0000ff] font-bold text-sm">Certifié & Vérifié</div>
            </div>
            
            <div class="group text-center bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="relative inline-block mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-2xl flex items-center justify-center mx-auto transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-500 shadow-xl">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-red-400 rounded-full flex items-center justify-center text-white text-xs font-bold">
                        -30%
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-[#2BD834] transition-colors">Prix Abordables</h3>
                <p class="text-gray-600 leading-relaxed">Tarifs transparents, compétitifs et sans frais cachés</p>
                <div class="mt-4 text-[#2BD834] font-bold text-sm">Meilleur rapport qualité/prix</div>
            </div>
            
            <div class="group text-center bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2" data-aos="fade-up" data-aos-delay="300">
                <div class="relative inline-block mb-6">
                    <div class="w-24 h-24 bg-gradient-to-br from-[#0000ff] to-[#0000cc] rounded-2xl flex items-center justify-center mx-auto transform group-hover:scale-110 group-hover:rotate-12 transition-all duration-500 shadow-xl">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                    </div>
                    <div class="absolute -bottom-2 -right-2 w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center text-white text-xs font-bold">
                        4.9
                    </div>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-[#0000ff] transition-colors">Service Premium</h3>
                <p class="text-gray-600 leading-relaxed">Support client réactif et satisfaction garantie</p>
                <div class="mt-4 text-[#0000ff] font-bold text-sm">Note moyenne 4.9/5</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 bg-white relative overflow-hidden">
    <!-- Background Decoration -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-[#2BD834]/10 rounded-full filter blur-3xl"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#0000ff]/10 rounded-full filter blur-3xl"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-block mb-4">
                <span class="bg-gradient-to-r from-[#2BD834] to-[#0000ff] text-white text-sm font-bold px-6 py-2 rounded-full">
                    TÉMOIGNAGES
                </span>
            </div>
            <h2 class="text-5xl md:text-6xl font-extrabold text-gray-900 mb-6">
                Ils nous font confiance
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Découvrez les avis de nos utilisateurs satisfaits à travers toute Tunisie
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($testimonials as $index => $testimonial)
            <div class="group relative bg-gradient-to-br from-white to-gray-50 rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 border border-gray-100" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}" data-tilt data-tilt-max="8">
                <!-- Quote Icon -->
                <div class="absolute top-6 right-6 text-6xl text-[#2BD834]/10 group-hover:text-[#2BD834]/20 transition-colors">
                    "
                </div>
                
                <!-- Rating Stars -->
                <div class="flex items-center mb-6">
                    @for($i = 0; $i < $testimonial->rating; $i++)
                    <svg class="w-6 h-6 text-yellow-400 drop-shadow" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                    @endfor
                    <span class="ml-2 text-sm font-bold text-gray-900">{{ $testimonial->rating }}.0</span>
                </div>
                
                <!-- Testimonial Content -->
                <p class="text-gray-700 mb-8 text-lg leading-relaxed italic relative z-10">
                    "{{ $testimonial->content }}"
                </p>
                
                <!-- User Info -->
                <div class="flex items-center">
                    <div class="relative">
                        <div class="w-14 h-14 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-full flex items-center justify-center text-white font-bold text-xl shadow-lg">
                            {{ substr($testimonial->name, 0, 1) }}
                        </div>
                        <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-green-400 rounded-full border-2 border-white"></div>
                    </div>
                    <div class="ml-4">
                        <div class="font-bold text-gray-900 text-lg">{{ $testimonial->name }}</div>
                        <div class="text-sm text-gray-600 flex items-center">
                            <span class="mr-2">💼</span>
                            {{ $testimonial->role }}
                        </div>
                    </div>
                </div>
                
                <!-- Verified Badge -->
                <div class="absolute bottom-6 right-6 flex items-center text-xs text-green-600 font-semibold">
                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Vérifié
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Trust Indicators -->
        <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8" data-aos="fade-up" data-aos-delay="400">
            <div class="text-center">
                <div class="text-4xl font-bold text-[#2BD834] mb-2">4.9/5</div>
                <div class="text-sm text-gray-600">Note moyenne</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-[#0000ff] mb-2">50K+</div>
                <div class="text-sm text-gray-600">Avis positifs</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-[#2BD834] mb-2">98%</div>
                <div class="text-sm text-gray-600">Satisfaction</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-[#0000ff] mb-2">24/7</div>
                <div class="text-sm text-gray-600">Support client</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="relative py-24 bg-gradient-to-br from-[#0000ff] via-[#0000cc] to-[#2BD834] text-white overflow-hidden">
    <!-- Animated Background -->
    <div class="absolute inset-0">
        <div class="absolute w-96 h-96 bg-white/10 rounded-full -top-48 -left-48 animate-pulse"></div>
        <div class="absolute w-96 h-96 bg-white/10 rounded-full -bottom-48 -right-48 animate-pulse" style="animation-delay: 1s;"></div>
    </div>
    
    <!-- Floating Icons -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none opacity-10">
        <svg class="absolute top-20 left-10 w-16 h-16 text-white animate-bounce" style="animation-duration: 3s;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
        </svg>
        <svg class="absolute top-40 right-20 w-16 h-16 text-white animate-bounce" style="animation-duration: 4s; animation-delay: 1s;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
        </svg>
        <svg class="absolute bottom-32 left-1/4 w-14 h-14 text-white animate-bounce" style="animation-duration: 3.5s; animation-delay: 0.5s;" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
        </svg>
    </div>
    
    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up">
        <!-- Badge -->
        <div class="inline-flex items-center bg-white/20 backdrop-blur-sm rounded-full px-6 py-2 mb-8">
            <span class="w-2 h-2 bg-[#2BD834] rounded-full mr-2 animate-pulse"></span>
            <span class="text-sm font-semibold">Opportunités illimitées</span>
        </div>
        
        <h2 class="text-5xl md:text-6xl font-extrabold mb-6 leading-tight">
            Rejoignez la révolution <br class="hidden md:block"/>
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#2BD834] to-white">Faster</span>
        </h2>
        <p class="text-xl md:text-2xl mb-12 text-blue-100 max-w-3xl mx-auto leading-relaxed">
            Que vous soyez conducteur, partenaire commercial ou utilisateur, Faster vous offre des opportunités incroyables pour transformer votre quotidien
        </p>
        
        <!-- CTA Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto mb-12">
            <!-- Driver Card -->
            <div class="group bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-300 transform hover:scale-105">
                <div class="w-16 h-16 mx-auto mb-4 bg-white/20 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Devenir Conducteur</h3>
                <p class="text-blue-100 mb-6">
                    Gagnez de l'argent en conduisant avec Faster. Horaires flexibles et revenus attractifs.
                </p>
                <ul class="text-left space-y-2 mb-6 text-sm">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-[#2BD834] mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Inscription gratuite et rapide
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-[#2BD834] mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Revenus jusqu'à 100,000 DA/mois
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-[#2BD834] mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Assurance et support inclus
                    </li>
                </ul>
                <a href="{{ route('join.driver') }}" class="group/btn inline-flex items-center justify-center w-full px-8 py-4 bg-[#2BD834] text-white rounded-full font-bold text-lg hover:shadow-2xl hover:bg-[#22b028] transition duration-300">
                    Je m'inscris
                    <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
            
            <!-- Partner Card -->
            <div class="group bg-white/10 backdrop-blur-lg rounded-3xl p-8 border border-white/20 hover:bg-white/20 transition-all duration-300 transform hover:scale-105">
                <div class="w-16 h-16 mx-auto mb-4 bg-white/20 rounded-2xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-3">Devenir Partenaire</h3>
                <p class="text-blue-100 mb-6">
                    Développez votre business avec Faster Business. Solutions sur mesure pour entreprises.
                </p>
                <ul class="text-left space-y-2 mb-6 text-sm">
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-[#2BD834] mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Plateforme de gestion avancée
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-[#2BD834] mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Tarifs préférentiels entreprise
                    </li>
                    <li class="flex items-center">
                        <svg class="w-5 h-5 text-[#2BD834] mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                        </svg>
                        Support commercial dédié
                    </li>
                </ul>
                <a href="{{ route('join.partner') }}" class="group/btn inline-flex items-center justify-center w-full px-8 py-4 bg-white text-[#0000ff] rounded-full font-bold text-lg hover:shadow-2xl hover:bg-gray-100 transition duration-300">
                    Devenir partenaire
                    <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
        
        <!-- Stats -->
        <div class="grid grid-cols-3 gap-8 max-w-3xl mx-auto pt-8 border-t border-white/20">
            <div>
                <div class="text-4xl font-bold mb-2">+1000</div>
                <div class="text-sm text-blue-100">Conducteurs actifs</div>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">+500</div>
                <div class="text-sm text-blue-100">Entreprises partenaires</div>
            </div>
            <div>
                <div class="text-4xl font-bold mb-2">24/7</div>
                <div class="text-sm text-blue-100">Support disponible</div>
            </div>
        </div>
    </div>
</section>

<!-- Download App Section -->
<section id="download" class="py-20 bg-gray-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
            <div data-aos="fade-right">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">
                    Téléchargez l'application Faster
                </h2>
                <p class="text-xl text-gray-100 mb-8">
                    Disponible sur iOS et Android. Commandez, suivez et payez en toute simplicité.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="flex items-center px-6 py-3 bg-gray-900 rounded-xl hover:bg-black transition">
                        <svg class="w-8 h-8 mr-3 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8 1.18-.24 2.31-.93 3.57-.84 1.51.12 2.65.72 3.4 1.8-3.12 1.87-2.38 5.98.48 7.13-.57 1.5-1.31 2.99-2.54 4.09l.01-.01zM12.03 7.25c-.15-2.23 1.66-4.07 3.74-4.25.29 2.58-2.34 4.5-3.74 4.25z"/>
                        </svg>
                        <div>
                            <div class="text-xs">Télécharger sur</div>
                            <div class="text-lg font-bold">App Store</div>
                        </div>
                    </a>
                    <a href="#" class="flex items-center px-6 py-3 bg-gray-900 rounded-xl hover:bg-black transition">
                        <svg class="w-8 h-8 mr-3 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M3.609 1.814L13.792 12 3.61 22.186a.996.996 0 01-.61-.92V2.734a1 1 0 01.609-.92zm10.89 10.893l2.302 2.302-10.937 6.333 8.635-8.635zm3.199-3.198l2.807 1.626a1 1 0 010 1.73l-2.808 1.626L15.206 12l2.492-2.491zM5.864 2.658L16.802 8.99l-2.303 2.303-8.635-8.635z"/>
                        </svg>
                        <div>
                            <div class="text-xs">Disponible sur</div>
                            <div class="text-lg font-bold">Google Play</div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="hidden md:block" data-aos="fade-left">
                <div class="relative perspective-1200">
                    <div class="w-80 h-96 mx-auto bg-gradient-to-br from-[#2BD834]/10 to-[#0000ff]/10 rounded-3xl flex items-center justify-center transform hover:scale-105 transition-all duration-500 shadow-2xl" data-tilt data-tilt-max="15" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.3">
                        <img src="{{ asset('images/app1.svg') }}" alt="Faster App" class="w-64 h-auto object-contain">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- AOS Animation Library -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- VanillaTilt for 3D tilt effects -->
<script src="https://cdn.jsdelivr.net/npm/vanilla-tilt@1.8.1/dist/vanilla-tilt.min.js"></script>
<style>
    /* Smooth perspective container utility */
    .perspective-1200{perspective:1200px}
    .will-change-transform{will-change:transform}
</style>
<script>
    AOS.init({
        duration: 800,
        once: true,
    });
    
    // Initialize VanillaTilt for 3D phone showcase
    VanillaTilt.init(document.querySelectorAll("[data-tilt]"), {
        max: 15,
        speed: 400,
        glare: true,
        "max-glare": 0.3,
    });
    
    // Optional: light parallax on mouse move for hero background circles
    const hero = document.currentScript.closest('section') || document.querySelector('section');
    const layers = document.querySelectorAll('[data-parallax]');
    window.addEventListener('mousemove', (e) => {
        const { innerWidth:w, innerHeight:h } = window;
        const rx = (e.clientX - w/2) / w;
        const ry = (e.clientY - h/2) / h;
        layers.forEach((el, i) => {
            const depth = (i+1) * 10;
            el.style.transform = `translate3d(${rx*depth}px, ${ry*depth}px, 0)`;
        });
    });
</script>

@endsection
