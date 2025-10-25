@extends('layouts.app')

@section('title', 'Mon Profil - Conducteur Faster')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-[#2BD834]/5 via-white to-[#0000ff]/5 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="{{ route('driver.dashboard') }}" class="inline-flex items-center text-gray-600 hover:text-[#2BD834] transition">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                Retour au tableau de bord
            </a>
        </div>

        <div class="bg-white rounded-3xl shadow-xl p-8">
            <div class="flex items-center space-x-4 mb-8">
                <div class="w-16 h-16 bg-gradient-to-br from-[#2BD834] to-[#22b028] rounded-xl flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Mon Profil</h1>
                    <p class="text-gray-600">Gérez vos informations personnelles</p>
                </div>
            </div>

            @if(session('success'))
                <div class="mb-6 bg-green-50 border-l-4 border-green-500 p-4 rounded">
                    <p class="text-green-700">{{ session('success') }}</p>
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 bg-red-50 border-l-4 border-red-500 p-4 rounded">
                    <ul class="list-disc list-inside text-red-700">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Profile Info Form -->
            <form method="POST" action="{{ route('driver.profile.update') }}" class="space-y-6 mb-8">
                @csrf
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">Prénom</label>
                        <input type="text" id="first_name" name="first_name" value="{{ old('first_name', $driver->first_name) }}" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                    </div>

                    <div>
                        <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Nom</label>
                        <input type="text" id="last_name" name="last_name" value="{{ old('last_name', $driver->last_name) }}" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $driver->email) }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone', $driver->phone) }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700 mb-2">Ville</label>
                        <input type="text" id="city" name="city" value="{{ old('city', $driver->city) }}" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                    </div>

                    <div>
                        <label for="region" class="block text-sm font-medium text-gray-700 mb-2">Région</label>
                        <input type="text" id="region" name="region" value="{{ old('region', $driver->region) }}" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                    </div>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white font-semibold px-6 py-3 rounded-xl hover:shadow-xl transition duration-300 transform hover:scale-105">
                    Mettre à jour le profil
                </button>
            </form>

            <hr class="my-8">

            <!-- Change Password Form -->
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Changer le mot de passe</h2>
            <form method="POST" action="{{ route('driver.password.update') }}" class="space-y-6">
                @csrf
                
                <div>
                    <label for="current_password" class="block text-sm font-medium text-gray-700 mb-2">Mot de passe actuel</label>
                    <input type="password" id="current_password" name="current_password" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                </div>

                <div>
                    <label for="new_password" class="block text-sm font-medium text-gray-700 mb-2">Nouveau mot de passe</label>
                    <input type="password" id="new_password" name="new_password" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                </div>

                <div>
                    <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirmer le nouveau mot de passe</label>
                    <input type="password" id="new_password_confirmation" name="new_password_confirmation" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#2BD834] focus:border-transparent transition">
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-[#0000ff] to-[#0000cc] text-white font-semibold px-6 py-3 rounded-xl hover:shadow-xl transition duration-300 transform hover:scale-105">
                    Changer le mot de passe
                </button>
            </form>
        </div>
    </div>
</div>
@endsection