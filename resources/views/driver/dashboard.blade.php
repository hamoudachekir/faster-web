@extends('layouts.app')

@section('title', 'Tableau de Bord Conducteur - Faster')

@section('content')

<section class="min-h-screen bg-gray-50 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Welcome Header -->
        <div class="bg-gradient-to-r from-[#2BD834] to-[#22b028] rounded-3xl shadow-xl p-8 mb-8 text-white" data-aos="fade-up">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-4xl font-bold mb-2">Bienvenue, {{ $driver->first_name }} ! 👋</h1>
                    <p class="text-green-100 text-lg">Conducteur Faster - {{ $driver->service_type }}</p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('driver.profile') }}" class="px-6 py-3 bg-white text-[#2BD834] font-bold rounded-xl hover:bg-gray-100 transition">
                        ⚙️ Mon Profil
                    </a>
                    <a href="{{ route('driver.logout') }}" class="px-6 py-3 bg-white/20 backdrop-blur text-white font-bold rounded-xl hover:bg-white/30 transition">
                        🚪 Déconnexion
                    </a>
                </div>
            </div>
        </div>

        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-white rounded-2xl shadow-lg p-6" data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-4xl">✅</div>
                    <span class="px-3 py-1 bg-green-100 text-green-800 text-xs font-bold rounded-full">ACTIF</span>
                </div>
                <div class="text-3xl font-bold text-gray-900 mb-2">{{ ucfirst($driver->status) }}</div>
                <div class="text-sm text-gray-600">Statut du compte</div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-4xl">📅</div>
                </div>
                <div class="text-3xl font-bold text-gray-900 mb-2">{{ $driver->created_at->format('d/m/Y') }}</div>
                <div class="text-sm text-gray-600">Date d'inscription</div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg p-6" data-aos="fade-up" data-aos-delay="300">
                <div class="flex items-center justify-between mb-4">
                    <div class="text-4xl">🚗</div>
                </div>
                <div class="text-3xl font-bold text-gray-900 mb-2">{{ $driver->vehicle_type }}</div>
                <div class="text-sm text-gray-600">Type de véhicule</div>
            </div>
        </div>

        <!-- Profile Info -->
        <div class="bg-white rounded-2xl shadow-lg p-8" data-aos="fade-up">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">📋 Vos informations</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <h3 class="font-semibold text-gray-700 mb-2">Nom complet</h3>
                    <p class="text-gray-900">{{ $driver->first_name }} {{ $driver->last_name }}</p>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-700 mb-2">Email</h3>
                    <p class="text-gray-900">{{ $driver->email }}</p>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-700 mb-2">Téléphone</h3>
                    <p class="text-gray-900">{{ $driver->phone }}</p>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-700 mb-2">Ville</h3>
                    <p class="text-gray-900">{{ $driver->city }}</p>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-700 mb-2">Service</h3>
                    <p class="text-gray-900">{{ $driver->service_type }}</p>
                </div>
                <div>
                    <h3 class="font-semibold text-gray-700 mb-2">Numéro de permis</h3>
                    <p class="text-gray-900">{{ $driver->license_number }}</p>
                </div>
                @if($driver->last_login_at)
                <div class="md:col-span-2">
                    <h3 class="font-semibold text-gray-700 mb-2">Dernière connexion</h3>
                    <p class="text-gray-900">{{ $driver->last_login_at->diffForHumans() }}</p>
                </div>
                @endif
            </div>
        </div>

        <!-- Coming Soon Features -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center" data-aos="fade-up">
                <div class="text-5xl mb-4">🗺️</div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Courses disponibles</h3>
                <p class="text-gray-600 mb-4">Voir et accepter des courses près de vous</p>
                <span class="px-4 py-2 bg-gray-100 text-gray-600 text-sm font-bold rounded-full">Bientôt disponible</span>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="text-5xl mb-4">💰</div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Gains & Historique</h3>
                <p class="text-gray-600 mb-4">Suivez vos revenus et statistiques</p>
                <span class="px-4 py-2 bg-gray-100 text-gray-600 text-sm font-bold rounded-full">Bientôt disponible</span>
            </div>
            <div class="bg-white rounded-2xl shadow-lg p-6 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="text-5xl mb-4">⭐</div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Évaluations</h3>
                <p class="text-gray-600 mb-4">Consultez vos notes et avis clients</p>
                <span class="px-4 py-2 bg-gray-100 text-gray-600 text-sm font-bold rounded-full">Bientôt disponible</span>
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
