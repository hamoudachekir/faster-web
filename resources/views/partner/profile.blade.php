@extends('layouts.app')

@section('title', 'Mon Profil - Partenaire Faster')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-[#0000ff]/5 via-white to-[#2BD834]/5 py-12">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-6">
            <a href="{{ route('partner.dashboard') }}" class="inline-flex items-center text-gray-600 hover:text-[#0000ff] transition">
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Mon Profil</h1>
                    <p class="text-gray-600">Gérez vos informations d'entreprise</p>
                </div>
            </div>

            @if(session('success'))
                <div class="mb-6 bg-blue-50 border-l-4 border-blue-500 p-4 rounded">
                    <p class="text-blue-700">{{ session('success') }}</p>
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
            <form method="POST" action="{{ route('partner.profile.update') }}" class="space-y-6 mb-8">
                @csrf
                
                <div>
                    <label for="business_name" class="block text-sm font-medium text-gray-700 mb-2">Nom de l'entreprise</label>
                    <input type="text" id="business_name" name="business_name" value="{{ old('business_name', $partner->business_name) }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#0000ff] focus:border-transparent transition">
                </div>

                <div>
                    <label for="contact_name" class="block text-sm font-medium text-gray-700 mb-2">Contact principal</label>
                    <input type="text" id="contact_name" name="contact_name" value="{{ old('contact_name', $partner->contact_name) }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#0000ff] focus:border-transparent transition">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $partner->email) }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#0000ff] focus:border-transparent transition">
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Téléphone</label>
                    <input type="tel" id="phone" name="phone" value="{{ old('phone', $partner->phone) }}" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#0000ff] focus:border-transparent transition">
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="city" class="block text-sm font-medium text-gray-700 mb-2">Ville</label>
                        <input type="text" id="city" name="city" value="{{ old('city', $partner->city) }}" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#0000ff] focus:border-transparent transition">
                    </div>

                    <div>
                        <label for="address" class="block text-sm font-medium text-gray-700 mb-2">Adresse</label>
                        <input type="text" id="address" name="address" value="{{ old('address', $partner->address) }}" required
                               class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#0000ff] focus:border-transparent transition">
                    </div>
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-[#0000ff] to-[#0000cc] text-white font-semibold px-6 py-3 rounded-xl hover:shadow-xl transition duration-300 transform hover:scale-105">
                    Mettre à jour le profil
                </button>
            </form>

            <hr class="my-8">

            <!-- Change Password Form -->
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Changer le mot de passe</h2>
            <form method="POST" action="{{ route('partner.password.update') }}" class="space-y-6">
                @csrf
                
                <div>
                    <label for="current_password" class="block text-sm font-medium text-gray-700 mb-2">Mot de passe actuel</label>
                    <input type="password" id="current_password" name="current_password" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#0000ff] focus:border-transparent transition">
                </div>

                <div>
                    <label for="new_password" class="block text-sm font-medium text-gray-700 mb-2">Nouveau mot de passe</label>
                    <input type="password" id="new_password" name="new_password" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#0000ff] focus:border-transparent transition">
                </div>

                <div>
                    <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Confirmer le nouveau mot de passe</label>
                    <input type="password" id="new_password_confirmation" name="new_password_confirmation" required
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#0000ff] focus:border-transparent transition">
                </div>

                <button type="submit" class="w-full bg-gradient-to-r from-[#2BD834] to-[#22b028] text-white font-semibold px-6 py-3 rounded-xl hover:shadow-xl transition duration-300 transform hover:scale-105">
                    Changer le mot de passe
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
